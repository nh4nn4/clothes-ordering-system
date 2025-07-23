<!DOCTYPE html>
<html lang="en">
<head>
	<title>Catalogue</title>
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
				</nav>
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

    <!-- Product -->
    <div class="bg0 m-t-80 p-b-140">
        <div class="container">
            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        All Products
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
                        Men
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
                        Women
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".kids">
                        Kids
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".accessories">
                        Accessories
                    </button>
                </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                        <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                        <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Filter
                    </div>

                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Search
                    </div>
                </div>
				
                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                    </div>	
                </div>

                <!-- Filter -->
                <div class="dis-none panel-filter w-full p-t-10">
                    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        <div class="filter-col1 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Sort By
                            </div>

                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" onclick="clearAllFilters(); return false;">
                                        Clear All Filters
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-sort-by="name" data-sort-direction="asc">
                                        Name A-Z
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-sort-by="popularity" data-sort-direction="asc">
                                        Popularity
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-sort-by="price" data-sort-direction="asc">
                                        Price: Low to High
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-sort-by="price" data-sort-direction="desc">
                                        Price: High to Low
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col2 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                                Price
                            </div>
                            <ul>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active" data-price="*">
                                        All
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-price="10-20">
                                        RM10 - RM20
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-price="20-30">
                                        RM20 - RM30
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-price="30-40">
                                        RM30 - RM40
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-price="40-50">
                                        RM40 - RM50
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-price="50-1000">
                                        RM50+
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="filter-col3 p-r-15 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                            </div>

                            <ul>
                            </ul>
                        </div>

                        <div class="filter-col4 p-b-27">
                            <div class="mtext-102 cl2 p-b-15">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row isotope-grid">
                <!-- Men's Products -->
                <!-- Product 1 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men" 
                    data-id="1"
                    data-name="Ocean Vibe Tee"
                    data-price="40"
                    data-category="men"
                    data-colors="black,white,blue"
                    data-popularity="10"
                    data-tags="t-shirt,casual-wear,streetstyle">
                    
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-01.jpg" alt="Ocean Vibe Tee">

                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Ocean Vibe Tee
                                </a>

                                <span class="stext-105 cl3">
                                    RM40
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men" 
                    data-id="2"
                    data-name="Urban Tee"
                    data-price="40"
                    data-category="men"
                    data-colors="black,white,blue"
                    data-popularity="11"
                    data-tags="t-shirt,casual-wear,streetstyle">
                    
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-02.jpg" alt="Urban Tee">

                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="2">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Urban Tee
                                </a>

                                <span class="stext-105 cl3">
                                    RM40
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men" 
                    data-id="3"
                    data-name="Flex Fit Pants"
                    data-price="55"
                    data-category="men"
                    data-colors="black,white,blue"
                    data-popularity="9"
                    data-tags="streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-03.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="3">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Flex Fit Pants
                                </a>

                                <span class="stext-105 cl3">
                                    RM55
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Women's Products -->
                <!-- Product 4 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" 
                    data-id="4"
                    data-name="Chic Cut Shirt"
                    data-price="30"
                    data-category="women"
                    data-colors="black,white,blue"
                    data-popularity="20"
                    data-tags="t-shirt,streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-04.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="4">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Chic Cut Shirt
                                </a>

                                <span class="stext-105 cl3">
                                    RM30
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" 
                    data-id="5"
                    data-name="Elegance Long Shirt"
                    data-price="40"
                    data-category="women"
                    data-colors="black,white,blue"
                    data-popularity="19"
                    data-tags="t-shirt,streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-05.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="5">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Elegance Long Shirt
                                </a>

                                <span class="stext-105 cl3">
                                    RM40
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" 
                    data-id="6"
                    data-name="Breezy Sleeveless Top"
                    data-price="30"
                    data-category="women"
                    data-colors="black,white,blue"
                    data-popularity="40"
                    data-tags="t-shirt,streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-06.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="6">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Breezy Sleeveless Top
                                </a>

                                <span class="stext-105 cl3">
                                    RM30
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" 
                    data-id="7"
                    data-name="Women's Power Pants"
                    data-price="30"
                    data-category="women"
                    data-colors="black,white,blue"
                    data-popularity="50"
                    data-tags="streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-07.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="7">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Women's Power Pants
                                </a>

                                <span class="stext-105 cl3">
                                    RM30
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kids Products -->
                <!-- Product 8 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item kids" 
                    data-id="8"
                    data-name="Lil' Miss Style Set"
                    data-price="60"
                    data-category="kids"
                    data-colors="white,blue"
                    data-popularity="20"
                    data-tags="t-shirt,streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-08.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="8">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Lil' Miss Style Set
                                </a>

                                <span class="stext-105 cl3">
                                    RM60
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item kids" 
                    data-id="9"
                    data-name="Lil' Champ Outfit"
                    data-price="60"
                    data-category="kids"
                    data-colors="white,blue"
                    data-popularity="20"
                    data-tags="t-shirt,streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-09.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="9">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Lil' Champ Outfit
                                </a>

                                <span class="stext-105 cl3">
                                    RM60
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accessories -->
                <!-- Product 10 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item accessories" 
                    data-id="10"
                    data-name="Cozy Knit Ankle Socks"
                    data-price="15"
                    data-category="accessories"
                    data-colors="black,white"
                    data-popularity="20"
                    data-tags="casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-10.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="10">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Cozy Knit Ankle Socks
                                </a>

                                <span class="stext-105 cl3">
                                    RM15
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 11 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item accessories" 
                    data-id="11"
                    data-name="Sleek Shades Sunglasses"
                    data-price="20"
                    data-category="accessories"
                    data-colors="black"
                    data-popularity="20"
                    data-tags="head-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-11.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="11">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Sleek Shades Sunglasses
                                </a>

                                <span class="stext-105 cl3">
                                    RM20
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 12 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item accessories" 
                    data-id="12"
                    data-name="Vibe Band Stretch Headband"
                    data-price="20"
                    data-category="accessories"
                    data-colors="white"
                    data-popularity="20"
                    data-tags="head-wear">  
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-12.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="12">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Vibe Band Stretch Headband
                                </a>

                                <span class="stext-105 cl3">
                                    RM20
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 13 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item accessories" 
                    data-id="13"
                    data-name="Snap Style Cap"
                    data-price="15"
                    data-category="accessories"
                    data-colors="black,white"
                    data-popularity="20"
                    data-tags="head-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-13.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="13">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Snap Style Cap
                                </a>

                                <span class="stext-105 cl3">
                                    RM15
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 14 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item accessories" 
                    data-id="14"
                    data-name="Chill Brim Sun Hat"
                    data-price="20"
                    data-category="accessories"
                    data-colors="beige"
                    data-popularity="20"
                    data-tags="head-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-14.jpg" alt="IMG-PRODUCT">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="14">
                            Quick View
                        </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Chill Brim Sun Hat
                                </a>

                                <span class="stext-105 cl3">
                                    RM20
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Unisex Products (Men & Women) -->
                <!-- Product 15 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men women" 
                    data-id="15"
                    data-name="Core Sweat Unisex Sweater"
                    data-price="60"
                    data-category="men women"
                    data-colors="black,white,blue"
                    data-popularity="10"
                    data-tags="cozy-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-15.jpg" alt="Core Sweat Unisex Sweater">
                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="15">
                            Quick View
                        </a>
                        </div>
                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Core Sweat Unisex Sweater
                                </a>
                                <span class="stext-105 cl3">RM60</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 16 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men women" 
                    data-id="16"
                    data-name="Street Heat Unisex Hoodie"
                    data-price="60"
                    data-category="men women"
                    data-colors="black,white,blue"
                    data-popularity="10"
                    data-tags="cozy-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="images/product-16.jpg" alt="Street Heat Unisex Hoodie">
                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="16">
                            Quick View
                        </a>
                        </div>
                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l">
                                <a class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Street Heat Unisex Hoodie
                                </a>
                                <span class="stext-105 cl3">RM60</span>
                            </div>
                        </div>
                    </div>
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

    <!-- Modal 1 -->
    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal1">
        <div class="overlay-modal1 js-hide-modal1"></div>
        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                    <img src="images/icons/icon-close.png" alt="CLOSE">
                </button>
                
                <div class="row align-items-center">
                    <!-- Image Column -->
                    <div class="col-md-6 col-lg-6 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                <div class="slick3 gallery-lb">
                                    <div class="item-slick3" data-thumb="images/product-01.jpg">
                                        <div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
                                            <img src="images/product-01.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
                                            <!-- Repositioned Zoom Button -->
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
                                            href="images/product-01.jpg" 
                                            style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Details Column - Original Styling Preserved -->
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                Ocean Vibe Tee
                            </h4>
                            <span class="mtext-106 cl2">
                                RM40
                            </span>
                            <p class="stext-102 cl3 p-t-23">
                                T-shirt with a bold crab graphic, beachy and bold. A casual tee designed for comfort and beach vibes. Features a bold crab graphic print, perfect for summer or casual outings. Machine washable, pre-shrunk cotton. Crafted for those who love the sea breeze and sun, this tee embodies coastal energy with its vibrant design and lightweight cotton.
                            </p>
                            
                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    XS, S, M, L, XL, XXL
                                </div>
                            </div>
                            
                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    Black, White, Blue
                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 2 -->
    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal2">
        <div class="overlay-modal1 js-hide-modal1"></div>
        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                    <img src="images/icons/icon-close.png" alt="CLOSE">
                </button>
                
                <div class="row align-items-center">
                    <!-- Image Column -->
                    <div class="col-md-6 col-lg-6 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                <div class="slick3 gallery-lb">
                                    <div class="item-slick3" data-thumb="images/product-02.jpg">
                                        <div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
                                            <img src="images/product-02.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
                                            <!-- Repositioned Zoom Button -->
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
                                            href="images/product-02.jpg" 
                                            style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Details Column - Original Styling Preserved -->
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                Urban Tee
                            </h4>
                            <span class="mtext-106 cl2">
                                RM40
                            </span>
                            <p class="stext-102 cl3 p-t-23">
                                A fresh streetwear tee with a clean, confident design.
                            </p>
                            
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    XS, S, M, L, XL, XXL
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Black, White, Blue
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal3">
        <div class="overlay-modal1 js-hide-modal1"></div>
        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                    <img src="images/icons/icon-close.png" alt="CLOSE">
                </button>
                
                <div class="row align-items-center">
                    <!-- Image Column -->
                    <div class="col-md-6 col-lg-6 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                <div class="slick3 gallery-lb">
                                    <div class="item-slick3" data-thumb="images/product-03.jpg">
                                        <div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
                                            <img src="images/product-03.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
                                            <!-- Repositioned Zoom Button -->
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
                                            href="images/product-03.jpg" 
                                            style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Details Column - Original Styling Preserved -->
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                Flex Fit Pants
                            </h4>
                            <span class="mtext-106 cl2">
                                RM55
                            </span>
                            <p class="stext-102 cl3 p-t-23">
                                Stretchy, smart-fit pants made for comfort and style. Flexible and flattering, designed to move with you. Ideal for both casual and active wear. Moisture-wicking, breathable fabric. From yoga to coffee runs, these pants adapt to your lifestyle without compromising on fit.
                            </p>
                            
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    Free Size
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Black, White, Blue
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal4">
        <div class="overlay-modal1 js-hide-modal1"></div>
        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                    <img src="images/icons/icon-close.png" alt="CLOSE">
                </button>
                
                <div class="row align-items-center">
                    <!-- Image Column -->
                    <div class="col-md-6 col-lg-6 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                <div class="slick3 gallery-lb">
                                    <div class="item-slick3" data-thumb="images/product-04.jpg">
                                        <div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
                                            <img src="images/product-04.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
                                            <!-- Repositioned Zoom Button -->
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
                                            href="images/product-04.jpg" 
                                            style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Details Column - Original Styling Preserved -->
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                Chic Cut Shirt
                            </h4>
                            <span class="mtext-106 cl2">
                                RM30
                            </span>
                            <p class="stext-102 cl3 p-t-23">
                                Sleek short-sleeve shirt for that clean, effortless look. A wardrobe essential with a feminine silhouette and smart finish. Gentle wash recommended. Stylish yet minimal, this shirt complements a variety of outfits and occasions.
                            </p>
                            
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    XS, S, M, L, XL, XXL
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Black, White, Blue
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal5">
        <div class="overlay-modal1 js-hide-modal1"></div>
        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                    <img src="images/icons/icon-close.png" alt="CLOSE">
                </button>
                
                <div class="row align-items-center">
                    <!-- Image Column -->
                    <div class="col-md-6 col-lg-6 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                <div class="slick3 gallery-lb">
                                    <div class="item-slick3" data-thumb="images/product-04.jpg">
                                        <div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
                                            <img src="images/product-05.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
                                            <!-- Repositioned Zoom Button -->
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
                                            href="images/product-05.jpg" 
                                            style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Details Column - Original Styling Preserved -->
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                Elegance Long Shirt
                            </h4>
                            <span class="mtext-106 cl2">
                                RM40
                            </span>
                            <p class="stext-102 cl3 p-t-23">
                                Flowing long-sleeve shirt with timeless feminine style. Perfect for office or casual wear, drapes beautifully. Iron on low heat. Elevate your wardrobe with this elegant long shirt made to flatter every figure.
                            </p>
                            
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    XS, S, M, L, XL, XXL
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Black, White, Blue
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal6">
        <div class="overlay-modal1 js-hide-modal1"></div>
        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                    <img src="images/icons/icon-close.png" alt="CLOSE">
                </button>
                
                <div class="row align-items-center">
                    <!-- Image Column -->
                    <div class="col-md-6 col-lg-6 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                <div class="slick3 gallery-lb">
                                    <div class="item-slick3" data-thumb="images/product-06.jpg">
                                        <div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
                                            <img src="images/product-06.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
                                            <!-- Repositioned Zoom Button -->
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
                                            href="images/product-06.jpg" 
                                            style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Details Column - Original Styling Preserved -->
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                Breezy Sleeveless Top
                            </h4>
                            <span class="mtext-106 cl2">
                                RM30
                            </span>
                            <p class="stext-102 cl3 p-t-23">
                                Lightweight and trendy, perfect for sunny days. A stylish and breathable top that pairs well with jeans or skirts. Hand wash preferred. This sleeveless top is all about ease and elegance for warm weather.
                            </p>
                            
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    XS, S, M, L, XL, XXL
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Black, White, Blue
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- Modal 7 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal7">
		<div class="overlay-modal1 js-hide-modal1"></div>
		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				
				<div class="row align-items-center">
					<!-- Image Column -->
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-07.jpg">
										<div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
											<img src="images/product-07.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
											<!-- Repositioned Zoom Button -->
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
											href="images/product-07.jpg" 
											style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Details Column -->
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Women's Power Pants
							</h4>
							<span class="mtext-106 cl2">
								RM30
							</span>
							<p class="stext-102 cl3 p-t-23">
								Sharp high-waist pants for classy, confident vibes. Empowering pants with a flattering fit for every occasion. Dry clean only. Designed for bold women, these pants are tailored to inspire power dressing.
							</p>
							
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    Free Size
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Black, White, Blue
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 8 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal8">
		<div class="overlay-modal1 js-hide-modal1"></div>
		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				
				<div class="row align-items-center">
					<!-- Image Column -->
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-08.jpg">
										<div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
											<img src="images/product-08.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
											<!-- Repositioned Zoom Button -->
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
											href="images/product-08.jpg" 
											style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Details Column -->
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lil' Miss Style Set
							</h4>
							<span class="mtext-106 cl2">
								RM60
							</span>
							<p class="stext-102 cl3 p-t-23">
								Adorable white tee and jeans combo for stylish little girls. Cute and comfy set, perfect for active toddlers with flair. Durable and kid-friendly fabrics. Fashion-forward little ones will love this stylish set made for play and charm.
							</p>
							
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    Toodler (Age 4-6)
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    White/Blue
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 9 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal9">
		<div class="overlay-modal1 js-hide-modal1"></div>
		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				
				<div class="row align-items-center">
					<!-- Image Column -->
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-09.jpg">
										<div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
											<img src="images/product-09.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
											<!-- Repositioned Zoom Button -->
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
											href="images/product-09.jpg" 
											style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Details Column -->
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lil' Champ Outfit
							</h4>
							<span class="mtext-106 cl2">
								RM60
							</span>
							<p class="stext-102 cl3 p-t-23">
								Cool and comfy set with jeans and a crisp white tee. Casual wear for kids that keeps up with their energy. Easy to wash and wear. This outfit keeps little champs moving freely while looking sharp.
							</p>
							
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    Toodler (Age 4-6)
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    White/Blue
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 10 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal10">
		<div class="overlay-modal1 js-hide-modal1"></div>
		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				
				<div class="row align-items-center">
					<!-- Image Column -->
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-10.jpg">
										<div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
											<img src="images/product-10.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
											<!-- Repositioned Zoom Button -->
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
											href="images/product-10.jpg" 
											style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Details Column -->
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								CozyKnit Ankle Socks
							</h4>
							<span class="mtext-106 cl2">
								RM15
							</span>
							<p class="stext-102 cl3 p-t-23">
								Soft, colorful socks for all-day comfort and flair. Vibrant and comfortable, ideal for everyday wear. Comes in a 2-pair pack. Your feet will thank you for these cozy knits—snug, soft, and stylish.
							</p>
							
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    Small
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Black, White
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 11 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal11">
		<div class="overlay-modal1 js-hide-modal1"></div>
		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				
				<div class="row align-items-center">
					<!-- Image Column -->
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-11.jpg">
										<div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
											<img src="images/product-11.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
											<!-- Repositioned Zoom Button -->
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
											href="images/product-11.jpg" 
											style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Details Column -->
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								SleekShades Sunglasses
							</h4>
							<span class="mtext-106 cl2">
								RM20
							</span>
							<p class="stext-102 cl3 p-t-23">
								Ultra-cool shades with full UV protection. Designed to combine fashion and eye safety. Includes protective pouch. Make a bold statement with SleekShades, shielding you from UV while elevating your look.

							</p>
							
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    One Size
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Black
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 12 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal12">
		<div class="overlay-modal1 js-hide-modal1"></div>
		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				
				<div class="row align-items-center">
					<!-- Image Column -->
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-12.jpg">
										<div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
											<img src="images/product-12.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
											<!-- Repositioned Zoom Button -->
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
											href="images/product-12.jpg" 
											style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Details Column -->
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								VibeBand Stretch Headband
							</h4>
							<span class="mtext-106 cl2">
								RM20
							</span>
							<p class="stext-102 cl3 p-t-23">
								Comfy headband that holds your style in place. Stretchable and soft, fits all head sizes. Sweat-resistant. A flexible companion for workouts or fashion flair, keeping hair in check.
							</p>
							
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    One Size
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    White
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 13 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal13">
		<div class="overlay-modal1 js-hide-modal1"></div>
		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				
				<div class="row align-items-center">
					<!-- Image Column -->
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-13.jpg">
										<div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
											<img src="images/product-13.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
											<!-- Repositioned Zoom Button -->
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
											href="images/product-13.jpg" 
											style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Details Column -->
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								SnapStyle Cap
							</h4>
							<span class="mtext-106 cl2">
								RM15
							</span>
							<p class="stext-102 cl3 p-t-23">
								Urban snapback cap with fresh embroidered style. Adjustable, breathable and effortlessly cool. One size fits all. A modern street-style cap for fashion-forward looks with comfort.
							</p>
							
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    One Size
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Black, White
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 14 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal14">
		<div class="overlay-modal1 js-hide-modal1"></div>
		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				
				<div class="row align-items-center">
					<!-- Image Column -->
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-14.jpg">
										<div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
											<img src="images/product-14.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
											<!-- Repositioned Zoom Button -->
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
											href="images/product-14.jpg" 
											style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Details Column -->
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								ChillBrim Sun Hat
							</h4>
							<span class="mtext-106 cl2">
								RM20
							</span>
							<p class="stext-102 cl3 p-t-23">
								Wide-brim hat to keep the sun off and your look on. Classic beach hat with added style and function. Foldable and lightweight. Protect yourself in sunny style with this versatile and cute sun hat.
							</p>
							
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    One Size
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Beige
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 15 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal15">
		<div class="overlay-modal1 js-hide-modal1"></div>
		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				
				<div class="row align-items-center">
					<!-- Image Column -->
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-15.jpg">
										<div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
											<img src="images/product-15.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
											<!-- Repositioned Zoom Button -->
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
											href="images/product-15.jpg" 
											style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Details Column -->
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								CoreSweat Unisex Sweater
							</h4>
							<span class="mtext-106 cl2">
								RM60
							</span>
							<p class="stext-102 cl3 p-t-23">
								Minimalist, comfy sweater for all-day cozy wear. Warm and soft with a universal fit. Unisex sizing. The perfect sweater for lounging or layering, suitable for anyone.
							</p>
							
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    XS, S, M, L, XL, XXL
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Black, White, Blue
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal 16 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal16">
		<div class="overlay-modal1 js-hide-modal1"></div>
		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent mx-auto" style="max-width: 1000px;">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				
				<div class="row align-items-center">
					<!-- Image Column -->
					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-16.jpg">
										<div class="wrap-pic-w pos-relative" style="text-align: center; position: relative;">
											<img src="images/product-16.jpg" alt="PRODUCT NAME" class="img-fluid" style="max-height: 500px; width: auto; display: inline-block;">
											<!-- Repositioned Zoom Button -->
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" 
											href="images/product-16.jpg" 
											style="position: absolute; right: 30px; bottom: 30px; transform: translateY(5px);">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Details Column -->
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								StreetHeat Unisex Hoodie
							</h4>
							<span class="mtext-106 cl2">
								RM60
							</span>
							<p class="stext-102 cl3 p-t-23">
								Warm and sleek hoodie, your go-to layer for chill days. Clean and bold, with a modern cut and cozy lining. Front pocket and drawstring hood. Ideal for transitional weather, this hoodie blends fashion and function with a streetwear edge.
							</p>
							
							<!-- Size Selection -->
							<div class="flex-w flex-r-m p-b-10 p-t-33">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>
								<div class="size-204 respon6-next">
                                    XS, S, M, L, XL, XXL
								</div>
							</div>
							
							<!-- Color Selection -->
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>
								<div class="size-204 respon6-next">
                                    Black, White, Blue
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Add these before your custom JS -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
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

    <!-- Custom Scripts for Catalogue Page -->
    <script>
        // Product Data
        const products = {
            1: { id: 1, name: "Ocean Vibe Tee", price: 40, category: "men", image: "images/product-01.jpg", popularity: 10},
            2: { id: 2, name: "Urban Tee", price: 40, category: "men", image: "images/product-02.jpg", popularity: 11},
            3: { id: 3, name: "Flex Fit Pants", price: 55, category: "men", image: "images/product-03.jpg", popularity: 9},
            4: { id: 4, name: "Chic Cut Shirt", price: 30, category: "women", image: "images/product-04.jpg", popularity: 20},
            5: { id: 5, name: "Elegance Long Shirt", price: 40, category: "women", image: "images/product-05.jpg", popularity: 19},
            6: { id: 6, name: "Breezy Sleeveless Top", price: 30, category: "women", image: "images/product-06.jpg", popularity: 40},
            7: { id: 7, name: "Women's Power Pants", price: 30, category: "women", image: "images/product-07.jpg", popularity: 50},
            8: { id: 8, name: "Lil' Miss Style Set", price: 60, category: "kids", image: "images/product-08.jpg", popularity: 20},
            9: { id: 9, name: "Lil' Champ Outfit", price: 60, category: "kids", image: "images/product-09.jpg", popularity: 20},
            10: { id: 10, name: "Cozy Knit Ankle Socks", price: 15, category: "accessories", image: "images/product-10.jpg", popularity: 20},
            11: { id: 11, name: "Sleek Shades Sunglasses", price: 20, category: "accessories", image: "images/product-11.jpg", popularity: 20},
            12: { id: 12, name: "Vibe Band Stretch Headband", price: 20, category: "accessories", image: "images/product-12.jpg", popularity: 20},
            13: { id: 13, name: "Snap Style Cap", price: 15, category: "accessories", image: "images/product-13.jpg", popularity: 20},
            14: { id: 14, name: "Chill Brim Sun Hat", price: 20, category: "accessories", image: "images/product-14.jpg", popularity: 20},
            15: { id: 15, name: "Core Sweat Unisex Sweater", price: 60, category: "men women", image: "images/product-15.jpg", popularity: 10},
            16: { id: 16, name: "Street Heat Unisex Hoodie", price: 60, category: "men women", image: "images/product-16.jpg", popularity: 10}
        };

        $(document).ready(function() {
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
            $('.filter-tope-group button').on('click', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
                $('.filter-tope-group button').removeClass('how-active1');
                $(this).addClass('how-active1');
            });

            // Search functionality
            $('.panel-search input').on('input', function() {
                var searchTerm = $(this).val().toLowerCase();
                $grid.isotope({
                    filter: function() {
                        var name = $(this).attr('data-name').toLowerCase();
                        return name.indexOf(searchTerm) !== -1;
                    }
                });
            });

            // Price filter functionality
            $('.filter-col2 .filter-link').on('click', function(e) {
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
                    filter: function() {
                        var price = parseInt($(this).attr('data-price'));
                        return price >= min && price <= max;
                    }
                });
            });

            // Sort functionality
            $('.filter-link').not('.filter-col2 .filter-link').on('click', function(e) {
                e.preventDefault();
                var sortByValue = $(this).attr('data-sort-by');
                var sortDirection = $(this).attr('data-sort-direction') || 'asc';
                
                $grid.isotope({
                    sortBy: sortByValue,
                    sortAscending: sortDirection === 'asc'
                });
            });

            // Add to cart from modals
            $('.js-addcart-detail').on('click', function(e) {
                e.preventDefault();
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
            $(document).on('click', '.js-show-modal', function(e) {
                e.preventDefault();
                const modalNum = $(this).data('modal');
                $(`#modal${modalNum}`).addClass('show-modal1');
                $('body').css('overflow', 'hidden');
            });

            $(document).on('click', '.js-hide-modal1', function() {
                $(this).closest('.js-modal1').removeClass('show-modal1');
                $('body').css('overflow', 'auto');
            });

            // Close modal when clicking outside content
            $(document).on('click', '.js-modal1', function(e) {
                if ($(e.target).hasClass('js-modal1')) {
                    $(this).removeClass('show-modal1');
                    $('body').css('overflow', 'auto');
                }
            });

            // Search panel toggle
            $('.js-show-search').on('click', function(){
                $('.panel-search').toggleClass('dis-none');
            });

            // Filter panel toggle
            $('.js-show-filter').on('click', function(){
                $('.panel-filter').toggleClass('dis-none');
            });

            // Back to top button
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $('#myBtn').fadeIn();
                } else {
                    $('#myBtn').fadeOut();
                }
            });

            $('#myBtn').click(function(){
                $("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });

            // Tooltips
            $('.tooltip100').tooltip();

            function filterProducts(tag) {
                event.preventDefault();
                
                // Standardize the tag format for comparison
                const standardizedTag = tag.toLowerCase().trim();
                
                // Use Isotope for filtering instead of direct DOM manipulation
                $grid.isotope({
                    filter: function() {
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
                    filter: function() {
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

    <script src="js/search.js"></script>

</body>
</html>