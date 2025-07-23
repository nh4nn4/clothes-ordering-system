<?php
// Start session and include database connection
session_start();
include 'DBConnection.php';

// Check if user is logged in
if (!isset($_SESSION['custID'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit;
}

$custID = $_SESSION['custID'];

// Get the raw POST data
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Check if cart data exists
if (!$data || !isset($data['cartData']) || !isset($data['cartData']['items'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid cart data']);
    exit;
}

$cartData = $data['cartData'];

try {
    // Begin transaction
    mysqli_begin_transaction($connect);
    
    // First, clear existing cart items for this customer
    $deleteSql = "DELETE FROM cart WHERE custID = ?";
    $deleteStmt = mysqli_prepare($connect, $deleteSql);
    mysqli_stmt_bind_param($deleteStmt, "s", $custID);
    mysqli_stmt_execute($deleteStmt);
    mysqli_stmt_close($deleteStmt);
    
    // Insert new cart items
    $insertSql = "INSERT INTO cart (custID, prodID, cartQuantity, cartPrice) VALUES (?, ?, ?, ?)";
    $insertStmt = mysqli_prepare($connect, $insertSql);
    
    foreach ($cartData['items'] as $item) {
        // Ensure product ID has 'P' prefix
        $prodID = strpos($item['id'], 'P') === 0 ? $item['id'] : 'P' . $item['id'];
        
        // Calculate total price for the item
        $totalPrice = $item['price'] * $item['quantity'];
        
        mysqli_stmt_bind_param($insertStmt, "ssid", $custID, $prodID, $item['quantity'], $totalPrice);
        mysqli_stmt_execute($insertStmt);
    }
    
    mysqli_stmt_close($insertStmt);
    
    // Commit transaction
    mysqli_commit($connect);
    
    echo json_encode(['success' => true, 'message' => 'Cart updated successfully']);
} catch (Exception $e) {
    // Rollback transaction on error
    mysqli_rollback($connect);
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}

// Close connection
mysqli_close($connect);
?>