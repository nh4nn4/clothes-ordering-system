<?php
session_start();
require_once 'DBConnection.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if customer is logged in
if (!isset($_SESSION['custID'])) {
    echo json_encode(['success' => false, 'message' => 'Please login to add items to cart']);
    exit();
}

// Validate required parameters
if (!isset($_POST['prodID'], $_POST['quantity'])) {
    echo json_encode(['success' => false, 'message' => 'Missing required parameters']);
    exit();
}

$custID = $_SESSION['custID'];
$prodID = $_POST['prodID'];
$quantity = (int)$_POST['quantity'];

// Validate quantity
if ($quantity < 1) {
    echo json_encode(['success' => false, 'message' => 'Quantity must be at least 1']);
    exit();
}

// Get product price and stock from database
$product_query = "SELECT prodPrice, prodStock FROM product WHERE prodID = ? AND prodStatus = 'A'";
$stmt = mysqli_prepare($connect, $product_query);
mysqli_stmt_bind_param($stmt, "s", $prodID);
mysqli_stmt_execute($stmt);
$product_result = mysqli_stmt_get_result($stmt);

if ($product = mysqli_fetch_assoc($product_result)) {
    $price = $product['prodPrice'];
    
    // Check stock availability
    if ($product['prodStock'] < $quantity) {
        echo json_encode(['success' => false, 'message' => 'Not enough stock available']);
        exit();
    }
    
    $totalPrice = $quantity * $price;
    
    // Check if product already in cart for this customer
    $check_query = "SELECT cartID, cartQuantity FROM cart WHERE custID = ? AND prodID = ?";
    $check_stmt = mysqli_prepare($connect, $check_query);
    mysqli_stmt_bind_param($check_stmt, "ss", $custID, $prodID);
    mysqli_stmt_execute($check_stmt);
    $check_result = mysqli_stmt_get_result($check_stmt);
    
    if (mysqli_num_rows($check_result) > 0) {
        // Update existing cart item
        $cart_item = mysqli_fetch_assoc($check_result);
        $new_quantity = $cart_item['cartQuantity'] + $quantity;
        $new_price = $new_quantity * $price;
        
        $update_query = "UPDATE cart SET 
                        cartQuantity = ?, 
                        cartPrice = ?
                        WHERE cartID = ?";
        $update_stmt = mysqli_prepare($connect, $update_query);
        mysqli_stmt_bind_param($update_stmt, "idi", $new_quantity, $new_price, $cart_item['cartID']);
        $result = mysqli_stmt_execute($update_stmt);
    } else {
        // Insert new cart item
        $insert_query = "INSERT INTO cart (custID, prodID, cartQuantity, cartPrice) 
                         VALUES (?, ?, ?, ?)";
        $insert_stmt = mysqli_prepare($connect, $insert_query);
        mysqli_stmt_bind_param($insert_stmt, "ssid", $custID, $prodID, $quantity, $totalPrice);
        $result = mysqli_stmt_execute($insert_stmt);
    }
    
    if ($result) {
        // Get updated cart count
        $count_query = "SELECT SUM(cartQuantity) AS total FROM cart WHERE custID = ?";
        $count_stmt = mysqli_prepare($connect, $count_query);
        mysqli_stmt_bind_param($count_stmt, "s", $custID);
        mysqli_stmt_execute($count_stmt);
        $count_result = mysqli_stmt_get_result($count_stmt);
        $cart_count = mysqli_fetch_assoc($count_result)['total'] ?? 0;
        
        echo json_encode([
            'success' => true, 
            'cartCount' => $cart_count,
            'message' => 'Product added to cart successfully'
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update cart']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Product not available']);
}

mysqli_close($connect);
exit();
?>