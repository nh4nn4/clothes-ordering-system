<?php
session_start();
include('DBConnection.php');

if (!isset($_SESSION['user']) || $_SESSION['user']['type'] !== 'employee') {
    header('Location: login.php');
    exit();
}
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
                    <a href="feedback.php" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-comment-more mr-2"></i>View Feedback
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


            </nav>
            <div class="card-header bg-white d-flex justify-content-between align-items-center p-3">
                <h4 class="mtext-105 cl2 mb-0">View Feedback</h4>
            </div>

            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table table-borderless table-hover">
                        <thead>
                            <tr class="stext-106 cl6">
                                <th scope="col">Feedback ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Order ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Fetch feedback data
                            $sql = "SELECT fbID, fbDate, fbRating, fbComment, custID, orderID FROM feedback ORDER BY fbDate DESC";
                            $result = mysqli_query($connect, $sql);

                            if ($result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td class="align-middle stext-107 cl6"><?= htmlspecialchars($row['fbID']); ?></td>
                                        <td class="align-middle stext-107 cl6"><?= htmlspecialchars($row['fbDate']); ?></td>
                                        <td class="align-middle stext-107 cl6"><?= htmlspecialchars($row['fbRating']); ?></td>
                                        <td class="align-middle stext-107 cl6"><?= htmlspecialchars($row['fbComment']); ?></td>
                                        <td class="align-middle stext-107 cl6"><?= htmlspecialchars($row['custID']); ?></td>
                                        <td class="align-middle stext-107 cl6"><?= htmlspecialchars($row['orderID']); ?></td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo '<tr><td colspan="6" class="text-center">No feedback found</td></tr>';
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
            <script>$(function () {

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
                        }

                        ,
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


</body >
</html >