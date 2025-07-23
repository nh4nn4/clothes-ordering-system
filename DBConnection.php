<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "wavelineapparel";
$port = "3307";

// Create connection
$connect = mysqli_connect($hostname, $username, $password, $dbname, $port);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Test query (temporary - remove after testing)
$testQuery = "SELECT 1 FROM cart LIMIT 1";
if (!mysqli_query($connect, $testQuery)) {
    die("Database access failed: " . mysqli_error($connect));
}

// Function to update order status
function updateOrderStatus($connect, $orderID, $newStatus) {
    $allowedStatuses = ['P', 'C', 'X']; // P=Processing, C=Completed, X=Cancelled
    if (in_array($newStatus, $allowedStatuses)) {
        $updateQuery = "UPDATE orders SET orderStatus = ? WHERE orderID = ?";
        $stmt = mysqli_prepare($connect, $updateQuery);
        
        if (!$stmt) {
            error_log("Prepare failed: " . mysqli_error($connect));
            return false;
        }
        
        mysqli_stmt_bind_param($stmt, "ss", $newStatus, $orderID);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
    return false;
}

// Function to get customer data
function getCustomerData($connect, $custID) {
    $query = "SELECT * FROM customer WHERE custID = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "s", $custID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_assoc($result);
}

// Function to get customer orders
function getCustomerOrders($connect, $custID, $type = 'current') {
    $query = "SELECT o.orderID, o.orderDate, o.orderShippingFee, o.orderSubtotal, o.orderStatus,
                 od.order_detailID, od.order_detailQuantity, od.order_detailPrice,
                 p.prodID, p.prodName, p.prodCategory
          FROM orders o
          JOIN order_detail od ON o.orderID = od.orderID
          JOIN product p ON od.prodID = p.prodID
          WHERE o.custID = ?";
    
    if ($type === 'current') {
        // Only show orders that are still processing (not completed or cancelled)
        $query .= " AND o.orderStatus = 'P'";
    } else {
        // Show orders that are either completed or cancelled
        $query .= " AND o.orderStatus IN ('C', 'X')";
    }
    
    $query .= " ORDER BY o.orderDate DESC";
    
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "s", $custID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    $orders = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $orderID = $row['orderID'];
        if (!isset($orders[$orderID])) {
            $orders[$orderID] = [
                'orderID' => $orderID,
                'orderDate' => $row['orderDate'],
                'orderShippingFee' => $row['orderShippingFee'],
                'orderStatus' => $row['orderStatus'],
                'orderSubtotal' => $row['orderSubtotal'],
                'items' => []
            ];
        }
        $orders[$orderID]['items'][] = [
            'prodID' => $row['prodID'],
            'prodName' => $row['prodName'],
            'prodPrice' => $row['order_detailPrice'], // Use the price from order_detail
            'prodCategory' => $row['prodCategory'],
            'quantity' => $row['order_detailQuantity']
        ];
    }
    
    return array_values($orders);
}

// Function to submit feedback for an order
function submitOrderFeedback($connect, $orderID, $custID, $rating, $comment) {
    // Check if feedback already exists for this order
    $checkQuery = "SELECT fbID FROM feedback WHERE orderID = ? AND custID = ?";
    $checkStmt = mysqli_prepare($connect, $checkQuery);
    mysqli_stmt_bind_param($checkStmt, "ss", $orderID, $custID);
    mysqli_stmt_execute($checkStmt);
    mysqli_stmt_store_result($checkStmt);
    
    if (mysqli_stmt_num_rows($checkStmt) > 0) {
        return false; // Feedback already exists for this order
    }

    // Generate a new feedback ID
    $fbID = 'FB' . date('YmdHis') . substr(uniqid(), -4);
    
    $query = "INSERT INTO feedback (fbID, fbDate, fbRating, fbComment, custID, orderID) 
              VALUES (?, NOW(), ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "sdsss", $fbID, $rating, $comment, $custID, $orderID);
    return mysqli_stmt_execute($stmt);
}

// Function to get feedback for an order
function getOrderFeedback($connect, $orderID, $custID) {
    $query = "SELECT * FROM feedback WHERE orderID = ? AND custID = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "ss", $orderID, $custID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_assoc($result);
}

// Close connection when done
function closeConnection($connect) {
    mysqli_close($connect);
}
?>