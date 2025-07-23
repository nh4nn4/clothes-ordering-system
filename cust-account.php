<?php
include("DBConnection.php");

session_start();
if (!isset($_SESSION['custID'])) {
    header("Location: login.php");
    exit();
}

// Initialize variables
$success_message = '';
$error_message = '';

// Get customer ID from session
$custID = $_SESSION['custID'];

// Fetch customer data based on customer ID
$query = "SELECT * FROM customer WHERE custID = ?";
$stmt = mysqli_prepare($connect, $query);
mysqli_stmt_bind_param($stmt, "s", $custID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$customer = mysqli_fetch_assoc($result);

if (!$customer) {
    $error_message = "Customer not found.";
    header("Location: login.php");
    exit();
}

$custID = $customer['custID'];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize inputs
    $custName = filter_input(INPUT_POST, 'custName', FILTER_SANITIZE_STRING);
    $custAge = filter_input(INPUT_POST, 'custAge', FILTER_VALIDATE_INT);
    $custGender = filter_input(INPUT_POST, 'custGender', FILTER_SANITIZE_STRING);
    $custAddress = filter_input(INPUT_POST, 'custAddress', FILTER_SANITIZE_STRING);
    $custPhoneNumber = filter_input(INPUT_POST, 'custPhoneNumber', FILTER_SANITIZE_STRING);
    $custPassword = $_POST['custPassword'];

    // Basic validation
    if (empty($custName)) {
        $error_message = "Name is required.";
    } elseif ($custAge < 1 || $custAge > 120) {
        $error_message = "Please enter a valid age.";
    } elseif (empty($custPhoneNumber)) {
        $error_message = "Phone number is required.";
    } else {
        // Convert gender to single character for database
        $genderChar = substr($custGender, 0, 1);

        // Prepare update query
        $sql = "UPDATE customer SET 
                custName = ?, 
                custPhoneNumber = ?, 
                custAddress = ?, 
                custAge = ?,
                custGender = ?";

        $params = [$custName, $custPhoneNumber, $custAddress, $custAge, $genderChar];
        $types = "sssis";

        // Add password if provided
        if (!empty($custPassword)) {
            if (strlen($custPassword) < 8) {
                $error_message = "Password must be at least 8 characters long.";
            } else {
                $hashedPassword = password_hash($custPassword, PASSWORD_DEFAULT);
                $sql .= ", custPassword = ?";
                $params[] = $hashedPassword;
                $types .= "s";
            }
        }

        if (empty($error_message)) {
            $sql .= " WHERE custID = ?";
            $params[] = $custID;
            $types .= "s";

            // Execute prepared statement
            $stmt = mysqli_prepare($connect, $sql);
            mysqli_stmt_bind_param($stmt, $types, ...$params);

            if (mysqli_stmt_execute($stmt)) {
                $success_message = "Account updated successfully!";
                // Refresh customer data
                $query = "SELECT * FROM customer WHERE custID = ?";
                $stmt = mysqli_prepare($connect, $query);
                mysqli_stmt_bind_param($stmt, "s", $custID);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $customer = mysqli_fetch_assoc($result);
            } else {
                $error_message = "Error updating account: " . mysqli_error($connect);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--===============================================================================================-->
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


            <!-- breadcrumb -->
            <div class="container">
                <div class="bread-crumb flex-w p-l-25 p-r-15  p-t-50 p-lr-0-lg">
                    <a href="cust-homepage.php" class="stext-109 cl8 hov-cl1 trans-04">
                        Home
                        <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                    </a>

                    <span class="stext-109 cl4">
                        Account
                    </span>
                </div>
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

    <!-- Content -->
    <div class="container p-t-50 p-b-50">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-5">
                    <?php
                    if (!empty($error_message)) {
                        echo '<div class="alert alert-danger text-center">' . htmlspecialchars($error_message) . '</div>';
                    }
                    if (!empty($success_message)) {
                        echo '<div class="alert alert-success text-center">' . htmlspecialchars($success_message) . '</div>';
                    }
                    ?>
                    <h2 class="text-center mtext-111 cl2 p-b-30  " style="font-size: 30px;">Account Information</h2>
                    <form method="post" action="">
                        <div class="form-row">
                            <div class="form-col col-md-12">
                                <div class="form-group">
                                    <label for="custID" class="stext-102 cl3">Customer ID:</label>
                                    <input type="text" class="form-control stext-107 cl6 p-lr-15" id="custID"
                                        name="custID" value="<?php echo htmlspecialchars($customer['custID']); ?>"
                                        readonly>
                                </div>
                            </div>
                            <div class="form-col col-md-12">
                                <div class="form-group">
                                    <label for="custName" class="stext-102 cl3">Customer Name:</label>
                                    <input type="text" class="form-control stext-107 cl6 p-lr-15" id="custName"
                                        name="custName" value="<?php echo htmlspecialchars($customer['custName']); ?>"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-col col-md-6">
                                <div class="form-group">
                                    <label for="custAge" class="stext-102 cl3">Age:</label>
                                    <input type="number" class="form-control stext-107 cl6 p-lr-15" id="custAge"
                                        name="custAge" value="<?php echo htmlspecialchars($customer['custAge']); ?>"
                                        min="1" max="120" required>
                                </div>
                            </div>
                            <div class="form-col col-md-6">
                                <div class="form-group">
                                    <label for="custGender" class="stext-102 cl3">Gender:</label>
                                    <select class="form-control stext-107 cl6 p-lr-15" id="custGender" name="custGender"
                                        required>
                                        <option value="Male" <?php echo ($customer['custGender'] == 'M') ? 'selected' : ''; ?>>Male</option>
                                        <option value="Female" <?php echo ($customer['custGender'] == 'F') ? 'selected' : ''; ?>>Female</option>
                                        <option value="Other" <?php echo ($customer['custGender'] == 'O') ? 'selected' : ''; ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-col col-md-6">
                                <div class="form-group">
                                    <label for="custPhoneNumber" class="stext-102 cl3">Phone Number:</label>
                                    <input type="text" class="form-control stext-107 cl6 p-lr-15" id="custPhoneNumber"
                                        name="custPhoneNumber"
                                        value="<?php echo htmlspecialchars($customer['custPhoneNumber']); ?>" required>
                                </div>
                            </div>
                            <div class="form-col col-md-6">
                                <div class="form-group">
                                    <label for="custAddress" class="stext-102 cl3">Address:</label>
                                    <input type="text" class="form-control stext-107 cl6 p-lr-15" id="custAddress"
                                        name="custAddress"
                                        value="<?php echo htmlspecialchars($customer['custAddress']); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-col col-md-12">
                                <div class="form-group">
                                    <label for="custPassword" class="stext-102 cl3">Password (leave blank to keep
                                        current):</label>
                                    <input type="password" class="form-control stext-107 cl6 p-lr-15" id="custPassword"
                                        name="custPassword">
                                    <small class="form-text text-muted">Password must be at least 8 characters
                                        long.</small>
                                </div>
                            </div>
                        </div>

                        <div class="text-center pt-3">
                            <button type="submit"
                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04"
                                style="margin: 0 auto;">
                                <i class="fa fa-save mr-2"></i> Update Account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                        class="fa fa-heart-o" aria-hidden="true"></i> for CSC264 Group Project</a>
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

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function () {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/parallax100/parallax100.js"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        $('.gallery-lb').each(function () {
            $(this).magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function () {
            $(this).css('position', 'relative');
            $(this).css('overflow', 'hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function () {
                ps.update();
            })
        });
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>

</html>