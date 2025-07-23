<?php
require_once 'DBConnection.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prodID'])) {
    $prodID = $_POST['prodID'];
    
    $query = "SELECT prodStock, prodStatus FROM product WHERE prodID = ?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "s", $prodID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if ($row = mysqli_fetch_assoc($result)) {
        echo json_encode([
            'success' => true,
            'stock' => $row['prodStock'],
            'status' => $row['prodStatus'],
            'available' => ($row['prodStock'] > 0 && $row['prodStatus'] === 'A')
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Product not found'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request'
    ]);
}

closeConnection($connect);
?>