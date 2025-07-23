<?php
include("DBConnection.php");

// Initialize variables
$success_message = '';
$error_message = '';

// Determine mode
$editing = false;
$empID = $empName = $empPhoneNum = $empJobTitle = '';

// Fetch employee data if edit
if (isset($_GET['empID'])) {
    $editing = true;
    $empID = mysqli_real_escape_string($connect, $_GET['empID']);
    $query = "SELECT * FROM employee WHERE empID = '$empID'";
    $result = mysqli_query($connect, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $empID = $row['empID'];
        $empName = $row['empName'];
        $empPhoneNum = $row['empPhoneNum'];
        $empJobTitle = $row['empJobTitle'];
    } else {
        $error_message = "Employee not found.";
        exit();
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $empID = $_POST['empID'];
    $empName = $_POST['empName'];
    $empPhoneNum = $_POST['empPhoneNum'];
    $empJobTitle = $_POST['empJobTitle'];
    $empPassword = $_POST['empPassword'];

    if ($editing) {
        // Update employee
        $sql = "UPDATE employee SET empName = '$empName', empPhoneNum = '$empPhoneNum', empJobTitle = '$empJobTitle'";
        if ($empPassword) {
            $sql .= ", empPassword = '$empPassword'";
        }
        $sql .= " WHERE empID = '$empID'";
    } else {
        // Insert new employee
        if (!$empPassword) {
            $error_message = "Password is required for new employee.";
        } else {
            $sql = "INSERT INTO employee (empID, empName, empPhoneNum, empJobTitle, empPassword)
                    VALUES ('$empID', '$empName', '$empPhoneNum', '$empJobTitle', '$empPassword')";
        }
    }

    if (isset($sql)) {
        $result = mysqli_query($connect, $sql);
        if ($result) {
            $success_message = $editing ? "Employee updated successfully!" : "New employee added successfully!";
            header("Refresh: 2; url=admin-hub.php");
        } else {
            $error_message = "Error: " . mysqli_error($connect);
        }
    }
}
mysqli_close($connect);
?>

<html>

<head>
    <title> Employee Details </title>
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
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">

    <style>
        .update-container {
            padding: 30px 20px;
        }

        .update-card {
            background: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            max-width: 800px;
            margin: 0 auto;
        }

        .update-title {
            font-size: 22px;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 500;
            position: relative;
            padding-bottom: 15px;
        }

        .update-title:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 2px;
            background: #717fe0;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .form-label {
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
            display: block;
            font-weight: 500;
        }

        .form-control {
            height: 45px;
            border-radius: 5px;
            padding: 0 15px;
            border: 1px solid #e6e6e6;
            margin-bottom: 20px;
            font-size: 14px;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #717fe0;
            box-shadow: 0 0 0 0.2rem rgba(113, 127, 224, 0.25);
        }

        textarea.form-control {
            height: 100px;
            padding: 15px;
            resize: vertical;
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 15px;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .form-col {
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 10px;
        }

        @media (max-width: 768px) {
            .form-col {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .update-card {
                padding: 20px;
            }
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
                    <a href="#employee-details" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-accounts-alt mr-2"></i>Employee Details
                    </a>
                </li>
                <li class="p-b-10">
                    <a href="admin-hub.php" class="stext-107 cl2 hov-cl1 trans-04 d-block p-tb-10 p-lr-15">
                        <i class="zmdi zmdi-account-o mr-2"></i>Admin Hub
                    </a>
                </li>
            </ul>
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

            <!-- Update Form -->
            <div class="update-container">
                <div class="update-card">
                    <?php if (!empty($success_message))
                        echo '<div class="alert alert-success">' . $success_message . '</div>'; ?>
                    <?php if (!empty($error_message))
                        echo '<div class="alert alert-danger">' . $error_message . '</div>'; ?>

                    <h2 class="update-title"><?php echo $editing ? 'Update Employee Details' : 'Add New Employee'; ?>
                    </h2>

                    <form method="post" action="">
                        <div class="form-row">
                            <div class="form-col">
                                <div class="form-group">
                                    <label for="empID" class="form-label">Employee ID:</label>
                                    <input type="text" class="form-control" id="empID" name="empID"
                                        value="<?php echo htmlspecialchars($empID); ?>" <?php echo $editing ?: ''; ?>
                                        required>
                                </div>
                            </div>
                            <div class="form-col">
                                <div class="form-group">
                                    <label for="empName" class="form-label">Employee Name:</label>
                                    <input type="text" class="form-control" id="empName" name="empName"
                                        value="<?php echo htmlspecialchars($empName); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-col">
                                <div class="form-group">
                                    <label for="empPhoneNum" class="form-label">Phone Number:</label>
                                    <input type="text" class="form-control" id="empPhoneNum" name="empPhoneNum"
                                        value="<?php echo htmlspecialchars($empPhoneNum); ?>" required>
                                </div>
                            </div>
                            <div class="form-col">
                                <div class="form-group">
                                    <label for="empJobTitle" class="form-label">Job Title</label>
                                    <input type="text" class="form-control" id="empJobTitle" name="empJobTitle"
                                        value="<?php echo htmlspecialchars($empJobTitle ?: 'Employee'); ?>" required
                                        readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-col" style="flex: 0 0 100%; max-width: 100%;">
                                <div class="form-group">
                                    <label for="empPassword" class="form-label">Password (leave blank to keep
                                        current):</label>
                                    <input type="password" class="form-control" id="empPassword" name="empPassword">
                                </div>
                            </div>
                        </div>

                        <div class="button-container">
                            <button type="submit" class="btn btn-primary-custom update-btn">
                                <i class="fa fa-save mr-2"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
            <script src="vendor/animsition/js/animsition.min.js"></script>
            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <script src="vendor/select2/select2.min.js"></script>
            <script src="vendor/slick/slick.min.js"></script>
            <script src="vendor/parallax100/parallax100.js"></script>
            <script src="vendor/isotope/isotope.pkgd.min.js"></script>
            <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <script src="js/slick-custom.js"></script>
            <script src="js/main.js"></script>

            <script>
                $(function () {
                    // Select2 Initialization
                    $(".js-select2").select2({
                        minimumResultsForSearch: 20,
                        dropdownParent: $('.dropDownSelect2')
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

                        $(window).on('resize', function () {
                            ps.update();
                        });
                    });

                    // Sidebar Menu Highlighting
                    const highlightMenu = function (hash) {
                        $('.main-menu-dashboard li').removeClass('active-menu-dashboard');
                        $('.main-menu-dashboard li a[href="' + hash + '"]').parent('li').addClass('active-menu-dashboard');
                    };

                    $('a[href^="#"]').on('click', function (e) {
                        const target = $($(this).attr('href'));
                        if (target.length) {
                            e.preventDefault();
                            $('html, body').animate({ scrollTop: target.offset().top - 70 }, 1000);
                            highlightMenu($(this).attr('href'));
                        }
                    });

                    // Initial menu highlight
                    highlightMenu(window.location.hash || $('.main-menu-dashboard li:first-child a').attr('href'));
                });
            </script>
</body>

</html>