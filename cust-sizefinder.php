<?php
session_start();

if (!isset($_SESSION['custID'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Size Finder</title>
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
</head>

<body class="animsition">

    <!-- Header -->
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
									<li><a href="cust-size-finder.php">Size Finder</a></li>
									<li><a href="cust-quiz.php">Vibe Checker</a></li>

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
	</header>

    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Cart
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    <!-- Cart items will be loaded here via JavaScript -->
                </ul>

                <div class="w-full">
                    <div class="header-cart-buttons flex-w w-full">
                        <a href="cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            View Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg" style="max-width: 600px; width: 100%;">
                    <form id="sizeForm" class="validate-form">
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                            Find My Size
                        </h4>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <select class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" name="gender" id="gender" required>
                                <option value="">-- Select Gender --</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" id="height" name="height" placeholder="Height (cm)" required>
                        </div>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" id="chest" name="chest" placeholder="Chest/Bust (cm)" required>
                        </div>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" id="waist" name="waist" placeholder="Waist (cm)" required>
                        </div>

                        <div class="bor8 m-b-30 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" id="hips" name="hips" placeholder="Hips (cm)" required>
                        </div>

                        <div class="flex-c-m m-b-20">
                            <button type="button" onclick="calculateSize()" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                                Find My Size
                            </button>
                        </div>

                        <p id="result" class="txt-center stext-109 cl6 p-b-20"></p>

                        <div class="flex-c-m">
                            <a href="cust-homepage.php" class="flex-c-m stext-101 cl0 size-121 bg1 bor1 hov-btn1 p-lr-15 trans-04 pointer">
                                Back to Home
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/parallax100/parallax100.js"></script>
    <script>$('.parallax100').parallax100();</script>
    <!--===============================================================================================-->
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>$('.js-pscroll').each(function(){ new PerfectScrollbar(this); });</script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script>
        function calculateSize() {
            const gender = document.getElementById("gender").value;
            const height = parseInt(document.getElementById("height").value);
            const chest = parseInt(document.getElementById("chest").value);
            const waist = parseInt(document.getElementById("waist").value);
            const hips = parseInt(document.getElementById("hips").value);

            if (!gender || !height || !chest || !waist || !hips) {
                document.getElementById("result").textContent = "Please fill in all fields.";
                document.getElementById("result").style.color = "#e74c3c";
                document.getElementById("result").style.backgroundColor = "#fadbd8";
                return;
            }

            const maleSizes = [
                { size: "XS", chest: [76, 84], waist: [66, 74], hips: [80, 87] },
                { size: "S", chest: [85, 92], waist: [75, 82], hips: [88, 95] },
                { size: "M", chest: [93, 100], waist: [83, 90], hips: [96, 102] },
                { size: "L", chest: [101, 108], waist: [91, 98], hips: [103, 109] },
                { size: "XL", chest: [109, 116], waist: [99, 106], hips: [110, 117] },
                { size: "XXL", chest: [117, 124], waist: [107, 114], hips: [118, 125] }
            ];

            const femaleSizes = [
                { size: "XS", chest: [75, 82], waist: [60, 66], hips: [82, 88] },
                { size: "S", chest: [83, 89], waist: [67, 73], hips: [89, 95] },
                { size: "M", chest: [90, 96], waist: [74, 80], hips: [96, 102] },
                { size: "L", chest: [97, 103], waist: [81, 87], hips: [103, 109] },
                { size: "XL", chest: [104, 110], waist: [88, 94], hips: [110, 116] },
                { size: "XXL", chest: [111, 117], waist: [95, 101], hips: [117, 123] }
            ];

            const sizes = gender === "male" ? maleSizes : femaleSizes;

            // Check for exact match first
            for (let i = 0; i < sizes.length; i++) {
                const s = sizes[i];
                if (
                    chest >= s.chest[0] && chest <= s.chest[1] &&
                    waist >= s.waist[0] && waist <= s.waist[1] &&
                    hips >= s.hips[0] && hips <= s.hips[1]
                ) {
                    displayResult(`Perfect Fit: <span style="color: #717fe0; font-weight: bold;">${s.size}</span>`);
                    return;
                }
            }

            // No exact match, find closest size by least average distance
            let closest = null;
            let minDiff = Infinity;

            for (let i = 0; i < sizes.length; i++) {
                const s = sizes[i];
                const chestMid = (s.chest[0] + s.chest[1]) / 2;
                const waistMid = (s.waist[0] + s.waist[1]) / 2;
                const hipsMid = (s.hips[0] + s.hips[1]) / 2;

                const diff = Math.abs(chest - chestMid) + Math.abs(waist - waistMid) + Math.abs(hips - hipsMid);

                if (diff < minDiff) {
                    minDiff = diff;
                    closest = s.size;
                }
            }

            displayResult(`Closest Match: <span style="color: #717fe0; font-weight: bold;">${closest}</span>`);
        }

        function displayResult(message) {
            const resultEl = document.getElementById("result");
            resultEl.innerHTML = message;
            resultEl.style.color = "#333";
            resultEl.style.backgroundColor = "#f8f9fa";
            
            // Scroll to result
            resultEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
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
    </script>
</body>
</html>