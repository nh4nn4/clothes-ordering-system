<?php
session_start();
require_once('DBConnection.php'); // Use require_once to ensure the file is loaded

if (!isset($_SESSION['user']) || $_SESSION['user']['type'] !== 'employee') {
    header('Location: login.php');
    exit();
}

// Handle status update if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['newStatus'], $_POST['orderID'])) {
    if (updateOrderStatus($connect, $_POST['orderID'], $_POST['newStatus'])) {
        $_SESSION['message'] = "Order status updated successfully";
        header("Location: employee-hub.php");
        exit();
    } else {
        $_SESSION['error'] = "Failed to update order status";
    }
}

$showAll = isset($_GET['showall']) && $_GET['showall'] == 1;
$limit = $showAll ? 1000 : 5; // Show 5 by default, all when "See All" clicked

// Get order counts
$counts = [
    'in_progress' => 0,
    'completed' => 0,
    'total' => 0
];

$queries = [
    'in_progress' => "SELECT COUNT(*) as count FROM orders WHERE orderStatus = 'P'",
    'completed' => "SELECT COUNT(*) as count FROM orders WHERE orderStatus = 'C'",
    'total' => "SELECT COUNT(*) as count FROM orders"
];

foreach ($queries as $key => $query) {
    $result = mysqli_query($connect, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $counts[$key] = $row['count'];
        mysqli_free_result($result);
    }
}

// Get recent orders
$orders = [];
$query = "SELECT o.orderID, o.orderDate, o.custID, o.orderStatus, 
                 SUM(od.order_detailQuantity) as totalQuantity
          FROM orders o
          JOIN order_detail od ON o.orderID = od.orderID
          GROUP BY o.orderID
          ORDER BY o.orderDate DESC
          LIMIT $limit";

