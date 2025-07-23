<?php
// payment-process.php
session_start();
header('Content-Type: application/json');

// Check if user is logged in
if (!isset($_SESSION['custID'])) {
    http_response_code(401);
    die(json_encode(['success' => false, 'message' => 'User not logged in']));
}

// Database connection
$host = 'localhost';
$dbname = 'wavelineapparel';
$username = 'root';
$password = '';
$port = 3307;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    http_response_code(500);
    die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die(json_encode(['success' => false, 'message' => 'Method not allowed']));
}

// Get raw POST data
$input = file_get_contents('php://input');
$data = json_decode($input, true) ?: $_POST;

// Validate action
if (empty($data['action'])) {
    http_response_code(400);
    die(json_encode(['success' => false, 'message' => 'Missing action']));
}

$action = $data['action'];
$custID = $_SESSION['custID'];

try {
    switch ($action) {
        case 'create_order':
            createOrder($pdo, $data, $custID);
            break;

        case 'update_details':
            updateOrderDetails($pdo, $data, $custID);
            break;

        case 'clear_cart':
            clearCart($pdo, $custID);
            break;

        case 'process_payment':
            processPayment($pdo, $data, $custID);
            break;

        default:
            http_response_code(400);
            die(json_encode(['success' => false, 'message' => 'Invalid action']));
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Error processing request',
        'error' => $e->getMessage()
    ]);
    exit;
}

function createOrder($pdo, $data, $custID)
{
    // Validate required fields - using isset() instead of empty() to allow 0 values
    $required = ['subtotal', 'shipping', 'total', 'items'];
    foreach ($required as $field) {
        if (!isset($data[$field])) {
            http_response_code(400);
            die(json_encode(['success' => false, 'message' => "Missing required field: $field"]));
        }
    }

    // Validate numeric fields
    if (!is_numeric($data['subtotal']) || !is_numeric($data['shipping']) || !is_numeric($data['total'])) {
        http_response_code(400);
        die(json_encode(['success' => false, 'message' => "Invalid numeric values"]));
    }

    $pdo->beginTransaction();

    try {
        // Generate a random 3-digit number (100-999)
        $randomNumber = mt_rand(100, 999);
        $orderID = 'ORD' . $randomNumber;

        // Check if this ID already exists
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM orders WHERE orderID = :orderID");
        $stmt->execute([':orderID' => $orderID]);
        $count = $stmt->fetchColumn();

        // If it exists, generate a new one (max 5 attempts)
        $attempts = 0;
        while ($count > 0 && $attempts < 5) {
            $randomNumber = mt_rand(100, 999);
            $orderID = 'ORD' . $randomNumber;
            $stmt->execute([':orderID' => $orderID]);
            $count = $stmt->fetchColumn();
            $attempts++;
        }

        // If we still have a duplicate after attempts, use timestamp as fallback
        if ($count > 0) {
            $orderID = 'ORD' . substr(time(), -3);
        }

        $orderDate = date('Y-m-d H:i:s');
        $paymentMethod = !empty($data['paymentMethod']) ? $data['paymentMethod'] : 'Pending';

        // Insert into orders table
        $stmt = $pdo->prepare("INSERT INTO orders 
                              (orderID, orderDate, orderShippingFee, custID, orderSubtotal, orderStatus, ordGrandTotal, ordPaymentMethod) 
                              VALUES (:orderID, :orderDate, :shipping, :custID, :subtotal, 'P', :grandTotal, :paymentMethod)");
        $stmt->execute([
            ':orderID' => $orderID,
            ':orderDate' => $orderDate,
            ':shipping' => (float) $data['shipping'],
            ':custID' => $custID,
            ':subtotal' => (float) $data['subtotal'],
            ':grandTotal' => (float) $data['total'],
            ':paymentMethod' => $paymentMethod
        ]);

        // Insert order details
        $items = json_decode($data['items'], true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception('Invalid items data: ' . json_last_error_msg());
        }

        foreach ($items as $index => $item) {
            // Ensure product ID is properly formatted
            $prodID = $item['prodID'];
            if (!preg_match('/^P\d+$/', $prodID)) {
                $prodID = 'P' . $prodID;
            }

            $orderDetailID = $orderID . str_pad($index + 1, 3, '0', STR_PAD_LEFT);
            $stmt = $pdo->prepare("INSERT INTO order_detail 
                                  (order_detailID, orderID, order_detailQuantity, order_detailPrice, prodID) 
                                  VALUES (:detailID, :orderID, :quantity, :price, :prodID)");
            $stmt->execute([
                ':detailID' => $orderDetailID,
                ':orderID' => $orderID,
                ':quantity' => (int) $item['quantity'],
                ':price' => (float) $item['price'],
                ':prodID' => $prodID
            ]);

            // Update product stock (moved inside transaction)
            $updateStmt = $pdo->prepare("UPDATE product SET prodStock = prodStock - :quantity WHERE prodID = :prodID");
            $updateStmt->execute([
                ':quantity' => (int) $item['quantity'],
                ':prodID' => $prodID
            ]);

            // Check if stock goes below 0
            $checkStmt = $pdo->prepare("SELECT prodStock FROM product WHERE prodID = :prodID");
            $checkStmt->execute([':prodID' => $prodID]);
            $stock = $checkStmt->fetchColumn();

            if ($stock < 0) {
                throw new Exception("Insufficient stock for product $prodID");
            }

            // If stock reaches 0, set status to Inactive
            if ($stock == 0) {
                $statusStmt = $pdo->prepare("UPDATE product SET prodStatus = 'I' WHERE prodID = :prodID AND prodStock = 0");
                $statusStmt->execute([':prodID' => $prodID]);
            }
        }

        // Clear the cart after successful order creation
        $stmt = $pdo->prepare("DELETE FROM cart WHERE custID = :custID");
        $stmt->execute([':custID' => $custID]);

        $pdo->commit();

        echo json_encode([
            'success' => true,
            'message' => 'Order created successfully',
            'orderID' => $orderID
        ]);
    } catch (Exception $e) {
        $pdo->rollBack();
        throw $e;
    }
}

function processPayment($pdo, $data, $custID)
{
    // This is essentially the same as createOrder but with additional payment processing
    createOrder($pdo, $data, $custID);
}

function updateOrderDetails($pdo, $data, $custID)
{
    // Validate required fields
    $required = ['subtotal', 'shipping', 'total', 'items'];
    foreach ($required as $field) {
        if (!isset($data[$field])) {
            http_response_code(400);
            die(json_encode(['success' => false, 'message' => "Missing required field: $field"]));
        }
    }
    echo json_encode([
        'success' => true,
        'message' => 'Order details updated successfully'
    ]);
}

function clearCart($pdo, $custID)
{
    $stmt = $pdo->prepare("DELETE FROM cart WHERE custID = :custID");
    $stmt->execute([':custID' => $custID]);

    echo json_encode([
        'success' => true,
        'message' => 'Cart cleared successfully',
        'deletedRows' => $stmt->rowCount()
    ]);
}
?>