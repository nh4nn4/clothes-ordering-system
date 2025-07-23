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
	<title>Home</title>
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
						<a href="cart.php"
							class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/test.jpeg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Waveline Apparel Online Store
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									NEW SEASON
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="cust-catalogue.php"
									class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide-04.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									New Graphical T-shirt
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn"
								data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									COMING SOON
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="cust-catalogue.php"
									class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide-03.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft"
								data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Unisex Collection 2025
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight"
								data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									New arrivals
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="cust-catalogue.php"
									class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Welcome to Dashboard -->
	<section class="bg0 p-t-75 p-b-20">
		<div class="container">
			<div class="row p-b-20">
				<div class="order-md-1 col-5 col-lg-5 col-lg-4 m-r-auto ">
					<h1 class="mtext-111 cl2 " style="font-size: 45px;">
						Welcome aboard! Start by
						setting up your style
						preferences and let Waveline
						Apparel bring fashion to your
						feed.
					</h1>



					<div style="position: bottom; height: 150px;">
						<a href="cust-quiz.php" class="flex-c-m stext-101 cl0 bg1 bor1 hov-btn1 trans-04" style="
								font-size: 22px;
								   padding: 20px 40px; 
								position: absolute; 
								bottom:0; 
								right: 50; 
								margin: 20px;
								border-radius: 50px;
								   ">
							Start Now
						</a>
					</div>

				</div>
				<div class="order-md-1 col-7 col-lg-7  col-lg-4 m-l-auto ">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/blog-01.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>


		</div>
	</section>

	<!-- Select Choices -->
	<section>
		<div class=" p-b-20 p-t-20 container">
			<div class="row">
				<div class="col-md-6 col-xl-3 p-b-30 m-lr-auto ">
					<div class="block1 wrap-pic-w">
						<img src="images/customize.png" alt="IMG-BANNER">
						<a href="cust-quiz.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Personalise Your Account
								</span>

							</div>
						</a>
					</div>

				</div>

				<div class="col-md-6 col-xl-3 p-b-30 m-lr-auto">
					<div class="block1 wrap-pic-w">
						<img src="images/wishlist.png" alt="IMG-BANNER">
						<a href="wishlist.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									View Wishlist
								</span>

							</div>
						</a>
					</div>

				</div>

				<div class="col-md-6 col-xl-3 p-b-30 m-lr-auto">
					<div class="block1 wrap-pic-w">
						<img src="images/order.png" alt="IMG-BANNER">
						<a href="cust-order.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									View Orders
								</span>

							</div>
						</a>
					</div>

				</div>

				<div class="col-md-6 col-xl-3 p-b-50 m-lr-auto">
					<div class="block1 wrap-pic-w">
						<img src="images/help.png" alt="IMG-BANNER">
						<a href="cust-account.php"
							class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									View Account
								</span>

							</div>
						</a>
					</div>

				</div>

			</div>

		</div>

	</section>

	<!-- Size-finder -->
	<section class="bg0 p-t-110 p-b-110" style="background-color: rgb(226, 230, 237);">
		<div class="container">
			<div class="row p-b-20">
				<div class="order-md-1 col-5 col-lg-5 col-lg-4 m-r-auto ">
					<h1 class="mtext-111 cl2 " style="font-size: 45px;">
						Not sure which size fits just right?
					</h1>

					<p class="stext-113 cl6 p-b-26 p-t-10 " style="font-size: 22px;">
						Our Size Finder takes the guesswork out of shopping. Just answer a few quick questions
						about your body measurements and fit preferences — we'll match you with the perfect size for
						every item,
						every time.
					</p>

					<div style="position: bottom; height: 100px;">
						<a href="cust-sizefinder.php" class="flex-c-m stext-101 cl0 bg1 bor1 hov-btn1 trans-04" style="
								font-size: 22px;
								   padding: 20px 40px; 
								position: absolute; 
								bottom:0; 
								right: 020px; 
								margin: 0;
								border-radius: 50px;
								   ">
							Start Now
						</a>
					</div>

				</div>
				<div class="order-md-1 col-6 col-lg-6  col-lg-4 m-l-auto ">

					<div class="hov-img0">
						<img src="images/size-finder.png" alt="IMG">
					</div>

				</div>
			</div>


		</div>
	</section>

	<!-- Quiz  -->
	<section class="bg0 p-t-110 p-b-110">
		<div class="container">
			<div class="row p-b-20">
				<div class="order-md-1 col-5 col-lg-5 col-lg-4 m-r-auto ">
					<h1 class="mtext-111 cl2 " style="font-size: 45px;">
						Your Fashion, Your Rules.
					</h1>

					<p class="stext-113 cl6 p-b-26 p-t-10 " style="font-size: 22px;">
						Don’t just shop — discover your style.
						With our Quiz, you’ll unlock
						personalized outfit recommendations
						tailored to your taste, vibe, and lifestyle.
						Whether you’re bold and edgy or calm
						and casual, we’ll help you find pieces
						that feel like you.

					</p>

					<div style="position: bottom; height: 100px;">
						<a href="cust-quiz.php" class="flex-c-m stext-101 cl0 bg1 bor1 hov-btn1 trans-04" style="
								font-size: 22px;
								   padding: 20px 40px; 
								position: absolute; 
								bottom:0; 
								right: 020px; 
								margin: 0;
								border-radius: 50px;
								   ">
							Start Now
						</a>
					</div>

				</div>
				<div class="order-md-1 col-6 col-lg-6  col-lg-4 m-l-auto ">

					<div class="hov-img0">
						<img src="images/blog-03.jpg" alt="IMG">
					</div>

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

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
												href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
												href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
												href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat
								ornare feugiat.
							</p>

							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size XS</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
												<option>Size XXL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number"
												name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button
											class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#"
										class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100"
										data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
									data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
									data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
									data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
		$('.gallery-lb').each(function () { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
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
	<script>
		$('.js-addwish-b2').on('click', function (e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function () {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
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
	<!-- Custom Scripts for Catalogue Page -->
	<script>
		// Product Data
		const products = {
			1: { id: 1, name: "Ocean Vibe Tee", price: 40, category: "men", image: "images/product-01.jpg", color: ["Black", "White", "Blue"], popularity: 10, tags: ["t-shirt", "casual-wear", "streetstyle"] },
			2: { id: 2, name: "Urban Tee", price: 40, category: "men", image: "images/product-02.jpg", color: ["Black", "White", "Blue"], popularity: 11, tags: ["t-shirt", "casual-wear", "streetstyle"] },
			3: { id: 3, name: "Flex Fit Pants", price: 55, category: "men", image: "images/product-03.jpg", color: ["Black", "White", "Blue"], popularity: 9, tags: ["streetstyle", "casual-wear"] },
			4: { id: 4, name: "Chic Cut Shirt", price: 30, category: "women", image: "images/product-04.jpg", color: ["Black", "White", "Blue"], popularity: 20, tags: ["t-shirt", "streetstyle", "casual-wear"] },
			5: { id: 5, name: "Elegance Long Shirt", price: 40, category: "women", image: "images/product-05.jpg", color: ["Black", "White", "Blue"], popularity: 19, tags: ["t-shirt", "streetstyle", "casual-wear"] },
			6: { id: 6, name: "Breezy Sleeveless Top", price: 30, category: "women", image: "images/product-06.jpg", color: ["Black", "White", "Blue"], popularity: 40, tags: ["t-shirt", "streetstyle", "casual-wear"] },
			7: { id: 7, name: "Women's Power Pants", price: 30, category: "women", image: "images/product-07.jpg", color: ["Black", "White", "Blue"], popularity: 50, tags: ["streetstyle", "casual-wear"] },
			8: { id: 8, name: "Lil' Miss Style Set", price: 60, category: "kids", image: "images/product-08.jpg", color: ["White", "Blue"], popularity: 20, tags: ["t-shirt", "streetstyle", "casual-wear"] },
			9: { id: 9, name: "Lil' Champ Outfit", price: 60, category: "kids", image: "images/product-09.jpg", color: ["White", "Blue"], popularity: 20, tags: ["t-shirt", "streetstyle", "casual-wear"] },
			10: { id: 10, name: "Cozy Knit Ankle Socks", price: 15, category: "accessories", image: "images/product-10.jpg", color: ["Black", "White"], popularity: 20, tags: ["casual-wear"] },
			11: { id: 11, name: "Sleek Shades Sunglasses", price: 20, category: "accessories", image: "images/product-11.jpg", color: "Black", popularity: 20, tags: ["head-wear"] },
			12: { id: 12, name: "Vibe Band Stretch Headband", price: 20, category: "accessories", image: "images/product-12.jpg", color: "White", popularity: 20, tags: ["head-wear"] },
			13: { id: 13, name: "Snap Style Cap", price: 15, category: "accessories", image: "images/product-13.jpg", color: ["Black", "White"], popularity: 20, tags: ["head-wear"] },
			14: { id: 14, name: "Chill Brim Sun Hat", price: 20, category: "accessories", image: "images/product-14.jpg", color: "Beige", popularity: 20, tags: ["head-wear"] },
			15: { id: 15, name: "Core Sweat Unisex Sweater", price: 60, category: "men women", image: "images/product-15.jpg", color: ["Black", "White", "Blue"], popularity: 10, tags: ["cozy-wear"] },
			16: { id: 16, name: "Street Heat Unisex Hoodie", price: 60, category: "men women", image: "images/product-16.jpg", color: ["Black", "White", "Blue"], popularity: 10, tags: ["cozy-wear"] }
		};

		function addToCart(productId, size, color, quantity) {
			console.log("Adding to cart:", productId, size, color, quantity);
			let cart = JSON.parse(localStorage.getItem('cart')) || [];
			const product = products[productId];

			if (!product) {
				console.error("Product not found:", productId);
				return;
			}

			if (!size || size === "Choose an option") {
				swal("Please select size", "", "warning");
				return;
			}
			if (!color || color === "Choose an option") {
				swal("Please select color", "", "warning");
				return;
			}

			quantity = parseInt(quantity) || 1;

			const existingItem = cart.find(item =>
				item.id === productId &&
				item.size === size &&
				item.color === color
			);

			if (existingItem) {
				existingItem.quantity += quantity;
			} else {
				cart.push({
					id: productId,
					name: product.name,
					price: product.price,
					image: product.image,
					size: size,
					color: color,
					quantity: quantity
				});
			}

			localStorage.setItem('cart', JSON.stringify(cart));
			updateCartCount();
			// Only show cart notification
			swal(product.name, "has been added to cart!", "success");
		}

		function updateCartCount() {
			const cart = JSON.parse(localStorage.getItem('cart')) || [];
			const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
			$('.js-show-cart').attr('data-notify', totalItems);
		}

		function renderCartPanel() {
			const cart = JSON.parse(localStorage.getItem('cart')) || [];
			const $cartWrap = $('.header-cart-wrapitem');
			$cartWrap.empty();

			if (cart.length === 0) {
				$cartWrap.append('<li class="header-cart-item flex-w flex-t m-b-12">Your cart is empty</li>');
				return;
			}

			cart.forEach(item => {
				$cartWrap.append(`
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="${item.image}" alt="${item.name}">
						</div>
						<div class="header-cart-item-txt p-t-8">
							<span class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								${item.name}
							</span>
							<span class="header-cart-item-info">
								${item.quantity} x RM${item.price.toFixed(2)}
							</span>
							<span class="header-cart-item-info">
								Size: ${item.size}, Color: ${item.color}
							</span>
						</div>
					</li>
				`);
			});
		}

		function addToWishlist(productId) {
			let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
			const product = products[productId];

			if (!product) {
				console.error("Product not found:", productId);
				return;
			}

			// Check if product already exists in wishlist
			const existingItem = wishlist.find(item => item.id === productId);

			if (existingItem) {
				swal(product.name, "is already in your wishlist!", "info");
				return;
			}

			// Add to wishlist
			wishlist.push({
				id: productId,
				name: product.name,
				price: product.price,
				image: product.image,
				category: product.category
			});

			localStorage.setItem('wishlist', JSON.stringify(wishlist));
			updateWishlistCount();
			// Only show wishlist notification
			swal(product.name, "has been added to wishlist!", "success");

			// Update button state
			$(`.js-addwish-b2[data-product-id="${productId}"], 
			.js-addwish-detail[data-product-id="${productId}"]`)
				.addClass('js-addedwish-b2')
				.off('click');
		}
		function removeFromWishlist(productId) {
			let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
			wishlist = wishlist.filter(item => item.id !== productId);
			localStorage.setItem('wishlist', JSON.stringify(wishlist));
			updateWishlistCount();
		}

		function updateWishlistCount() {
			const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
			$('.js-show-wishlist').attr('data-notify', wishlist.length);
		}

		function renderWishlistPanel() {
			const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
			const $wishlistWrap = $('.header-wishlist-wrapitem');
			$wishlistWrap.empty();

			if (wishlist.length === 0) {
				$wishlistWrap.append('<li class="header-wishlist-item flex-w flex-t m-b-12">Your wishlist is empty</li>');
				return;
			}

			wishlist.forEach(item => {
				$wishlistWrap.append(`
					<li class="header-wishlist-item flex-w flex-t m-b-12">
						<div class="header-wishlist-item-img">
							<img src="${item.image}" alt="${item.name}">
						</div>
						<div class="header-wishlist-item-txt p-t-8">
							<span class="header-wishlist-item-name m-b-18 hov-cl1 trans-04">
								${item.name}
							</span>
							<span class="header-wishlist-item-info">
								RM${item.price.toFixed(2)}
							</span>
							<button class="remove-wishlist" data-product-id="${item.id}">
								<i class="zmdi zmdi-close"></i>
							</button>
						</div>
					</li>
				`);
			});
		}

		$(document).ready(function () {
			// Initialize counts on page load
			updateCartCount();
			updateWishlistCount();

			// Cart panel functionality
			$('.js-show-cart').on('click', function (e) {
				e.preventDefault();
				renderCartPanel();
				$('.js-panel-cart').addClass('show-header-cart');
			});

			// Wishlist panel functionality
			$('.js-show-wishlist').on('click', function (e) {
				// If this is the icon in the header (with a link)
				if ($(this).find('a.wishlist-link').length) {
					// Allow default link behavior
					return;
				}

				// Otherwise, show the wishlist panel
				e.preventDefault();
				renderWishlistPanel();
				$('.js-panel-wishlist').addClass('show-header-wishlist');
			});

			// Add to wishlist handlers
			$('.js-addwish-b2, .js-addwish-detail').on('click', function (e) {
				e.preventDefault();
				const productId = $(this).data('product-id');
				addToWishlist(productId);
			});
			// Initialize Isotope
			var $grid = $('.isotope-grid').isotope({
				itemSelector: '.isotope-item',
				layoutMode: 'fitRows',
				getSortData: {
					name: '[data-name]',
					price: '[data-price] parseInt',
					popularity: '[data-popularity] parseInt'
				}
			});



			// Category filter buttons
			$('.filter-tope-group button').on('click', function () {
				var filterValue = $(this).attr('data-filter');
				$grid.isotope({ filter: filterValue });
				$('.filter-tope-group button').removeClass('how-active1');
				$(this).addClass('how-active1');
			});

			// Search functionality
			$('.panel-search input').on('input', function () {
				var searchTerm = $(this).val().toLowerCase();
				$grid.isotope({
					filter: function () {
						var name = $(this).attr('data-name').toLowerCase();
						return name.indexOf(searchTerm) !== -1;
					}
				});
			});

			// Price filter functionality
			$('.filter-col2 .filter-link').on('click', function (e) {
				e.preventDefault();
				$('.filter-col2 .filter-link').removeClass('filter-link-active');
				$(this).addClass('filter-link-active');

				var priceRange = $(this).data('price');

				if (priceRange === '*') {
					$grid.isotope({ filter: '*' });
					return;
				}

				var range = priceRange.split('-');
				var min = parseInt(range[0]);
				var max = parseInt(range[1]);

				$grid.isotope({
					filter: function () {
						var price = parseInt($(this).attr('data-price'));
						return price >= min && price <= max;
					}
				});
			});

			// Sort functionality
			$('.filter-link').not('.filter-col2 .filter-link').on('click', function (e) {
				e.preventDefault();
				var sortByValue = $(this).attr('data-sort-by');
				var sortDirection = $(this).attr('data-sort-direction') || 'asc';

				$grid.isotope({
					sortBy: sortByValue,
					sortAscending: sortDirection === 'asc'
				});
			});

			// Add to cart from modals
			$('.js-addcart-detail').on('click', function (e) {
				e.preventDefault();
				e.stopPropagation();
				const modal = $(this).closest('.js-modal1');
				const productId = modal.attr('id').replace('modal', '');
				const productSize = modal.find('.product-size').val() || modal.find('select[name="time"]').val();
				const productColor = modal.find('.product-color').val() || modal.find('select[name="color"]').val();
				const productQuantity = parseInt(modal.find('.num-product').val()) || 1;

				addToCart(productId, productSize, productColor, productQuantity);

				// Close modal
				modal.removeClass('show-modal1');
				$('body').css('overflow', 'auto');
			});



			// Modal functionality
			$(document).on('click', '.js-show-modal', function (e) {
				e.preventDefault();
				const modalNum = $(this).data('modal');
				$(`#modal${modalNum}`).addClass('show-modal1');
				$('body').css('overflow', 'hidden');
			});

			$(document).on('click', '.js-hide-modal1', function () {
				$(this).closest('.js-modal1').removeClass('show-modal1');
				$('body').css('overflow', 'auto');
			});

			// Close modal when clicking outside content
			$(document).on('click', '.js-modal1', function (e) {
				if ($(e.target).hasClass('js-modal1')) {
					$(this).removeClass('show-modal1');
					$('body').css('overflow', 'auto');
				}
			});

			// Hide cart panel
			$('.js-hide-cart').on('click', function () {
				$('.js-panel-cart').removeClass('show-header-cart');
			});

			// Search panel toggle
			$('.js-show-search').on('click', function () {
				$('.panel-search').toggleClass('dis-none');
			});

			// Filter panel toggle
			$('.js-show-filter').on('click', function () {
				$('.panel-filter').toggleClass('dis-none');
			});

			// Back to top button
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('#myBtn').fadeIn();
				} else {
					$('#myBtn').fadeOut();
				}
			});

			$('#myBtn').click(function () {
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});


			// Tooltips
			$('.tooltip100').tooltip();



			// Remove from wishlist
			$(document).on('click', '.remove-wishlist', function () {
				const productId = $(this).data('product-id');
				removeFromWishlist(productId);
				renderWishlistPanel();
			});

			// Hide wishlist panel
			$('.js-hide-wishlist').on('click', function () {
				$('.js-panel-wishlist').removeClass('show-header-wishlist');
			});

			function filterProducts(tag) {
				event.preventDefault();

				// Standardize the tag format for comparison
				const standardizedTag = tag.toLowerCase().trim();

				// Use Isotope for filtering instead of direct DOM manipulation
				$grid.isotope({
					filter: function () {
						const productTags = $(this).attr('data-tags').toLowerCase();

						// Handle both string and array-like formats
						const tagsArray = productTags.split(',').map(t => t.trim());

						// Check if any tag matches
						return tagsArray.includes(standardizedTag);
					}
				});

				// Update active state
				$('.filter-tagging a').removeClass('active-tag');
				$(event.currentTarget).addClass('active-tag');
			}

			// Add "Show All" functionality
			function showAllProducts() {
				event.preventDefault();
				$grid.isotope({ filter: '*' });
				$('.filter-tagging a').removeClass('active-tag');
			}

			let currentColorFilter = null;

			function filterByColor(color) {
				// Toggle filter if same color clicked twice
				if (currentColorFilter === color) {
					clearColorFilters();
					return;
				}

				currentColorFilter = color;

				// Update UI
				document.querySelectorAll('.color-filter .filter-link').forEach(link => {
					link.classList.remove('filter-link-active');
					if (link.textContent.trim().toLowerCase() === color) {
						link.classList.add('filter-link-active');
					}
				});

				// Filter products
				$grid.isotope({
					filter: function () {
						const colors = $(this).attr('data-colors').toLowerCase().split(',');
						return colors.includes(color);
					}
				});
			}

			function clearAllFilters() {
				// Reset Isotope to show all products
				$grid.isotope({
					filter: '*',
					sortBy: 'original-order'
				});

				// Remove active classes from all filter links
				$('.filter-link').removeClass('filter-link-active');
				$('.filter-col2 .filter-link[data-price="*"]').addClass('filter-link-active');

				// Remove active classes from tag filters
				$('.filter-tagging a').removeClass('active-tag');

				// Reset any variables tracking active filters
				currentColorFilter = null;

				console.log("All filters cleared");
			}
		});
	</script>
</body>

</html>