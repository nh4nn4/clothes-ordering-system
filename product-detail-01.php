<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
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

	<script>
		// Product Data for this specific product
		const productDetail = {
			id: 1,
			name: "Ocean Vibe Tee",  <!-- Change this for each product -->
			price: 40,             <!-- Change this for each product -->
			image: "images/product-detail-01-1.jpg"
		};
	</script>

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

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                            data-notify="0">
                            <i class="zmdi zmdi-shopping-cart"></i>
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

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-120 p-lr-0-lg">
			<a href="cust-homepage.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="cust-catalogue.php" class="stext-109 cl8 hov-cl1 trans-04">
				Men
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Ocean Vibe Tee 
			</span>
		</div>	</div>
		
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-60 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="images/product-detail-01-1.jpg">
									<div class="wrap-pic-w pos-relative">
										<img src="images/product-detail-01-1.jpg" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01-1.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="images/product-detail-01-2.jpg">
									<div class="wrap-pic-w pos-relative">
										<img src="images/product-detail-01-2.jpg" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01-2.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="images/product-detail-01-3.jpg">
									<div class="wrap-pic-w pos-relative">
										<img src="images/product-detail-01-3.jpg" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01-3.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

                                <div class="item-slick3" data-thumb="images/product-detail-01-4.jpg">
									<div class="wrap-pic-w pos-relative">
										<img src="images/product-detail-01-4.jpg" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01-4.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

                                <div class="item-slick3" data-thumb="images/product-detail-01-5.jpg">
									<div class="wrap-pic-w pos-relative">
										<img src="images/product-detail-01-5.jpg" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01-5.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

                                <div class="item-slick3" data-thumb="images/product-detail-01-6.jpg">
									<div class="wrap-pic-w pos-relative">
										<img src="images/product-detail-01-6.jpg" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01-6.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

                                <div class="item-slick3" data-thumb="images/product-detail-01-7.jpg">
									<div class="wrap-pic-w pos-relative">
										<img src="images/product-detail-01-7.jpg" alt="IMG-PRODUCT">
										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01-7.jpg">
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
							Ocean Vibe Tee 
						</h4>

						<span class="mtext-106 cl2">
							RM40  
						</span>

						<p class="stext-102 cl3 p-t-23">
							T-shirt with a bold crab graphic, beachy and bold.
						</p>
						
						<!-- Product Options -->
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
										<select class="js-select2" name="color">
											<option>Choose an option</option>
											<option>Black</option>
											<option>White</option>
											<option>Blue</option>
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

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>

                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                        Add to cart
                                    </button>
								</div>
							</div>	
						</div>

					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
						</li>

					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- Description -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									A casual tee designed for comfort and beach vibes. Features a bold crab graphic print, perfect for summer or casual outings. Crafted for those who love the sea breeze and sun, this tee embodies coastal energy with its vibrant design and lightweight cotton. <!-- Change this for each product -->
								</p>
							</div>
						</div>

						<!-- Additional Information -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Weight
											</span>
											<span class="stext-102 cl6 size-206">
												0.25 kg  <!-- Change this for each product -->
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Dimensions
											</span>
											<span class="stext-102 cl6 size-206">
												30 cm x 25 cm x 2 cm <!-- Change this for each product -->
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Materials
											</span>
											<span class="stext-102 cl6 size-206">
												100% Cotton  <!-- Change this for each product -->
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Color
											</span>
											<span class="stext-102 cl6 size-206">
												Black, White, Blue  <!-- Change this for each product if different -->
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Size
											</span>
											<span class="stext-102 cl6 size-206">
												XS, S, M, L, XL, XXL  <!-- Change this for each product if different -->
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				SKU: P01-mTshirt1  <!-- Change this for each product -->
			</span>

			<span class="stext-107 cl6 p-lr-25">
				Categories: Men  <!-- Change this for each product -->
			</span>
		</div>
	</section>

	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
                            <a href="product-detail-02.php">
                                <img src="images/product-02.jpg" alt="Urban Tee">
                            </a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
										Urban Tee
									<span class="stext-105 cl3">
										RM40
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
                            <a href="product-detail-03.php">
                                <img src="images/product-03.jpg" alt="Flex Fit Pants">
                            </a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
										Flex Fit Pants
									<span class="stext-105 cl3">
										RM35
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
                            <a href="product-detail-04.php">
                                <img src="images/product-04.jpg" alt="Chic Cut Shirt">
                            </a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
										Chic Cut Shirt
									<span class="stext-105 cl3">
										RM30
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
                            <a href="product-detail-05.php">
                                <img src="images/product-05.jpg" alt="Elegance Long Shirt">
                            </a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
										Elegance Long Shirt
									<span class="stext-105 cl3">
										RM40
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
                            <a href="product-detail-06.php">
                                <img src="images/product-06.jpg" alt="Breezy Sleeveless Top">
                            </a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
										Breezy Sleeveless Top
									<span class="stext-105 cl3">
										RM30
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
                            <a href="product-detail-07.php">
                                <img src="images/product-07.jpg" alt="Women's Power Pants">
                            </a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
										Women's Power Pants

									<span class="stext-105 cl3">
										RM30
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
                            <a href="product-detail-15.php">
                                <img src="images/product-15.jpg" alt="Core Sweat Unisex Sweater">
                            </a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
										CoreSweat Unisex Sweater

									<span class="stext-105 cl3">
										RM60
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
                            <a href="product-detail-16.php">
                                <img src="images/product-16.jpg" alt="Street Heat Unisex Hoodie">
                            </a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
										StreetHeat Unisex Hoodie

									<span class="stext-105 cl3">
										RM60
									</span>
								</div>
							</div>
						</div>
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
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
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

    <!-- Custom Scripts for Product Detail Page -->
