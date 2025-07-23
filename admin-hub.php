<?php
include('DBConnection.php');

// Delete Employee
if (isset($_GET['deleteEmp']) && !empty($_GET['deleteEmp'])) {
    $empID = mysqli_real_escape_string($connect, $_GET['deleteEmp']);
    $deleteSql = "DELETE FROM employee WHERE empID = '$empID'";
    mysqli_query($connect, $deleteSql);
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}

// Delete Customer
if (isset($_GET['deleteCust']) && !empty($_GET['deleteCust'])) {
    $custID = mysqli_real_escape_string($connect, $_GET['deleteCust']);
    $deleteSql = "DELETE FROM customer WHERE custID = '$custID'";
    mysqli_query($connect, $deleteSql);
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
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
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
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
                    <a href="#sales-report" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-chart mr-2"></i>Sales Report
                    </a>
                </li>
                <li class="p-b-10">
                    <a href="#manage-employees" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-accounts-alt mr-2"></i>Manage Employees
                    </a>
                </li>
                <li class="p-b-10">
                    <a href="#manage-user" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-pin-account mr-2"></i>Manage User
                    </a>
                </li>
                <li class="p-b-10">
                    <a href="product-update.php" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-store mr-2"></i>Product
                    </a>
                </li>
                <li class="p-b-10">
                    <a href="feedback.php" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-comment-more mr-2"></i>View Feedback
                    </a>
                </li>
                <li class="p-b-10">
                    <a href="employee-hub.php" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-account-o mr-2"></i>Employee Hub
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
            <nav class="navbar navbar-expand-lg shadow-sm p-3 mb-0" style="background-color: #000;">
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
            </nav>


            <!-- Image Header -->
            <section class="bg-img1 txt-center p-lr-15 p-tb-90"
                style="background-image: url('images/adminhub-header.jpg');">
            </section>

            <!-- Sales‑report-->
            <div class="p-4">
                <div id="sales-report" class="mb-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="ltext-103 cl2">SALES REPORT</h3>
                        <form class="mb-3 d-flex flex-wrap align-items-end gap-2" action="generate-pdf.php" method="get"
                            style="gap: 1rem;">
                            <div class="d-flex flex-column">
                                <label for="month" class="form-label stext-107 cl6 mb-1">Month</label>
                                <select name="month" id="month" class="form-control" required>
                                    <?php
                                    foreach (range(1, 12) as $m) {
                                        printf('<option value="%02d">%s</option>', $m, date('F', mktime(0, 0, 0, $m, 1)));
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="d-flex flex-column">
                                <label for="year" class="form-label stext-107 cl6 mb-1">Year</label>
                                <select name="year" id="year" class="form-control" required>
                                    <?php
                                    $thisYear = date('Y');
                                    foreach (range($thisYear, $thisYear - 10) as $y) {
                                        echo "<option value=\"$y\">$y</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary-custom download-btn mt-2">
                                    <i class="fa fa-print mr-2"></i> Generate PDF
                                </button>
                            </div>
                        </form>

                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card dashboard-card-employee shadow-sm border-0 rounded-lg">
                                <div class="card-body d-flex flex-column align-items-center text-center p-4">
                                    <i class="fa fa-users fa-3x mb-3 cl1"></i>
                                    <h4 class="ltext-102 cl2 mb-2">
                                        <?php
                                        $query = "SELECT COUNT(*) as count FROM customer";
                                        $result = mysqli_query($connect, $query);
                                        if ($result && $row = mysqli_fetch_assoc($result)) {
                                            echo $row['count'];
                                        } else {
                                            echo '0';
                                        }
                                        ?>
                                    </h4>
                                    <p class="stext-107 cl6 mb-0">Total Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card dashboard-card-employee shadow-sm border-0 rounded-lg">
                                <div class="card-body d-flex flex-column align-items-center text-center p-4">
                                    <i class="fa fa-shopping-cart fa-3x mb-3 cl1"></i>
                                    <h4 class="ltext-102 cl2 mb-2">
                                        <?php
                                        $query = "SELECT COUNT(*) as count FROM orders";
                                        $result = mysqli_query($connect, $query);
                                        if ($result && $row = mysqli_fetch_assoc($result)) {
                                            echo $row['count'];
                                        } else {
                                            echo '0';
                                        }
                                        ?>
                                    </h4>
                                    <p class="stext-107 cl6 mb-0">Total Orders</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mb-4">
                            <div class="card dashboard-card-employee shadow-sm border-0 rounded-lg">
                                <div class="card-body d-flex flex-column align-items-center text-center p-4">
                                    <i class="fa fa-dollar fa-3x mb-3 cl1"></i>
                                    <h4 class="ltext-102 cl2 mb-2">
                                        <?php
                                        $query = "SELECT SUM(orderSubtotal) AS total FROM orders";
                                        $result = mysqli_query($connect, $query);
                                        if ($result && $row = mysqli_fetch_assoc($result)) {
                                            echo 'RM' . number_format($row['total'], 2);
                                        } else {
                                            echo 'RM0.00';
                                        }
                                        ?>
                                    </h4>
                                    <p class="stext-107 cl6 mb-0">Total Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="manage-employees" class="mb-5" style="margin-left: 20px; margin-right: 20px;">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="ltext-103 cl2">MANAGE EMPLOYEES</h3>
                    <a href="employee-update.php" class="btn btn-primary-custom download-btn">
                        <i class="fa fa-plus mr-2"></i> Add Employee
                    </a>
                </div>

                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="card dashboard-card-employee shadow-sm h-100 border-0 rounded-lg">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center p-3">
                                <h4 class="mtext-105 cl2 mb-0">Employee List</h4>
                            </div>
                            <div class="card-body p-3">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover">
                                        <thead>
                                            <tr class="stext-106 cl6">
                                                <th scope="col">Employee ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Fetch employee data
                                            $sql = "SELECT * FROM employee";
                                            $result = mysqli_query($connect, $sql);

                                            if ($result && mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    // Determine role based on empJobTitle
                                                    switch ($row['empJobTitle']) {
                                                        case 'M':
                                                            $role = 'Manager';
                                                            break;
                                                        case 'S':
                                                            $role = 'Supervisor';
                                                            break;
                                                        case 'C':
                                                            $role = 'Customer Service';
                                                            break;
                                                        case 'W':
                                                            $role = 'Warehouse Staff';
                                                            break;
                                                        case 'D':
                                                            $role = 'Delivery';
                                                            break;
                                                        default:
                                                            $role = 'Unknown';
                                                    }


                                                    echo '<tr>
                                                        <td class="stext-107 cl6">' . htmlspecialchars($row['empID']) . '</td>
                                                        <td class="stext-107 cl6">' . htmlspecialchars($row['empName']) . '</td>
                                                        <td class="stext-107 cl6">' . htmlspecialchars($row['empPhoneNum']) . '</td>
                                                        <td class="stext-107 cl6">' . $role . '</td>
                                                        <td>
                                                            <a href="employee-update.php?empID=' . $row['empID'] . '" class="text-secondary mr-2"><i class="fa fa-pencil fs-20"></i></a>
                                                            <a href="?deleteEmp=' . $row['empID'] . '" class="text-danger" onclick="return confirm(\'Are you sure you want to delete this employee?\')"><i class="fa fa-trash-o fs-20"></i></a>
                                                        </td>
                                                    </tr>';
                                                }
                                            } else {
                                                echo '<tr><td colspan="5" class="text-center">No employees found</td></tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="manage-user" class="mb-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="ltext-103 cl2">MANAGE USERS </h3>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card dashboard-card-employee shadow-sm h-100 border-0 rounded-lg">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center p-3">
                                    <h4 class="mtext-105 cl2 mb-0">Users</h4>
                                    <a href="#" class="stext-107 cl1 hov-cl1 trans-04">See all <i
                                            class="fa fa-angle-right ml-1"></i></a>
                                </div>
                                <div class="card-body p-3">
                                    <ul class="list-unstyled user-list-employee">
                                        <?php
                                        $sql = "SELECT * FROM customer";
                                        $result = mysqli_query($connect, $sql);

                                        if ($result && mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<li class="d-flex align-items-center justify-content-between py-2 border-bottom">
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-user-circle-o fs-24 mr-2 cl6"></i>
                                                    <div>
                                                        <span class="stext-107 cl2 d-block">' . htmlspecialchars($row["custID"]) . '</span>
                                                    </div>
                                                </div>
                                                <div class="user-actions-employee">
                                                    <a href="user-update.php?custID=' . $row['custID'] . '" class="text-secondary mr-2"><i class="fa fa-pencil fs-20"></i></a>
                                                    <a href="?deleteCust=' . $row['custID'] . '" class="text-danger" onclick="return confirm(\'Are you sure you want to delete this user?\')"><i class="fa fa-trash-o fs-20"></i></a>
                                                </div>
                                            </li>';
                                            }
                                        } else {
                                            echo '<li class="text-muted">No users found.</li>';
                                        }
                                        $connect->close();
                                        ?>
                                    </ul>
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

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/parallax100/parallax100.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script src="js/slick-custom.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(function () {
            // Select2
            $(".js-select2").each(function () {
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            });

            // Parallax
            $('.parallax100').parallax100();

            // Perfect Scrollbar
            $('.js-pscroll').each(function () {
                const ps = new PerfectScrollbar(this, {
                    wheelSpeed: 1,
                    scrollingThreshold: 1000,
                    wheelPropagation: false
                });
                $(window).on('resize', () => ps.update());
            });

            // Sidebar active state + smooth scroll
            const setActive = (hash) => {
                $('.main-menu-dashboard li').removeClass('active-menu-dashboard');
                $(`.main-menu-dashboard li a[href="${hash}"]`).parent().addClass('active-menu-dashboard');
            };

            $('a[href^="#"]').on('click', function (e) {
                const target = $($(this).attr('href'));
                if (target.length) {
                    e.preventDefault();
                    $('html, body').animate({ scrollTop: target.offset().top - 70 }, 1000);
                    setActive($(this).attr('href'));
                }
            });

            // Set active on page load
            setActive(window.location.hash || $('.main-menu-dashboard li:first-child a').attr('href'));
        });

        $('#report-form').on('submit', function (e) {
            // Validate month and year selection first
            const month = $('#report_month').val();
            const year = $('#report_year').val();

            if (!month || !year) {
                e.preventDefault();
                swal("Error", "Please select both month and year", "error");
                return false;
            }
            // Allow form to submit normally if validation passes
        });
    </script>
</body>

</html>