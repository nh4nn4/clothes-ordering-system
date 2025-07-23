<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wishlist - Waveline Apparel</title>
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
    <style>
        /* Wishlist Panel Styles */
        .wrap-header-wishlist {
            position: fixed;
            top: 0;
            right: -385px;
            width: 385px;
            height: 100%;
            background: #fff;
            z-index: 10000;
            transition: all 0.4s;
            overflow-y: auto;
        }

        .show-header-wishlist {
            right: 0;
        }

        .header-wishlist {
            padding: 20px;
        }

        .header-wishlist-title {
            border-bottom: 1px solid #e6e6e6;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .header-wishlist-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #e6e6e6;
        }

        .header-wishlist-item-img {
            width: 80px;
            margin-right: 15px;
        }

        .header-wishlist-item-img img {
            width: 100%;
        }

        .header-wishlist-item-txt {
            flex: 1;
            position: relative;
        }

        .remove-wishlist {
            position: absolute;
            top: 0;
            right: 0;
            background: none;
            border: none;
            color: #888;
            cursor: pointer;
        }

        .remove-wishlist:hover {
            color: #222;
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
                            class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                            data-notify="0">
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

    <!-- Wishlist Panel -->
    <div class="wrap-header-wishlist js-panel-wishlist">
        <div class="s-full js-hide-wishlist"></div>

        <div class="header-wishlist flex-col-l p-l-65 p-r-25">
            <div class="header-wishlist-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Wishlist
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-wishlist">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="header-wishlist-content flex-w js-pscroll">
                <ul class="header-wishlist-wrapitem w-full">
                    <!-- Wishlist items will be loaded here via JavaScript -->
                </ul>

                <div class="w-full">
                    <div class="header-wishlist-buttons flex-w w-full">
                        <a href="wishlist.php"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            View Wishlist
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wishlist Page Content -->
    <section class="bg0 p-t-120 p-b-140">
        <div class="container">
            <div class="p-b-30">
                <h3 class="ltext-103 cl5">
                    Your Wishlist
                </h3>
            </div>

            <div class="row isotope-grid" id="wishlist-items">
                <!-- Wishlist items will be loaded here via JavaScript -->
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
                        class="fa fa-heart-o" aria-hidden="true"></i> for CSC264 Group Project
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

    <!-- Wishlist Script -->
    <script>
        // Product Data (should match your catalogue)
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

        // Wishlist functions
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
            swal(product.name, "has been added to wishlist!", "success");
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

        function loadWishlistItems() {
            const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            const $wishlistContainer = $('#wishlist-items');

            if (wishlist.length === 0) {
                $wishlistContainer.html('<div class="col-12"><p>Your wishlist is empty</p></div>');
                return;
            }

            let html = '';
            wishlist.forEach(item => {
                html += `
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item" data-category="${item.category}">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="${item.image}" alt="${item.name}">
                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-modal="${item.id}">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    ${item.name}
                                </a>
                                <span class="stext-105 cl3">
                                    RM${item.price.toFixed(2)}
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <button class="btn-addwish-b2 dis-block pos-relative js-addedwish-b2" data-product-id="${item.id}">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            });

            $wishlistContainer.html(html);
        }

        $(document).ready(function () {
            // Initialize counts
            updateWishlistCount();
            updateCartCount();
            loadWishlistItems();

            // Wishlist panel toggle
            $('.js-show-wishlist').on('click', function (e) {
                if (!$(e.target).closest('a').length) {
                    e.preventDefault();
                    renderWishlistPanel();
                    $('.js-panel-wishlist').addClass('show-header-wishlist');
                }
            });

            // Cart panel toggle
            $('.js-show-cart').on('click', function (e) {
                e.preventDefault();
                renderCartPanel();
                $('.js-panel-cart').addClass('show-header-cart');
            });

            $('.js-hide-wishlist').on('click', function () {
                $('.js-panel-wishlist').removeClass('show-header-wishlist');
            });

            $('.js-hide-cart').on('click', function () {
                $('.js-panel-cart').removeClass('show-header-cart');
            });

            // Remove from wishlist
            $(document).on('click', '.js-addedwish-b2, .remove-wishlist', function () {
                const productId = $(this).data('product-id');
                removeFromWishlist(productId);
                updateWishlistCount();
                loadWishlistItems();
                renderWishlistPanel();
            });

            // Remove from cart
            $(document).on('click', '.remove-cart', function () {
                const productId = $(this).data('product-id');
                removeFromCart(productId);
                updateCartCount();
                renderCartPanel();
            });
        });

        // Cart functions
        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            $('.js-show-cart').attr('data-notify', cart.length);
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
                        <button class="remove-cart" data-product-id="${item.id}">
                            <i class="zmdi zmdi-close"></i>
                        </button>
                    </div>
                </li>
            `);
            });
        }
        function addToCart(productId, quantity = 1) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const product = products[productId];

            if (!product) {
                console.error("Product not found:", productId);
                return;
            }

            const existingItem = cart.find(item => item.id === productId);

            if (existingItem) {
                existingItem.quantity += quantity;
            } else {
                cart.push({
                    id: productId,
                    name: product.name,
                    price: product.price,
                    image: product.image,
                    quantity: quantity
                });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
        }

        function removeFromCart(productId) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart = cart.filter(item => item.id !== productId);
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
        }
    </script>
</body>

</html>