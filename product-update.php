<?php
session_start();
include('DBConnection.php');

if (!isset($_SESSION['user']) || $_SESSION['user']['type'] !== 'employee') {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prodID'], $_POST['newStatus'])) {
    $prodID = mysqli_real_escape_string($connect, $_POST['prodID']);
    $newStatus = $_POST['newStatus'];

    if ($newStatus === 'Available') {
        // Just activate the product, keep current stock
        $updateQuery = "UPDATE product SET prodStatus = 'A' WHERE prodID = '$prodID'";
    } else {
        // Out of stock: deactivate and reset stock to 0
        $updateQuery = "UPDATE product SET prodStatus = 'I', prodStock = 0 WHERE prodID = '$prodID'";
    }

    mysqli_query($connect, $updateQuery);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Handle Restock button
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['restockID'])) {
    $prodID = mysqli_real_escape_string($connect, $_POST['restockID']);
    $restockQuery = "UPDATE product SET prodStock = 100 WHERE prodID = '$prodID'";
    mysqli_query($connect, $restockQuery);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Product image mapping (same as in cust-quiz.php)
$productImageMap = [
    'P1' => 'product-01.jpg',
    'P2' => 'product-02.jpg',
    'P3' => 'product-03.jpg',
    'P4' => 'product-04.jpg',
    'P5' => 'product-05.jpg',
    'P6' => 'product-06.jpg',
    'P7' => 'product-07.jpg',
    'P8' => 'product-08.jpg',
    'P9' => 'product-09.jpg',
    'P10' => 'product-10.jpg',
    'P11' => 'product-11.jpg',
    'P12' => 'product-12.jpg',
    'P13' => 'product-13.jpg',
    'P14' => 'product-14.jpg',
    'P15' => 'product-15.jpg',
    'P16' => 'product-16.jpg'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Hub</title>
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
    <style>
        .status-dot-employee {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .status-dot-employee.completed {
            background-color: #28a745;
        }

        .status-dot-employee.pending {
            background-color: #dc3545;
        }
        
        .product-img {
            max-height: 80px;
            width: auto;
            border-radius: 4px;
        }
        
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
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
                    <a href="product-update.php" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-store mr-2"></i>Product
                    </a>
                </li>
                <li class="p-b-10">
                    <a href="admin-hub.php" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-account-o mr-2"></i>Admin Hub
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
            <nav class="navbar navbar-expand-lg shadow-sm p-3 mb-4" style="background-color: #000;">
                <div class="container-fluid">
                    <h2 class="mtext-105 cl2 mb-0">Admin Hub</h2>

                    <div class="ml-auto d-flex align-items-center">
                        <div class="wrap-icon-header d-flex align-items-center mr-3">
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-0">
                                <i class="zmdi zmdi-account-circle fs-24 text-white"></i>
                            </div>
                            <span class="text-white font-weight-bold ml-2"
                                style="font-size: 0.85rem; transform: translateY(1px);">admin</span>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="card-header bg-white d-flex justify-content-between align-items-center p-3">
                <h4 class="mtext-105 cl2 mb-0">Product Inventory</h4>
            </div>
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table table-borderless table-hover">
                        <thead>
                            <tr class="stext-106 cl6">
                                <th scope="col">Image</th>
                                <th scope="col">Product ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Status</th>
                                <th scope="col">Product Stock</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            // Fetch product data
                            $sql = "SELECT prodID, prodName, prodStatus, prodStock FROM product ORDER BY prodName ASC";
                            $result = mysqli_query($connect, $sql);

                            if ($result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $image = isset($productImageMap[$row['prodID']]) ? $productImageMap[$row['prodID']] : 'default-product.jpg';
                                    ?>
                                    <tr>
                                        <td>
                                            <img src="images/<?php echo htmlspecialchars($image); ?>" class="product-img" alt="<?php echo htmlspecialchars($row['prodName']); ?>">
                                        </td>
                                        <td class="stext-107 cl6">
                                            <?php echo htmlspecialchars($row['prodID']); ?>
                                        </td>
                                        <td class="stext-107 cl6">
                                            <?php echo htmlspecialchars($row['prodName']); ?>
                                        </td>
                                        <td class="stext-107 cl6">
                                            <form method="post" class="d-inline-flex align-items-center">
                                                <input type="hidden" name="prodID"
                                                    value="<?= htmlspecialchars($row['prodID']); ?>">
                                                <span
                                                    class="status-dot-employee <?= $row['prodStatus'] === 'A' ? 'completed' : 'pending'; ?> mr-2"></span>
                                                <select name="newStatus" class="form-select form-select-sm"
                                                    onchange="this.form.submit()">
                                                    <option value="Available" <?= $row['prodStatus'] === 'A' ? 'selected' : ''; ?>>
                                                        Available</option>
                                                    <option value="Out of Stock" <?= $row['prodStatus'] === 'I' ? 'selected' : ''; ?>>Out of Stock</option>
                                                </select>
                                            </form>
                                        </td>
                                        <td class="stext-107 cl6">
                                            <?php echo (int) $row['prodStock']; ?>
                                        </td>
                                        <td>
                                            <form method="post">
                                                <input type="hidden" name="restockID"
                                                    value="<?= htmlspecialchars($row['prodID']); ?>">
                                                <button type="submit" class="btn btn-sm btn-outline-primary"
                                                    onclick="return confirm('Restock this item to 100?')">Restock</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo '<tr><td colspan="6" class="text-center">No products found</td></tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="btn-back-to-top" id="myBtn">
                <span class="symbol-btn-back-to-top">
                    <i class="zmdi zmdi-chevron-up"></i>
                </span>
            </div>

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
                        gallery: {
                            enabled: true
                        },
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
            </script>
</body>
</html>