<!-- Custom Scripts for Product Detail Page -->
<script>
    // Product Data
    const products = {
        1: { id: 1, name: "Ocean Vibe Tee", price: 40, category: "men", image: "images/product-01.jpg" },
        2: { id: 2, name: "Urban Tee", price: 40, category: "men", image: "images/product-02.jpg" },
        3: { id: 3, name: "Flex Fit Pants", price: 35, category: "men", image: "images/product-03.jpg" },
        4: { id: 4, name: "Chic Cut Shirt", price: 30, category: "women", image: "images/product-04.jpg" },
        5: { id: 5, name: "Elegance Long Shirt", price: 40, category: "women", image: "images/product-05.jpg" },
        6: { id: 6, name: "Breezy Sleeveless Top", price: 30, category: "women", image: "images/product-06.jpg" },
        7: { id: 7, name: "Women's Power Pants", price: 30, category: "women", image: "images/product-07.jpg" },
        15: { id: 15, name: "CoreSweat Unisex Sweater", price: 60, category: "men women", image: "images/product-15.jpg" },
        16: { id: 16, name: "StreetHeat Unisex Hoodie", price: 60, category: "men women", image: "images/product-16.jpg" }
    };

	

    // Function to load cart items into the sidebar
    function loadCartItems() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartContainer = $('.header-cart-wrapitem');
        
        // Clear existing items
        cartContainer.empty();
        
        if (cart.length === 0) {
            cartContainer.append('<li class="header-cart-item flex-w flex-t p-b-12">Your cart is empty</li>');
            return;
        }
        
        // Add each item to the cart
        cart.forEach(item => {
            const itemHTML = `
                <li class="header-cart-item flex-w flex-t p-b-12">
                    <div class="header-cart-item-img">
                        <img src="${item.image}" alt="IMG">
                    </div>
                    
                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            ${item.name}
                        </a>
                        
                        <span class="header-cart-item-info">
                            ${item.quantity} x RM${item.price}
                        </span>
                    </div>
                </li>
            `;
            cartContainer.append(itemHTML);
        });
    }

    function addToCart(productId, size, color, quantity) {
        console.log("Adding to cart:", productId, size, color, quantity);
        
        if (!size || size === "Choose an option") {
            swal("Please select size", "", "warning");
            return;
        }
        if (!color || color === "Choose an option") {
            swal("Please select color", "", "warning");
            return;
        }

        quantity = parseInt(quantity) || 1;

        // First check stock from database
        $.ajax({
            url: 'get_product_stock.php',
            method: 'POST',
            data: { prodID: 'P' + productId },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    const availableStock = response.stock;
                    const isAvailable = response.available;
                    
                    if (!isAvailable) {
                        swal("Out of Stock", "This product is currently out of stock", "warning");
                        return;
                    }

                    let cart = JSON.parse(localStorage.getItem('cart')) || [];
                    const product = products[productId];

                    if (!product) {
                        console.error("Product not found:", productId);
                        return;
                    }

                    // Check if item already in cart
                    const existingItem = cart.find(item =>
                        item.id === productId &&
                        item.size === size &&
                        item.color === color
                    );

                    // Calculate total quantity if item already in cart
                    const currentQuantity = existingItem ? existingItem.quantity : 0;
                    const newTotalQuantity = currentQuantity + quantity;

                    if (newTotalQuantity > availableStock) {
                        swal("Not enough stock", `Only ${availableStock} available (${currentQuantity} already in cart)`, "warning");
                        return;
                    }

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
                            quantity: quantity,
                            maxQuantity: availableStock
                        });
                    }

                    localStorage.setItem('cart', JSON.stringify(cart));
                    updateCartCount();
                    swal(product.name, "has been added to cart!", "success");
                } else {
                    swal("Error", "Could not check product availability", "error");
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', error);
                swal("Error", "Could not check product availability", "error");
            }
        });
    }

    // Function to fetch product stock from database
    function fetchProductStock(productId, callback) {
        $.ajax({
            url: 'get_product_stock.php',
            method: 'POST',
            data: { prodID: 'P' + productId },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    callback(response.stock, response.available);
                } else {
                    console.error('Error fetching stock:', response.message);
                    // Default to available if there's an error
                    callback(100, true);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', error);
                // Default to available if there's an error
                callback(100, true);
            }
        });
    }

    // Function to update quantity controls with stock info
    function updateQuantityControls(productId, stock) {
        // Find all quantity controls for this product
        $(`.js-modal1[id="modal${productId}"] .num-product`).attr('max', stock);
        $(`.js-modal1[id="modal${productId}"] .stock-info p`).text('Stock: ' + stock);
    }

    // When modal opens, fetch stock and update controls
    $(document).on('click', '.js-show-modal', function(e) {
        e.preventDefault();
        const modalNum = $(this).data('modal');
        const productId = modalNum;
        
        // Fetch stock from database
        fetchProductStock(productId, function(stock, isAvailable) {
            // Update the modal's quantity controls
            const $modal = $(`#modal${productId}`);
            $modal.find('.num-product').attr('max', stock);
            $modal.find('.stock-info p').text('Stock: ' + stock);
            
            // Disable add to cart button if out of stock
            if (!isAvailable) {
                $modal.find('.js-addcart-detail').prop('disabled', true)
                    .text('Out of Stock')
                    .css('background-color', '#ccc');
            } else {
                $modal.find('.js-addcart-detail').prop('disabled', false)
                    .text('Add to Cart')
                    .css('background-color', '');
            }
        });
        
        // Show the modal
        $(`#modal${modalNum}`).addClass('show-modal1');
        $('body').css('overflow', 'hidden');
    });

    function initQuantityControls() {
        // Remove any existing handlers first to prevent duplication
        $(document).off('click', '.btn-num-product-down');
        $(document).off('click', '.btn-num-product-up');
        $(document).off('change', '.num-product');

        // Quantity down button
        $(document).on('click', '.btn-num-product-down', function(e) {
            e.preventDefault();
            var input = $(this).next('.num-product');
            var value = parseInt(input.val()) || 1;
            if (value > 1) {
                input.val(value - 0).trigger('change');
            }
        });

        // Quantity up button
        $(document).on('click', '.btn-num-product-up', function(e) {
            e.preventDefault();
            var input = $(this).prev('.num-product');
            var value = parseInt(input.val()) || 1;
            var max = parseInt(input.attr('max')) || 100;
            if (value < max) {
                input.val(value + 0).trigger('change');
            } else {
                swal("Maximum reached", "You've hit the stock limit", "info");
            }
        });

        // Handle manual input changes
        $(document).on('change', '.num-product', function() {
            var max = parseInt($(this).attr('max')) || 100;
            var value = parseInt($(this).val()) || 1;
            
            if (isNaN(value) || value < 1) {
                $(this).val(1);
            } else if (value > max) {
                $(this).val(max);
                swal("Quantity adjusted", "You've reached the available stock limit", "info");
            }
        });
    }

    // Update cart counter
    function updateCartCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        $('.icon-header-noti').attr('data-notify', totalItems);
    }

    // Show success message
    function showCartSuccess(productName) {
        swal(productName, "has been added to your cart!", "success");
    }

    // Load cart items when cart panel is shown
    $('.js-show-cart').on('click', function() {
        loadCartItems();
    });

    // Initialize cart on page load
    $(document).ready(function() {
        updateCartCount();
        
        // Load cart items if cart panel is already open
        if ($('.js-panel-cart').hasClass('show-header-cart')) {
            loadCartItems();
        }
        
        // Handle add to cart button clicks
        $('.js-addcart-detail').on('click', function(e) {
            e.preventDefault();
            
            // Get product details
            const productId = productDetail.id;
            const size = $('select[name="time"]').val();
            const color = $('select[name="color"]').val();
            const quantity = parseInt($('.num-product').val()) || 1;
            
            // Add to cart
            if (addToCart(productId, size, color, quantity)) {
                // Reload cart items if cart panel is open
                if ($('.js-panel-cart').hasClass('show-header-cart')) {
                    loadCartItems();
                }
            }
        });
    });
</script>
</body>
</html>