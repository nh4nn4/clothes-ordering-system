<?php
require_once 'DBConnection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Catalogue</title>
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
                    <div
                        class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
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

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product"
                            placeholder="Search">
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
                                    <a href="#" class="filter-link stext-106 trans-04"
                                        onclick="clearAllFilters(); return false;">
                                        Clear All Filters
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-sort-by="name"
                                        data-sort-direction="asc">
                                        Name A-Z
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-sort-by="popularity"
                                        data-sort-direction="asc">
                                        Popularity
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-sort-by="price"
                                        data-sort-direction="asc">
                                        Price: Low to High
                                    </a>
                                </li>
                                <li class="p-b-6">
                                    <a href="#" class="filter-link stext-106 trans-04" data-sort-by="price"
                                        data-sort-direction="desc">
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
                                    <a href="#" class="filter-link stext-106 trans-04 filter-link-active"
                                        data-price="*">
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
                            <ul>
                            </ul>
                        </div>

                        <div class="filter-col4 p-b-27">

                            <div class="filter-tagging">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row isotope-grid">
                <!-- Men's Products -->
                <!-- Product 1 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men" data-id="1" data-name="Ocean Vibe Tee"
                    data-price="40" data-category="men" data-colors="black,white,blue" data-popularity="10"
                    data-tags="t-shirt,casual-wear,streetstyle">

                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-01.php">
                                <img src="images/product-01.jpg" alt="Ocean Vibe Tee">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Ocean Vibe Tee

                                <span class="stext-105 cl3">
                                    RM40
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <button class="btn-addwish-b2 dis-block pos-relative js-addwish-b2" data-product-id="1">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                </button>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men" data-id="2" data-name="Urban Tee"
                    data-price="40" data-category="men" data-colors="black,white,blue" data-popularity="11"
                    data-tags="t-shirt,casual-wear,streetstyle">

                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-02.php">
                                <img src="images/product-02.jpg" alt="Urban Tee">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="2">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Urban Tee

                                <span class="stext-105 cl3">
                                    RM40
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="2">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men" data-id="3" data-name="Flex Fit Pants"
                    data-price="55" data-category="men" data-colors="black,white,blue" data-popularity="9"
                    data-tags="streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-03.php">
                                <img src="images/product-03.jpg" alt="Flex Fit Pants">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="3">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Flex Fit Pants

                                <span class="stext-105 cl3">
                                    RM55
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="3">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Women's Products -->
                <!-- Product 4 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" data-id="4" data-name="Chic Cut Shirt"
                    data-price="30" data-category="women" data-colors="black,white,blue" data-popularity="20"
                    data-tags="t-shirt,streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-04.php">
                                <img src="images/product-04.jpg" alt="Chic Cut Shirt">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="4">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Chic Cut Shirt

                                <span class="stext-105 cl3">
                                    RM30
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="4">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" data-id="5"
                    data-name="Elegance Long Shirt" data-price="40" data-category="women" data-colors="black,white,blue"
                    data-popularity="19" data-tags="t-shirt,streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-05.php">
                                <img src="images/product-05.jpg" alt="Elegance Long Shirt">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="5">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Elegance Long Shirt

                                <span class="stext-105 cl3">
                                    RM40
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="5">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" data-id="6"
                    data-name="Breezy Sleeveless Top" data-price="30" data-category="women"
                    data-colors="black,white,blue" data-popularity="40" data-tags="t-shirt,streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-06.php">
                                <img src="images/product-06.jpg" alt="Breezy Sleeveless Top">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="6">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Breezy Sleeveless Top

                                <span class="stext-105 cl3">
                                    RM30
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="6">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" data-id="7"
                    data-name="Women's Power Pants" data-price="30" data-category="women" data-colors="black,white,blue"
                    data-popularity="50" data-tags="streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-07.php">
                                <img src="images/product-07.jpg" alt="Women's Power Pants">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="7">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Women's Power Pants

                                <span class="stext-105 cl3">
                                    RM30
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="7">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kids Products -->
                <!-- Product 8 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item kids" data-id="8"
                    data-name="Lil' Miss Style Set" data-price="60" data-category="kids" data-colors="white,blue"
                    data-popularity="20" data-tags="t-shirt,streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-08.php">
                                <img src="images/product-08.jpg" alt="Lil' Miss Style Set">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="8">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Lil' Miss Style Set

                                <span class="stext-105 cl3">
                                    RM60
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="8">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item kids" data-id="9"
                    data-name="Lil' Champ Outfit" data-price="60" data-category="kids" data-colors="white,blue"
                    data-popularity="20" data-tags="t-shirt,streetstyle,casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-09.php">
                                <img src="images/product-09.jpg" alt="Lil' Champ Outfit">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="9">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Lil' Champ Outfit

                                <span class="stext-105 cl3">
                                    RM60
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="9">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accessories -->
                <!-- Product 10 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item accessories" data-id="10"
                    data-name="Cozy Knit Ankle Socks" data-price="15" data-category="accessories"
                    data-colors="black,white" data-popularity="20" data-tags="casual-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-10.php">
                                <img src="images/product-10.jpg" alt="Cozy Knit Ankle Socks">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="10">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Cozy Knit Ankle Socks

                                <span class="stext-105 cl3">
                                    RM15
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="10">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 11 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item accessories" data-id="11"
                    data-name="Sleek Shades Sunglasses" data-price="20" data-category="accessories" data-colors="black"
                    data-popularity="20" data-tags="head-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-11.php">
                                <img src="images/product-11.jpg" alt="Sleek Shades Sunglasses">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="11">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Sleek Shades Sunglasses

                                <span class="stext-105 cl3">
                                    RM20
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="11">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 12 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item accessories" data-id="12"
                    data-name="Vibe Band Stretch Headband" data-price="20" data-category="accessories"
                    data-colors="white" data-popularity="20" data-tags="head-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-12.php">
                                <img src="images/product-12.jpg" alt="Vibe Band Stretch Headband">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="12">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Vibe Band Stretch Headband

                                <span class="stext-105 cl3">
                                    RM20
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="12">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 13 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item accessories" data-id="13"
                    data-name="Snap Style Cap" data-price="15" data-category="accessories" data-colors="black,white"
                    data-popularity="20" data-tags="head-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-13.php">
                                <img src="images/product-13.jpg" alt="Snap Style Cap">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="13">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Snap Style Cap

                                <span class="stext-105 cl3">
                                    RM15
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="13">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 14 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item accessories" data-id="14"
                    data-name="Chill Brim Sun Hat" data-price="20" data-category="accessories" data-colors="beige"
                    data-popularity="20" data-tags="head-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-14.php">
                                <img src="images/product-14.jpg" alt="Chill Crim Sun Hat">
                            </a>

                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="14">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                    Chill Brim Sun Hat

                                <span class="stext-105 cl3">
                                    RM20
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="14">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Unisex Products (Men & Women) -->
                <!-- Product 15 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men women" data-id="15"
                    data-name="Core Sweat Unisex Sweater" data-price="60" data-category="men women"
                    data-colors="black,white,blue" data-popularity="10" data-tags="cozy-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-15.php">
                                <img src="images/product-15.jpg" alt="Core Sweat Unisex Sweater">
                            </a>
                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="15">
                                Quick View
                            </a>
                        </div>
                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l">
                                    Core Sweat Unisex Sweater
                                <span class="stext-105 cl3">RM60</span>
                            </div>
                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="15">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 16 -->
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men women" data-id="16"
                    data-name="Street Heat Unisex Hoodie" data-price="60" data-category="men women"
                    data-colors="black,white,blue" data-popularity="10" data-tags="cozy-wear">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <a href="product-detail-16.php">
                                <img src="images/product-16.jpg" alt="Street Heat Unisex Hoodie">
                            </a>
                            <a href="#"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal"
                                data-modal="16">
                                Quick View
                            </a>
                        </div>
                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l">
                                    Street Heat Unisex Hoodie
                                <span class="stext-105 cl3">RM60</span>
                            </div>
                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2"
                                    data-product-id="16">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-01.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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

                    <!-- Details Column -->
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

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>XS</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="blue">Blue</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quantity & Add to Cart -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>
                                        <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                            type="number" name="num-product" value="1" min="1" max="100">
                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="stock-info m-r-20 m-tb-10">
                                        <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                    </div>
                                    
                                    <button
                                        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                        Add to cart
                                    </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-02.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>XS</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="blue">Blue</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-03.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Stretchy, smart-fit pants made for comfort and style.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>Free Size</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="blue">Blue</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-04.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Sleek short-sleeve shirt for that clean, effortless look.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>XS</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="blue">Blue</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-05.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Flowing long-sleeve shirt with timeless feminine style.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>XS</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="blue">Blue</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-06.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Lightweight and trendy, perfect for sunny days.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>XS</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="blue">Blue</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-07.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Sharp high-waist pants for classy, confident vibes.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>Free Size</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="blue">Blue</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-08.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Adorable white tee and jeans combo for stylish little girls.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>Toddler (Age 4-6)</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="white/blue">White/Blue</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-09.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Cool and comfy set with jeans and a crisp white tee.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>Toddler (Age 2-6)</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="white/blue">White/Blue</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-10.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Soft, colorful socks for all-day comfort and flair.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>Small</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-11.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Ultra-cool shades with full UV protection.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>One Size</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-12.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Comfy headband that holds your style in place.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>One Size</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="white">White</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-13.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Urban snapback cap with fresh embroidered style.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>One Size</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-14.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Wide-brim hat to keep the sun off and your look on.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>One Size</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="beige">Beige</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-15.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Minimalist, comfy sweater for all-day cozy wear.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>XS</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="blue">Blue</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
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
                                        <div class="wrap-pic-w pos-relative"
                                            style="text-align: center; position: relative;">
                                            <img src="images/product-16.jpg" alt="PRODUCT NAME" class="img-fluid"
                                                style="max-height: 500px; width: auto; display: inline-block;">
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
                                Warm and sleek hoodie, your go-to layer for chill days.
                            </p>

                            <!-- Size Selection -->
                            <div class="flex-w flex-r-m p-b-10 p-t-33">
                                <div class="size-203 flex-c-m respon6">
                                    Size
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-size" name="time">
                                            <option>Choose an option</option>
                                            <option>XS</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                            <option>XXL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color
                                </div>
                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2 product-color" name="color">
                                            <option>Choose an option</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="blue">Blue</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>

                        <!-- Quantity & Add to Cart -->
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>
                                    <input class="mtext-104 cl3 txt-center num-product product-quantity"
                                        type="number" name="num-product" value="1" min="1" max="100">
                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                
                                <div class="stock-info m-r-20 m-tb-10">
                                    <p class="stext-102 cl3 p-t-23">Stock: 100</p>
                                </div>
                                
                                <button
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
                            </div>
                        </div>

                        </div>
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

    $('.js-addwish-detail').each(function () {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    $('.js-addwish-b2').each(function () {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();

        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
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
        1: { id: 1, name: "Ocean Vibe Tee", price: 40, category: "men", image: "images/product-01.jpg", popularity: 10, stock: 100},
        2: { id: 2, name: "Urban Tee", price: 40, category: "men", image: "images/product-02.jpg", popularity: 11, stock: 100},
        3: { id: 3, name: "Flex Fit Pants", price: 55, category: "men", image: "images/product-03.jpg", popularity: 9, stock: 100},
        4: { id: 4, name: "Chic Cut Shirt", price: 30, category: "women", image: "images/product-04.jpg", popularity: 20, stock: 100},
        5: { id: 5, name: "Elegance Long Shirt", price: 40, category: "women", image: "images/product-05.jpg", popularity: 19, stock: 100},
        6: { id: 6, name: "Breezy Sleeveless Top", price: 30, category: "women", image: "images/product-06.jpg", popularity: 40, stock: 100},
        7: { id: 7, name: "Women's Power Pants", price: 30, category: "women", image: "images/product-07.jpg", popularity: 50, stock: 100},
        8: { id: 8, name: "Lil' Miss Style Set", price: 60, category: "kids", image: "images/product-08.jpg", popularity: 20, stock: 100},
        9: { id: 9, name: "Lil' Champ Outfit", price: 60, category: "kids", image: "images/product-09.jpg", popularity: 20, stock: 100},
        10: { id: 10, name: "Cozy Knit Ankle Socks", price: 15, category: "accessories", image: "images/product-10.jpg", popularity: 20, stock: 100},
        11: { id: 11, name: "Sleek Shades Sunglasses", price: 20, category: "accessories", image: "images/product-11.jpg", popularity: 20, stock: 100},
        12: { id: 12, name: "Vibe Band Stretch Headband", price: 20, category: "accessories", image: "images/product-12.jpg", popularity: 20, stock: 100},
        13: { id: 13, name: "Snap Style Cap", price: 15, category: "accessories", image: "images/product-13.jpg", popularity: 20, stock: 100},
        14: { id: 14, name: "Chill Brim Sun Hat", price: 20, category: "accessories", image: "images/product-14.jpg", popularity: 20, stock: 100},
        15: { id: 15, name: "Core Sweat Unisex Sweater", price: 60, category: "men women", image: "images/product-15.jpg", popularity: 10, stock: 100},
        16: { id: 16, name: "Street Heat Unisex Hoodie", price: 60, category: "men women", image: "images/product-16.jpg", popularity: 10, stock: 100}
    };

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

        const existingItem = wishlist.find(item => item.id === productId);

        if (existingItem) {
            swal(product.name, "is already in your wishlist!", "info");
            return;
        }

        wishlist.push({
            id: productId,
            name: product.name,
            price: product.price,
            image: product.image,
            category: product.category
        });

        localStorage.setItem('wishlist', JSON.stringify(wishlist));
        updateWishlistCount();
        updateWishlistButtonStates();
        swal(product.name, "has been added to wishlist!", "success");
    }

    function updateWishlistButtonStates() {
        const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
        
        $('.js-addwish-b2').each(function() {
            const productId = $(this).data('product-id');
            const isInWishlist = wishlist.some(item => item.id === productId);
            
            if (isInWishlist) {
                $(this).addClass('js-addedwish-b2');
            } else {
                $(this).removeClass('js-addedwish-b2');
            }
        });
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

    $(document).ready(function() {
        // Initialize counts and button states
        updateWishlistCount();
        updateWishlistButtonStates();
        updateCartCount();
        initQuantityControls();

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
        $(document).on('click', '.js-addwish-b2:not(.js-addedwish-b2)', function(e) {
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
        $(document).on('click', '.js-addedwish-b2, .remove-wishlist', function(e) {
            e.preventDefault();
            const productId = $(this).data('product-id');
            removeFromWishlist(productId);
            updateWishlistButtonStates();
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

<script src="js/search.js"></script>
</body>

</html>