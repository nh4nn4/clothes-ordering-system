<?php
    session_start();
    if (isset($_SESSION['registration_success'])) {
        unset($_SESSION['registration_success']); // Clear the flag
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                swal({
                    title: 'Welcome to WAVELINE APPAREL',
                    text: 'CONGRATULATIONS YOU GOT A SHIPPING COUPON!\\n\\nYou may use it only once.\\n\\nCoupon Code: WELCOMEWV',
                    icon: 'success',
                    button: 'OK',
                    className: 'swal-wide',
                    closeOnClickOutside: false
                }).then(() => {
                    window.location.href = 'register.php';
                });
            });
        </script>";
    
        echo "<style>
            .swal-wide {
                width: 600px !important;
                font-size: 16px !important;
            }
            .swal-text {
                font-size: 18px !important;
                line-height: 1.5 !important;
            }
            .swal-title {
                font-size: 24px !important;
            }
        </style>";
    }

    $hostname="localhost"; //port
    $username="root";
    $password="";
    $dbname="wavelineapparel";
    $port     = 3307;

    //create connection to MYSQL
    $connect = mysqli_connect($hostname, $username, $password, $dbname, $port) OR DIE ("Connection Failed!");

    //Using the succesful connecton, select which database to access
    $selectdb = mysqli_select_db($connect, $dbname) OR DIE ("Connection Failed!");

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$custID          = $_POST['custID'];
    	$custName        = $_POST['custName'];
    	$custAge         = $_POST['custAge'];
    	$custGender      = $_POST['custGender'];
    	$custAddress     = $_POST['custAddress'];
    	$custPhoneNumber = $_POST['custPhoneNumber'];
    	$custPassword    = $_POST['custPassword'];
        
        if (strlen($custPassword) != 8) {
            $error_message = "<div class='alert alert-danger text-center' style='width: 100%; margin: 0 auto 30px; font-size: 14px; padding: 20px; border-radius: 25px;'> Password must be exactly 8 characters long</div>";
        } elseif ($custPassword !== $_POST['confirmPassword']) {
            $error_message = "<div class='alert alert-danger text-center' style='width: 100%; margin: 0 auto 30px; font-size: 14px; padding: 20px; border-radius: 25px;'> Passwords do not match</div>";
        } else {
            // Check if username already exists
            $check_sql = "SELECT * FROM customer WHERE custID = '$custID'";
            $check_result = mysqli_query($connect, $check_sql);
        
            if (mysqli_num_rows($check_result) > 0) {
                $error_message = "<div class='alert alert-danger text-center' style='width: 100%; margin: 0 auto 30px; font-size: 14px; padding: 20px; border-radius: 25px;'> Username already exists. Please choose a different username.</div>";
            } else {
                // Correct SQL command with custID
                $sql = "INSERT INTO customer (custID, custName, custAge, custGender, custAddress, custPhoneNumber, custPassword)
                   VALUES ('$custID', '$custName', '$custAge', '$custGender', '$custAddress', '$custPhoneNumber', '$custPassword')";

    	        //send the SQL Command
   		        $sendsql = mysqli_query($connect, $sql);

    	        if ($sendsql) {
                    // Store success state in session to show after redirect
                    $_SESSION['registration_success'] = true;
                    header("Location: register.php"); // Redirect back to the same page
                    exit();
                } else {
                    $error_message = "<div class='alert alert-danger text-center' style='width: 100%; margin: 0 auto 30px; font-size: 14px; padding: 20px; border-radius: 25px;'> Error: " . mysqli_error($connect) . "</div>";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
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
<!--===============================================================================================-->
    <style>
        .registration-container {
            padding: 100px 0 50px;
        }
        .registration-card {
            background: #fff;
            border-radius: 15px;
            padding: 50px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .registration-title {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 500;
        }
        .form-label {
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }
        .form-control {
            height: 50px;
            border-radius: 25px;
            padding: 0 25px;
            border: 1px solid #e6e6e6;
            margin-bottom: 20px;
        }
        textarea.form-control {
            height: 120px;
            padding: 15px 25px;
        }
        .btn-register {
            background-color: #717fe0;
            color: white;
            border: none;
            border-radius: 25px;
            height: 50px;
            font-size: 15px;
            font-weight: 500;
            text-transform: uppercase;
            width: 100%;
            margin-top: 10px;
            transition: all 0.4s;
        }
        .btn-register:hover {
            background-color: #4a5acf;
            color: white;
        }
        .alert {
            border-radius: 25px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body class="animsition">
    
    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					

					<div class="left-top-bar flex-w h-full">
						<a href="faq.html" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

					</div>

					<div class="left-top-bar flex-w h-full">
						

						<a href="login.php" class="flex-c-m trans-04 p-lr-25">
							Log In
							
						</a>

						<a href="register.php" class="flex-c-m trans-04 p-lr-25">
							Register 
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
								<a href="index.php">Home</a>
								
							</li>

							<li>
								<a href="catalogue.php">Catalogue</a>
							</li>

							<li class="label1" data-label1="hot">
								<a>Features</a>
								<ul class="sub-menu">
									<li><a href="size-finder.html">Size Finder</a></li> 
									<li><a href="quiz.html">Quiz</a></li>
									
								</ul>
							</li>

							

							<li>
								<a href="about.html">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>	
					</div>
                </nav>
            </div>	
        </div>
    </header>

    <!-- Content -->
    <div class="registration-container">
        <div class="container">
            <div class="registration-card">
                <?php 
                    if (isset($success_message)) {
                        echo $success_message;
                    } 
                    if (isset($error_message)) {
                        echo $error_message;
                    }
                ?>
                <h2 class="registration-title">Account Registration</h2>
                <form method="post" action="">

				    <div class="form-group">
                    	<label for="username" class="form-label">Username</label>
                    	<input type="text" class="form-control" id="custID" name="custID" required>
                	</div>

                    <div class="form-group">
                        <label for="custName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="custName" name="custName" required>
                    </div>

                    <div class="form-group">
                        <label for="custAge" class="form-label">Age</label>
                        <input type="number" class="form-control" id="custAge" name="custAge" required>
                    </div>

                    <div class="form-group">
                        <label for="custGender" class="form-label">Gender</label>
                        <select class="form-control" id="custGender" name="custGender" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="custAddress" class="form-label">Address</label>
                        <textarea class="form-control" id="custAddress" name="custAddress" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="custPhoneNumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="custPhoneNumber" name="custPhoneNumber" required>
                    </div>

                    <div class="form-group">
                        <label for="custPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="custPassword" name="custPassword" required>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required maxlength="8">
                    </div>

                    <button type="submit" class="btn btn-register">Register</button>

                    <!-- Add login link -->
                    <div class="text-center p-t-20">
                        <span class="stext-102 cl3">Already have an account? </span>
                        <a href="login.php" class="stext-101 cl1 hov-cl1 trans-04"> Login</a>
                    </div>
                </form>
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
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> for CSC264 Group Project</a>
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
        $(".js-select2").each(function(){
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
        $('.gallery-lb').each(function() {
            $(this).magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled:true
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
        $('.js-pscroll').each(function(){
            $(this).css('position','relative');
            $(this).css('overflow','hidden');
            var ps = new PerfectScrollbar(this, {
                wheelSpeed: 1,
                scrollingThreshold: 1000,
                wheelPropagation: false,
            });

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

    <script>
    document.getElementById('custPassword').addEventListener('input', function() {
        if (this.value.length > 8) {
            this.value = this.value.slice(0, 8);
        }
    });
    
    document.getElementById('confirmPassword').addEventListener('input', function() {
        if (this.value.length > 8) {
            this.value = this.value.slice(0, 8);
        }
    });
    </script>
</body>
</html>