$result = mysqli_query($connect, $query);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $orders[] = $row;
    }
    mysqli_free_result($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employee Hub</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>

<body class="animsition">
    <div class="dashboard-wrapper d-flex">
        <nav id="sidebar-employee" class="bg-white border-right p-3 shadow-sm">
            <div class="sidebar-header text-center py-4">
                <h6 class="mtext-105 cl2 mb-0">Waveline Apparel</h6>
                <p class="stext-107 cl6">EST. 2023</p>
            </div>
            <ul class="list-unstyled main-menu-dashboard">
                <li class="p-b-10 active-menu-dashboard">
                    <a href="#" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-chart mr-2"></i>Order
                    </a>
                </li>
                <li class="p-b-10">
                    <a href="#" onclick="showPinPrompt(); return false;"
                        class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-settings-square mr-2"></i>Admin
                    </a>
                </li>
            </ul>
            <div class="text-center p-t-30 p-b-20">
                <a href="logout.php" class="stext-107 cl2 hov-cl1 trans-04"
                    style="text-decoration: underline; font-size: 0.9rem;">
                    <i class="zmdi zmdi-power mr-1"></i> Logout
                </a>
            </div>
        </nav>

        <div id="content-employee" class="flex-grow-1 bg-light">
            <nav class="navbar navbar-expand-lg shadow-sm p-3 mb-0" style="background-color: #222222;">
                <div class="container-fluid">
                    <h2 class="mtext-105 mb-0" style="color: white;">Employee Hub</h2>
                    <div class="ml-auto d-flex align-items-center">
                        <div class="wrap-icon-header d-flex align-items-center mr-3">
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-0">
                                <i class="zmdi zmdi-account-circle fs-24 text-white"></i>
                            </div>
                            <div class="ml-2 text-white"
                                style="font-size: 0.85rem; line-height: 1.2; transform: translateY(1px);">
                                <div class="font-weight-bold">
                                    <?php
                                    if (!empty($_SESSION['user']['empID'])) {
                                        echo htmlspecialchars($_SESSION['user']['empID']);
                                    } elseif (!empty($_SESSION['empID'])) {
                                        echo htmlspecialchars($_SESSION['empID']);
                                    } else {
                                        echo 'Unknown';
                                    }
                                    ?>
                                </div>
                                <div style="font-weight: normal;">employee</div>
                            </div>
                        </div>
                    </div>
                </div> 
            </nav>
            <!-- Image Header -->
            <section class="bg-img1 txt-center p-lr-15 p-tb-90"
                style="background-image: url('images/adminhub-header.jpg');">
            </section>

            <div class="p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="ltext-103 cl2">ORDER</h3>
                </div>

                <!-- Order Summary Cards -->
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card dashboard-card-employee shadow-sm border-0 rounded-lg">
                            <div class="card-body d-flex flex-column align-items-center text-center p-4">
                                <span class="status-dot-employee pending fa-3x mb-3"
                                    style="width: 44px; height: 44px;"></span>
                                <h4 class="ltext-102 cl2 mb-2"><?= htmlspecialchars($counts['in_progress']) ?></h4>
                                <p class="stext-107 cl6 mb-0">In Progress</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card dashboard-card-employee shadow-sm border-0 rounded-lg">
                            <div class="card-body d-flex flex-column align-items-center text-center p-4">
                                <span class="status-dot-employee completed fa-3x mb-3"
                                    style="width: 44px; height: 44px;"></span>
                                <h4 class="ltext-102 cl2 mb-2"><?= htmlspecialchars($counts['completed']) ?></h4>
                                <p class="stext-107 cl6 mb-0">Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card dashboard-card-employee shadow-sm border-0 rounded-lg">
                            <div class="card-body d-flex flex-column align-items-center text-center p-4">
                                <i class="fa fa-list-alt fa-3x mb-3 cl1"></i>
                                <h4 class="ltext-102 cl2 mb-2"><?= htmlspecialchars($counts['total']) ?></h4>
                                <p class="stext-107 cl6 mb-0">Total Orders</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders Table -->
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="card dashboard-card-employee shadow-sm h-100 border-0 rounded-lg recent-orders">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center p-3">
                                <h4 class="mtext-105 cl2 mb-0">Recent Orders</h4>
                                <a href="?showall=<?= $showAll ? '0' : '1' ?>" class="stext-107 cl1 hov-cl1 trans-04">
                                    <?= $showAll ? 'Show Less' : 'See All' ?> <i class="fa fa-angle-right ml-1"></i>
                                </a>
                            </div>
                            <div class="card-body p-3">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover">
                                        <thead>
                                            <tr class="stext-106 cl6">
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Order Quantity</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Customer ID</th>
                                                <th scope="col">Order Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($orders)): ?>
                                                <?php foreach ($orders as $order): ?>
                                                    <?php
                                                    $statusClass = 'unknown';
                                                    $statusLabel = 'Unknown';

                                                    if ($order['orderStatus'] == 'P') {
                                                        $statusClass = 'pending';
                                                        $statusLabel = 'In Progress';
                                                    } elseif ($order['orderStatus'] == 'C') {
                                                        $statusClass = 'completed';
                                                        $statusLabel = 'Completed';
                                                    } elseif ($order['orderStatus'] == 'X') {
                                                        $statusClass = 'cancelled';
                                                        $statusLabel = 'Cancelled';
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td><?= htmlspecialchars($order['orderID']) ?></td>
                                                        <td><?= htmlspecialchars($order['totalQuantity']) ?></td>
                                                        <td><?= htmlspecialchars($order['orderDate']) ?></td>
                                                        <td><?= htmlspecialchars($order['custID']) ?></td>
                                                        <td>
                                                            <form method="post" class="d-inline-flex align-items-center">
                                                                <input type="hidden" name="orderID"
                                                                    value="<?= htmlspecialchars($order['orderID']) ?>">
                                                                <span
                                                                    class="status-dot-employee <?= $statusClass ?> mr-2"></span>
                                                                <select name="newStatus" class="form-select form-select-sm"
                                                                    onchange="this.form.submit()">
                                                                    <option value="P" <?= $order['orderStatus'] == 'P' ? 'selected' : '' ?>>In Progress</option>
                                                                    <option value="C" <?= $order['orderStatus'] == 'C' ? 'selected' : '' ?>>Completed</option>
                                                                    <option value="X" <?= $order['orderStatus'] == 'X' ? 'selected' : '' ?>>Cancelled</option>
                                                                </select>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; else: ?>
                                                <tr>
                                                    <td colspan="5">No orders found</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!-- Vendor Scripts -->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(function () {
            // Initialize Select2
            $(".js-select2").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('.dropDownSelect2')
            });

            // Gallery Lightbox
            $('.gallery-lb').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: { enabled: true },
                mainClass: 'mfp-fade'
            });

            // Perfect Scrollbar
            $('.js-pscroll').each(function () {
                const ps = new PerfectScrollbar(this, {
                    wheelSpeed: 1,
                    scrollingThreshold: 1000,
                    wheelPropagation: false
                });
                $(window).on('resize', () => ps.update());
            });
        });

        // Admin PIN prompt logic
        const showPinPrompt = () => {
            const overlay = document.createElement('div');
            overlay.innerHTML = `
            <div style="
                position:fixed;top:0;left:0;width:100%;height:100%;
                background:rgba(0,0,0,0.5);z-index:9999;display:flex;justify-content:center;align-items:center">
                <div style="
                    background:white;padding:20px;border-radius:8px;
                    box-shadow:0 4px 12px rgba(0,0,0,0.15);width:300px;text-align:center">
                    <h3 style="margin-top:0;color:#333">Admin Access</h3>
                    <p style="margin-bottom:15px">Enter 4-digit PIN:</p>
                    <input type="password" id="customPinInput"
                        style="width:100%;padding:10px;font-size:16px;text-align:center;letter-spacing:3px;
                        border:1px solid #ddd;border-radius:4px;margin-bottom:15px" maxlength="4">
                    <div>
                        <button onclick="verifyPin()" style="background:#000;color:white;padding:8px 16px;border:none;border-radius:4px;margin-right:8px">Submit</button>
                        <button onclick="closePrompt()" style="background:#f0f0f0;padding:8px 16px;border:none;border-radius:4px">Cancel</button>
                    </div>
                    <p id="pinError" style="color:red;margin-top:10px;display:none">Incorrect PIN</p>
                </div>
            </div>`;
            document.body.appendChild(overlay);
            setTimeout(() => document.getElementById('customPinInput').focus(), 50);
        };

        const verifyPin = () => {
            const pin = document.getElementById('customPinInput').value;
            document.getElementById('pinError').style.display = (pin === "1234")
                ? (window.location.href = "admin-hub.php", 'none')
                : 'block';
        };

        const closePrompt = () => document.querySelector('div[style*="position:fixed"]').remove();
    </script>
</body>

</html>