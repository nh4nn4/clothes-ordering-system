<?php
session_start();
ob_start();
// Check if user is logged in
if (!isset($_SESSION['custID'])) {
    header("Location: login.php");
    exit();
}

require_once 'DBConnection.php';

// Initialize messages
$success_message = '';
$error_message = '';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_feedback'])) {
    // Validate and sanitize input
    $orderID = 'ORD' . str_pad(filter_input(INPUT_POST, 'order_id', FILTER_SANITIZE_NUMBER_INT), 3, '0', STR_PAD_LEFT);
    $rating = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_NUMBER_INT);
    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);

    // Validate rating range
    if ($rating < 1 || $rating > 5) {
        $error_message = "Please select a rating between 1 and 5 stars.";
    } elseif (strlen($comment) < 10) {
        $error_message = "Please provide a more detailed comment (minimum 10 characters).";
    } else {
        if (submitOrderFeedback($connect, $orderID, $_SESSION['custID'], $rating, $comment)) {
            $_SESSION['success_message'] = "Thank you for your feedback!";
            header("Location: " . $_SERVER['PHP_SELF']); // Redirect to same page
            exit();
        } else {
            $_SESSION['error_message'] = "You've already submitted feedback for this order.";
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
    }
}

// Get customer orders from database
$currentOrders = getCustomerOrders($connect, $_SESSION['custID'], 'current');
$pastOrders = getCustomerOrders($connect, $_SESSION['custID'], 'past');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Orders - Waveline Apparel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="View your current and past orders with Waveline Apparel">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        /* Order Page Styles */
        .orders-container {
            padding: 120px 0 80px;
            background-color: #f9f9f9;
        }

        .orders-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .order-tabs {
            display: flex;
            margin-bottom: 30px;
            border-bottom: 1px solid #e6e6e6;
            justify-content: center;
        }

        .order-tab {
            padding: 15px 25px;
            cursor: pointer;
            font-weight: 500;
            color: #555;
            border-bottom: 3px solid transparent;
            transition: all 0.3s;
            margin: 0 10px;
        }

        .order-tab:hover {
            color: #717fe0;
        }

        .order-tab.active {
            color: #717fe0;
            border-bottom: 3px solid #717fe0;
        }

        /* Order Card Styles */
        .order-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .order-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .order-header {
            padding: 20px;
            background: #f8f8f8;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            border-bottom: 1px solid #eee;
        }

        .order-id {
            font-weight: bold;
            color: #333;
            font-size: 1.1rem;
        }

        .order-date {
            color: #777;
            font-size: 0.9rem;
        }

        .order-status {
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 14px;
            text-transform: capitalize;
        }

        .status-processing {
            background: #fff3cd;
            color: #856404;
        }

        .status-shipped {
            background: #cce5ff;
            color: #004085;
        }

        .status-delivered {
            background: #d4edda;
            color: #155724;
        }

        .status-cancelled {
            background: #f8d7da;
            color: #721c24;
        }

        .order-details {
            padding: 25px;
        }

        .order-item {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #f0f0f0;
            align-items: center;
        }

        .order-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .item-image {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 6px;
            margin-right: 20px;
            border: 1px solid #eee;
        }

        .item-details {
            flex: 1;
        }

        .item-name {
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 1.05rem;
        }

        .item-category {
            color: #777;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .item-price {
            color: #717fe0;
            font-weight: 600;
            font-size: 1rem;
        }

        .order-summary {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            align-items: center;
        }

        .order-total {
            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
        }

        /* Order Actions */
        .order-actions {
            margin-top: 20px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .btn-action {
            padding: 8px 18px;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            font-size: 0.95rem;
        }

        .btn-track {
            background: #717fe0;
            color: white;
        }

        .btn-track:hover {
            background: #5a6bd9;
        }

        .btn-cancel {
            background: white;
            color: #dc3545;
            border: 1px solid #dc3545;
        }

        .btn-cancel:hover {
            background: #f8f9fa;
        }

        .btn-reorder {
            background: white;
            color: #28a745;
            border: 1px solid #28a745;
        }

        .btn-reorder:hover {
            background: #f8f9fa;
        }

        .btn-view-details {
            background: white;
            color: #717fe0;
            border: 1px solid #717fe0;
        }

        .btn-view-details:hover {
            background: #f8f9fa;
        }

        /* Empty State */
        .empty-orders {
            text-align: center;
            padding: 60px 20px;
            color: #777;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
        }

        .empty-orders i {
            font-size: 60px;
            color: #ddd;
            margin-bottom: 20px;
        }

        /* Feedback Section */
        .feedback-section {
            margin-top: 25px;
            transition: all 0.3s;
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .feedback-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .existing-feedback {
            background: #f8faff;
            padding: 25px;
            border-radius: 8px;
            border-left: 4px solid #717fe0;
        }

        .feedback-content {
            padding: 10px 0;
        }

        .star-rating {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .star-rating .star {
            font-size: 22px;
            color: #ffc107;
            margin-right: 5px;
        }

        .star-rating .star-o {
            color: #ccc;
        }

        .rating-text {
            margin-left: 10px;
            font-weight: 500;
            color: #555;
        }

        .feedback-comment-box {
            background: white;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #eee;
        }

        .feedback-comment {
            margin: 0;
            line-height: 1.6;
            color: #555;
        }

        .feedback-form {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #eee;
        }

        .star-rating-input {
            direction: rtl;
            unicode-bidi: bidi-override;
            text-align: left;
            margin: 15px 0;
        }

        .star-rating-input input {
            display: none;
        }

        .star-rating-input label {
            font-size: 26px;
            color: #ccc;
            cursor: pointer;
            margin-right: 5px;
            transition: all 0.2s;
        }

        .star-rating-input label:hover,
        .star-rating-input label:hover~label,
        .star-rating-input input:checked~label {
            color: #ffc107;
        }

        .feedback-textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            resize: vertical;
            transition: border 0.3s;
            min-height: 120px;
        }

        .feedback-textarea:focus {
            border-color: #717fe0;
            outline: none;
            box-shadow: 0 0 0 2px rgba(113, 127, 224, 0.2);
        }

        .form-submit {
            text-align: right;
            margin-top: 15px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .order-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .order-status {
                align-self: flex-start;
            }

            .order-actions {
                flex-wrap: wrap;
                justify-content: flex-start;
            }

            .btn-action {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar flex-w h-full">
                        <a href="index.php" class="flex-c-m trans-04 p-lr-25">
                            Log Out
                        </a>
                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">
                    <!-- Logo desktop -->
                    <a href="#" class="logo">
                        <img src="images/icons/logo-01.png" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="cust-homepage.php">Home</a>
                            </li>

                            <li>
                                <a href="cust-catalogue.php">Catalogue</a>
                            </li>

                            <li class="label1" data-label1="hot">
                                <a>Features</a>
                                <ul class="sub-menu">
                                    <li><a href="cust-sizefinder.php">Size Finder</a></li>
                                    <li><a href="cust-quiz.php">Quiz</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="cust-order.php">View Orders</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        

                        <a href="cart.php"
                            class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  icon-header-noti js-show-cart">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </a>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-wishlist"
                            data-notify="0">
                            <a href="wishlist.php" class="wishlist-link cl2">
                                <i class="zmdi zmdi-favorite-outline"></i>
                            </a>
                        </div>

                        <div class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11"
                            style="position: relative;">

                            <a href="cust-account.php" class="account-link cl2">
                                <i class="bi bi-person-circle" style="cursor: pointer;"></i>
                            </a>

                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="images/icons/icon-close2.png" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

    <!-- Messages -->
    <?php if (!empty($success_message)): ?>
        <div class="alert alert-success alert-dismissible fade show" style="margin: 20px auto; max-width: 1200px;">
            <?php echo htmlspecialchars($success_message); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger alert-dismissible fade show" style="margin: 20px auto; max-width: 1200px;">
            <?php echo htmlspecialchars($error_message); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <!-- Main Content -->
    <div class="orders-container">
        <div class="container">
            <div class="orders-header">
                <h1 class="mtext-111 cl2">My Orders</h1>
                <p class="stext-113 cl6">View your current and past orders</p>
            </div>

            <div class="order-tabs">
                <div class="order-tab active" onclick="showOrders('current')">Current Orders</div>
                <div class="order-tab" onclick="showOrders('past')">Order History</div>
            </div>

            <!-- Current Orders -->
            <div id="current-orders">
                <?php if (!empty($currentOrders)): ?>
                    <?php foreach ($currentOrders as $order): ?>
                        <div class="order-card">
                            <div class="order-header">
                                <div>
                                    <span class="order-id">Order #<?php echo htmlspecialchars($order['orderID']); ?></span>
                                    <span class="order-date stext-107 cl7">Placed on
                                        <?php echo date('F j, Y', strtotime($order['orderDate'])); ?></span>
                                </div>
                                <span class="order-status <?php echo getStatusClass($order['orderStatus']); ?>">
                                    <?php echo getStatusText($order['orderStatus']); ?>
                                </span>
                            </div>

                            <div class="order-details">
                                <?php foreach ($order['items'] as $item): ?>
                                    <div class="order-item">
                                        <img src="<?php echo getProductImage($item['prodID']); ?>"
                                            alt="<?php echo htmlspecialchars($item['prodName']); ?>" class="item-image">
                                        <div class="item-details">
                                            <div class="item-name"><?php echo htmlspecialchars($item['prodName']); ?></div>
                                            <div class="item-category">Category:
                                                <?php echo getCategoryName($item['prodCategory']); ?>
                                            </div>
                                            <div class="item-price">
                                                RM<?php echo number_format($item['prodPrice'], 2); ?>
                                                x <?php echo $item['quantity']; ?>
                                                = RM<?php echo number_format($item['prodPrice'] * $item['quantity'], 2); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <div class="order-summary">
                                    <div class="stext-107 cl7">
                                        <div>Shipping: Standard Delivery</div>
                                        <div>Shipping Fee: RM<?php echo number_format($order['orderShippingFee'], 2); ?></div>
                                    </div>
                                    <div class="order-total mtext-106">Total:
                                        RM<?php echo number_format($order['orderSubtotal'] + $order['orderShippingFee'], 2); ?>
                                    </div>
                                </div>

                                <div class="order-actions">
                                    <?php if ($order['orderStatus'] === 'X'): ?>
                                        <button class="btn-action btn-track">Track Order</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="empty-orders">
                        <i class="fa fa-shopping-bag"></i>
                        <h3 class="mtext-105 cl2">No Current Orders</h3>
                        <p class="stext-107 cl7">You don't have any active orders. Start shopping now!</p>
                        <a href="cust-catalogue.php"
                            class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"
                            style="margin-top: 20px;">
                            Browse Catalogue
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Past Orders -->
            <div id="past-orders" style="display: none;">
                <?php if (!empty($pastOrders)): ?>
                    <?php foreach ($pastOrders as $order):
                        $feedback = getOrderFeedback($connect, $order['orderID'], $_SESSION['custID']);
                        ?>
                        <div class="order-card">
                            <div class="order-header">
                                <div>
                                    <span class="order-id">Order #<?php echo htmlspecialchars($order['orderID']); ?></span>
                                    <span class="order-date stext-107 cl7">Placed on
                                        <?php echo date('F j, Y', strtotime($order['orderDate'])); ?></span>
                                </div>
                                <span class="order-status <?php echo getStatusClass($order['orderStatus']); ?>">
                                    <?php echo getStatusText($order['orderStatus']); ?>
                                </span>
                            </div>

                            <div class="order-details">
                                <?php foreach ($order['items'] as $item): ?>
                                    <div class="order-item">
                                        <img src="<?php echo getProductImage($item['prodID']); ?>"
                                            alt="<?php echo htmlspecialchars($item['prodName']); ?>" class="item-image">
                                        <div class="item-details">
                                            <div class="item-name"><?php echo htmlspecialchars($item['prodName']); ?></div>
                                            <div class="item-category">Category:
                                                <?php echo getCategoryName($item['prodCategory']); ?>
                                            </div>
                                            <div class="item-price">
                                                RM<?php echo number_format($item['prodPrice'], 2); ?>
                                                x <?php echo $item['quantity']; ?>
                                                = RM<?php echo number_format($item['prodPrice'] * $item['quantity'], 2); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <div class="order-summary">
                                    <div class="stext-107 cl7">
                                        <div>Shipping: Standard Delivery</div>
                                        <div>Shipping Fee: RM<?php echo number_format($order['orderShippingFee'], 2); ?></div>
                                        <?php if ($order['orderStatus'] === '/'): ?>
                                            <div>Delivered on
                                                <?php echo date('F j, Y', strtotime($order['orderDate'] . ' + 5 days')); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="order-total mtext-106">Total:
                                        RM<?php echo number_format($order['orderSubtotal'] + $order['orderShippingFee'], 2); ?>
                                    </div>
                                </div>

                                <!-- Feedback Section -->
                                <div class="feedback-section" style="display: none;">
                                    <?php if ($feedback): ?>
                                        <div class="existing-feedback">
                                            <div class="feedback-header">
                                                <h4 class="mtext-105 cl2">Your Feedback</h4>
                                                <span class="feedback-date stext-107 cl7">
                                                    <?php echo date('F j, Y', strtotime($feedback['fbDate'])); ?>
                                                </span>
                                            </div>
                                            <div class="feedback-content">
                                                <div class="star-rating">
                                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                                        <i
                                                            class="fa fa-star<?php echo $i > $feedback['fbRating'] ? '-o' : ''; ?> star selected"></i>
                                                    <?php endfor; ?>
                                                    <span class="rating-text"><?php echo $feedback['fbRating']; ?>/5</span>
                                                </div>
                                                <div class="feedback-comment-box">
                                                    <p class="feedback-comment">
                                                        <?php echo htmlspecialchars($feedback['fbComment']); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <form method="post" class="feedback-form">
                                            <h4 class="mtext-105 cl2">Leave Feedback for This Order</h4>
                                            <input type="hidden" name="order_id" value="<?php echo $order['orderID']; ?>">

                                            <div class="form-group">
                                                <label class="stext-107 cl7">How was your overall experience?</label>
                                                <div class="star-rating-input">
                                                    <?php for ($i = 5; $i >= 1; $i--): ?>
                                                        <input type="radio" id="star<?php echo $i; ?>-<?php echo $order['orderID']; ?>"
                                                            name="rating" value="<?php echo $i; ?>" required>
                                                        <label for="star<?php echo $i; ?>-<?php echo $order['orderID']; ?>"
                                                            class="fa fa-star-o star" title="<?php echo $i; ?> stars"></label>
                                                    <?php endfor; ?>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="stext-107 cl7">Your Comments</label>
                                                <textarea name="comment" class="form-control feedback-textarea" rows="4"
                                                    placeholder="Share your thoughts about this order..." required></textarea>
                                                <small class="form-text stext-107 cl7">Minimum 10 characters</small>
                                            </div>

                                            <div class="form-submit">
                                                <button type="submit" name="submit_feedback"
                                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                                    Submit Feedback
                                                </button>
                                            </div>
                                        </form>
                                    <?php endif; ?>
                                </div>

                                <div class="order-actions">
                                    <button class="btn-action btn-view-details">View Details</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="empty-orders">
                        <i class="fa fa-shopping-bag"></i>
                        <h3 class="mtext-105 cl2">No Order History</h3>
                        <p class="stext-107 cl7">You haven't placed any orders yet. Start shopping now!</p>
                        <a href="cust-catalogue.php"
                            class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"
                            style="margin-top: 20px;">
                            Browse Catalogue
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Women
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Men
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Kids
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Accessories
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-3 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Location
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Lot 23, Ground Floor,
                                Paya Bunga Square,
                                Jalan Engku Pengiran Anom 2,
                                20300 Kuala Terengganu,
                                Terengganu, Malaysia
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-3 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        CONTACT
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Phone: +60 19-622 3456
                            </a>
                        </li>

                        <li class="p-b-10">
                            <p class="stext-107 cl7 size-201">
                                Email: WavelineAppSupport@gmail.com
                            </p>
                        </li>

                        <div class="p-t-27">
                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="col-sm-3 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        OPENING HOURS
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        10.00 a.m - 10.00 p.m everyday
                    </p>
                </div>
            </div>

            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
                    </a>
                </div>

                <p class="stext-107 cl6 txt-center">
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i
                        class="fa fa-heart-o" aria-hidden="true"></i> for CSC264 Group Project
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!-- Scripts -->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="js/slick-custom.js"></script>
    <script src="vendor/parallax100/parallax100.js"></script>
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="js/main.js"></script>

    <script>

                // Update cart count function
        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
            $('.js-show-cart').attr('data-notify', totalItems);
        }

        // Update wishlist count function
        function updateWishlistCount() {
            const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            $('.js-show-wishlist').attr('data-notify', wishlist.length);
        }

        // Initialize counts on page load
        $(document).ready(function() {
            updateCartCount();
            updateWishlistCount();
        });
        // Show current or past orders
        function showOrders(type) {
            const currentTab = document.querySelector('.order-tab.active');
            const newTab = event.target;

            // Only proceed if clicking a different tab
            if (currentTab !== newTab) {
                currentTab.classList.remove('active');
                newTab.classList.add('active');

                if (type === 'current') {
                    document.getElementById('current-orders').style.display = 'block';
                    document.getElementById('past-orders').style.display = 'none';
                } else {
                    document.getElementById('current-orders').style.display = 'none';
                    document.getElementById('past-orders').style.display = 'block';
                }
            }
        }

        // View details and feedback toggle
        document.querySelectorAll('.btn-view-details').forEach(button => {
            button.addEventListener('click', function () {
                const orderCard = this.closest('.order-card');
                const feedbackSection = orderCard.querySelector('.feedback-section');

                // Toggle feedback section with animation
                if (feedbackSection.style.display === 'none') {
                    feedbackSection.style.display = 'block';
                    this.textContent = 'Hide Details';
                } else {
                    feedbackSection.style.display = 'none';
                    this.textContent = 'View Details';
                }
            });
        });

        // Enhanced Star Rating Functionality
        document.querySelectorAll('.star-rating-input label').forEach(star => {
            star.addEventListener('mouseover', function () {
                const rating = parseInt(this.getAttribute('title'));
                const stars = this.parentElement.querySelectorAll('label');

                // Highlight stars on hover
                stars.forEach((s, index) => {
                    if (parseInt(s.getAttribute('title')) <= rating) {
                        s.classList.remove('fa-star-o');
                        s.classList.add('fa-star');
                    }
                });
            });

            star.addEventListener('mouseout', function () {
                const checked = this.parentElement.querySelector('input:checked');
                const stars = this.parentElement.querySelectorAll('label');

                // Reset stars if no rating selected
                if (!checked) {
                    stars.forEach(s => {
                        s.classList.remove('fa-star');
                        s.classList.add('fa-star-o');
                    });
                }
            });

            star.addEventListener('click', function () {
                const radio = this.previousElementSibling;
                radio.checked = true;

                // Update visual rating
                const rating = parseInt(radio.value);
                const stars = this.parentElement.querySelectorAll('label');

                stars.forEach((s, index) => {
                    if (parseInt(s.getAttribute('title')) <= rating) {
                        s.classList.remove('fa-star-o');
                        s.classList.add('fa-star');
                    } else {
                        s.classList.remove('fa-star');
                        s.classList.add('fa-star-o');
                    }
                });
            });
        });

        // Reorder functionality
        document.querySelectorAll('.btn-reorder').forEach(button => {
            button.addEventListener('click', function () {
                swal({
                    title: "Reorder Items",
                    text: "All items from this order will be added to your cart.",
                    icon: "success",
                    buttons: {
                        cancel: "Continue Shopping",
                        confirm: {
                            text: "Go to Cart",
                            value: true
                        }
                    }
                }).then((goToCart) => {
                    if (goToCart) {
                        window.location.href = 'cart.php';
                    }
                });
            });
        });

        // Track order functionality
        document.querySelectorAll('.btn-track').forEach(button => {
            button.addEventListener('click', function () {
                const orderCard = this.closest('.order-card');
                const orderId = orderCard.querySelector('.order-id').textContent;

                swal({
                    title: "Order Tracking",
                    text: `${orderId} is currently being processed and will be shipped soon.`,
                    icon: "info",
                    button: "OK"
                });
            });
        });

        // Form validation
        document.querySelectorAll('.feedback-form').forEach(form => {
            form.addEventListener('submit', function (e) {
                const textarea = this.querySelector('textarea');
                if (textarea.value.length < 10) {
                    e.preventDefault();
                    swal({
                        title: "Feedback Required",
                        text: "Please provide a more detailed comment (minimum 10 characters).",
                        icon: "warning",
                        button: "OK"
                    });
                }
            });
        });
    </script>
</body>

</html>

<?php
// Helper functions for display

function getStatusClass($status)
{
    switch ($status) {
        case 'P':
            return 'status-processing';
        case 'C':
            return 'status-delivered';
        case 'X':
            return 'status-cancelled';
        default:
            return '';
    }
}

function getStatusText($status)
{
    switch ($status) {
        case 'P':
            return 'Processing';
        case 'C':
            return 'Completed';
        case 'X':
            return 'Cancelled';
        default:
            return 'Unknown';
    }
}

function getCategoryName($category)
{
    switch ($category) {
        case 'M':
            return 'Men';
        case 'F':
            return 'Women';
        case 'K':
            return 'Kids';
        case 'A':
            return 'Accessories';
        case 'U':
            return 'Unisex';
        default:
            return 'Unknown';
    }
}

function getProductImage($prodID)
{
    // Create a mapping of product IDs to specific image files
    $productImageMap = [
        'P1' => 'product-01.jpg',  // Ocean Vibe Tee (M-TEE-001)
        'P2' => 'product-02.jpg',  // Urban Tee (M-TEE-002)
        'P3' => 'product-03.jpg',  // Flex Fit Pants (M-PNT-001)
        'P4' => 'product-04.jpg',  // Chic Cut Shirt (F-SHT-001)
        'P5' => 'product-05.jpg',  // Elegance Long Shirt (F-SHT-002)
        'P6' => 'product-06.jpg',  // Breezy Sleeveless Top (F-TOP-001)
        'P7' => 'product-07.jpg',  // Women's Power Pants (F-PNT-001)
        'P8' => 'product-08.jpg',  // Lil' Miss Style Set (K-SET-001)
        'P9' => 'product-09.jpg',  // Lil' Champ Outfit (K-SET-002)
        'P10' => 'product-10.jpg', // Cozy Knit Ankle Socks (A-SCK-001)
        'P11' => 'product-11.jpg', // Sleek Shades Sunglasses (A-SUN-001)
        'P12' => 'product-12.jpg', // Vibe Band Stretch Headband (A-HDB-001)
        'P13' => 'product-13.jpg', // Snap Style Cap (A-CAP-001)
        'P14' => 'product-14.jpg', // Chill Brim Sun Hat (A-HAT-001)
        'P15' => 'product-15.jpg', // Core Sweat Unisex Sweater (U-SWT-001)
        'P16' => 'product-16.jpg'  // Street Heat Unisex Hoodie (U-HOD-001)
    ];

    // Default image if no mapping exists
    $defaultImage = 'images/default-product.jpg';

    // Check if we have a specific image for this product
    if (array_key_exists($prodID, $productImageMap)) {
        $imageFile = 'images/' . $productImageMap[$prodID];
        if (file_exists($imageFile)) {
            return $imageFile;
        }
    }

    return $defaultImage;
}

?>