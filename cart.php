<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopping Cart | Waveline</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!-- Stylesheets -->
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
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        /* Cart page specific styles */
        .cart-container {
            padding: 120px 0 80px;
        }

        .cart-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
            table-layout: fixed;
        }

        .cart-table th, .cart-table td {
            padding: 15px 10px;
            text-align: center;
            vertical-align: middle;
            border-bottom: 1px solid #e6e6e6;
        }

        .cart-table th {
            background-color: #f7f7f7;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 16px;
            color: #333;
            padding: 30px;
        }

        /* Column widths */
        .cart-table .column-1 { width: 120px; } /* Image */
        .cart-table .column-2 { width: 20%; text-align: left; } /* Product info */
        .cart-table .column-3 { width: 15%; } /* Price */
        .cart-table .column-4 { width: 20%; } /* Quantity */
        .cart-table .column-5 { width: 15%; } /* Total */
        .cart-table .column-6 { width: 15%; } /* Action */

        .cart-img {
            width: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .product-info {
            text-align: left;
            padding-left: 15px;
        }

        .product-name {
            font-weight: 500;
            margin-bottom: 5px;
            font-size: 16px;
        }

        .product-attributes {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }

        /* Quantity controls */
        .wrap-num-product {
            display: inline-flex;
            align-items: center;
            border: 0px solid #e6e6e6;
            border-radius: 4px;
            padding: 0;
            margin: 0 auto;
            justify-content: center;
        }

        .btn-num-product-down,
        .btn-num-product-up {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            background-color: #f7f7f7;
            border: none;
            padding: 0;
        }

        .num-product {
            width: 30px;
            height: 30px;
            border: none;
            border-left: 0px solid #e6e6e6;
            border-right: 0px solid #e6e6e6;
            text-align: center;
            font-size: 16px;
            padding: 0;
            -moz-appearance: textfield;
        }

        .num-product::-webkit-outer-spin-button,
        .num-product::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Remove button */
        .remove-item {
            background: none;
            border: none;
            color: #ff4d4f;
            font-size: 18px;
            cursor: pointer;
            padding: 5px;
        }

        /* Empty cart */
        .empty-cart {
            text-align: center;
            padding: 50px 0;
        }

        .empty-cart i {
            font-size: 50px;
            color: #ccc;
            margin-bottom: 20px;
        }

        /* Cart totals */
        .cart-total-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .cart-total-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .cart-total-title {
            font-weight: 500;
        }

        .cart-total-value {
            font-weight: bold;
        }

        /* Buttons */
        .btn-action {
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }

        .btn-update {
            background: #717fe0;
            color: white;
        }

        .btn-checkout {
            background: #000;
            color: white;
            width: 100%;
            margin-top: 20px;
        }

        .btn-continue {
            background: #f8f9fa;
            color: #333;
            border: 1px solid #ddd;
        }
    </style>
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
                    <!-- Logo -->
                    <a href="#" class="logo">
                        <img src="images/icons/logo-01.png" alt="Waveline Logo">
                    </a>

                    <!-- Main Menu -->
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

                    <!-- Header Icons -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <a href="cart.php" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </a>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-wishlist" data-notify="0">
                            <a href="wishlist.php" class="wishlist-link cl2">
                                <i class="zmdi zmdi-favorite-outline"></i>
                            </a>
                        </div>

                        <div class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                            <a href="cust-account.php" class="account-link cl2">
                                <i class="bi bi-person-circle"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Shopping Cart Section -->
    <div class="cart-container">
        <div class="container">
            <div class="cart-header">
                <h1 class="mtext-111 cl2">Your Shopping Cart</h1>
                <p class="stext-113 cl6">Review and manage your items</p>
            </div>

            <div class="row">
                <div class="col-lg-8 col-xl-8 m-lr-auto m-b-10">
                    <div class="m-l-25 m-r-15 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart cart-table">
                                <thead>
                                    <tr class="table_head">
                                        <th class="column-1">Product</th>
                                        <th class="column-2">Details</th>
                                        <th class="column-3">Price</th>
                                        <th class="column-4">Quantity</th>
                                        <th class="column-5">Total</th>
                                        <th class="column-6">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="cart-items-container">
                                    <!-- Cart items will be loaded here via JavaScript -->
                                </tbody>
                            </table>
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text"
                                    name="coupon" placeholder="Coupon Code">

                                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                    Apply coupon
                                </div>
                            </div>

                            <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10"
                                id="update-cart-btn">
                                Update Cart
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-lg-4 col-xl-4 m-lr-auto m-b-50">
                    <div class="cart-total-container">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Cart Totals
                        </h4>

                        <div class="cart-total-row">
                            <span class="cart-total-title">Subtotal:</span>
                            <span class="cart-total-value" id="cart-subtotal">RM0.00</span>
                        </div>

                        <div class="cart-total-row">
                            <span class="cart-total-title">Shipping:</span>
                            <span class="cart-total-value" id="cart-shipping">RM5.00</span>
                        </div>

                        <div class="cart-total-row" style="border-bottom: none; padding-bottom: 20px;">
                            <span class="cart-total-title">Total:</span>
                            <span class="cart-total-value" id="cart-total">RM0.00</span>
                        </div>

                        <form action="payment.php" method="post" id="checkout-form">
                            <input type="hidden" name="cart_subtotal" id="hidden-subtotal" value="0">
                            <input type="hidden" name="cart_shipping" id="hidden-shipping" value="5">
                            <input type="hidden" name="cart_total" id="hidden-total" value="0">
                            <input type="hidden" name="cart_items" id="hidden-items" value="">

                            <button type="submit" class="btn-action btn-checkout" id="checkout-btn">
                                Proceed to Checkout
                            </button>
                        </form>

                        <a href="cust-catalogue.php" class="btn-action btn-continue"
                            style="display: block; text-align: center; margin-top: 15px;">
                            Continue Shopping
                        </a>
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
                    <h4 class="stext-301 cl0 p-b-30">Categories</h4>
                    <ul>
                        <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Women</a></li>
                        <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Men</a></li>
                        <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Kids</a></li>
                        <li class="p-b-10"><a href="#" class="stext-107 cl7 hov-cl1 trans-04">Accessories</a></li>
                    </ul>
                </div>

                <div class="col-sm-3 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">Location</h4>
                    <ul>
                        <li class="p-b-10">
                            <span class="stext-107 cl7">
                                Lot 23, Ground Floor,<br>
                                Paya Bunga Square,<br>
                                Jalan Engku Pengiran Anom 2,<br>
                                20300 Kuala Terengganu,<br>
                                Terengganu, Malaysia
                            </span>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-3 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">Contact</h4>
                    <ul>
                        <li class="p-b-10">
                            <span class="stext-107 cl7">Phone: +60 19-622 3456</span>
                        </li>
                        <li class="p-b-10">
                            <span class="stext-107 cl7">Email: WavelineAppSupport@gmail.com</span>
                        </li>
                        <div class="p-t-27">
                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </ul>
                </div>

                <div class="col-sm-3 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">Opening Hours</h4>
                    <p class="stext-107 cl7 size-201">10.00 a.m - 10.00 p.m everyday</p>
                </div>
            </div>

            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1"><img src="images/icons/icon-pay-01.png" alt="ICON-PAY"></a>
                    <a href="#" class="m-all-1"><img src="images/icons/icon-pay-02.png" alt="ICON-PAY"></a>
                    <a href="#" class="m-all-1"><img src="images/icons/icon-pay-03.png" alt="ICON-PAY"></a>
                    <a href="#" class="m-all-1"><img src="images/icons/icon-pay-04.png" alt="ICON-PAY"></a>
                    <a href="#" class="m-all-1"><img src="images/icons/icon-pay-05.png" alt="ICON-PAY"></a>
                </div>

                <p class="stext-107 cl6 txt-center">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                    All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> 
                    for CSC264 Group Project
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!-- Vendor JS -->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/parallax100/parallax100.js"></script>
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="js/slick-custom.js"></script>
    <script src="js/main.js"></script>

    <!-- Cart Functionality Script -->
    <script>
        // Product Data
        const products = {
            1: { id: 1, name: "Ocean Vibe Tee", price: 40, category: "men", image: "images/product-01.jpg" },
            2: { id: 2, name: "Urban Tee", price: 40, category: "men", image: "images/product-02.jpg" },
            3: { id: 3, name: "Flex Fit Pants", price: 55, category: "men", image: "images/product-03.jpg" },
            4: { id: 4, name: "Chic Cut Shirt", price: 30, category: "women", image: "images/product-04.jpg" },
            5: { id: 5, name: "Elegance Long Shirt", price: 40, category: "women", image: "images/product-05.jpg" },
            6: { id: 6, name: "Breezy Sleeveless Top", price: 30, category: "women", image: "images/product-06.jpg" },
            7: { id: 7, name: "Women's Power Pants", price: 30, category: "women", image: "images/product-07.jpg" },
            8: { id: 8, name: "Lil' Miss Style Set", price: 60, category: "kids", image: "images/product-08.jpg" },
            9: { id: 9, name: "Lil' Champ Outfit", price: 60, category: "kids", image: "images/product-09.jpg" },
            10: { id: 10, name: "Cozy Knit Ankle Socks", price: 15, category: "accessories", image: "images/product-10.jpg" },
            11: { id: 11, name: "Sleek Shades Sunglasses", price: 20, category: "accessories", image: "images/product-11.jpg" },
            12: { id: 12, name: "Vibe Band Stretch Headband", price: 20, category: "accessories", image: "images/product-12.jpg" },
            13: { id: 13, name: "Snap Style Cap", price: 15, category: "accessories", image: "images/product-13.jpg" },
            14: { id: 14, name: "Chill Brim Sun Hat", price: 20, category: "accessories", image: "images/product-14.jpg" },
            15: { id: 15, name: "Core Sweat Unisex Sweater", price: 60, category: "men women", image: "images/product-15.jpg" },
            16: { id: 16, name: "Street Heat Unisex Hoodie", price: 60, category: "men women", image: "images/product-16.jpg" }
        };

        $(document).ready(function() {
            // Initialize cart from localStorage
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const shippingFee = 5.00;

            // Update cart count in header
            function updateCartCount() {
                const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
                $('.js-show-cart').attr('data-notify', totalItems);
            }

            // Render cart items
            function renderCart() {
                const $cartContainer = $('#cart-items-container');
                $cartContainer.empty();

                if (cart.length === 0) {
                    $cartContainer.html(`
                        <tr>
                            <td colspan="6" class="empty-cart">
                                <i class="zmdi zmdi-shopping-cart"></i>
                                <p class="stext-101 cl2">Your cart is empty</p>
                                <a href="cust-catalogue.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    Continue Shopping
                                </a>
                            </td>
                        </tr>
                    `);
                    $('#cart-subtotal').text('RM0.00');
                    $('#cart-shipping').text('RM0.00');
                    $('#cart-total').text('RM0.00');
                    $('#checkout-btn').prop('disabled', true);
                    updateCartCount();
                    return;
                }

                let subtotal = 0;

                cart.forEach((item, index) => {
                    const product = products[item.id] || item;
                    const itemTotal = item.price * item.quantity;
                    subtotal += itemTotal;

                    $cartContainer.append(`
                        <tr class="table_row" data-index="${index}">
                            <td class="column-1">
                                <div class="how-itemcart1">
                                    <img src="${product.image}" alt="${product.name}" class="cart-img">
                                </div>
                            </td>
                            <td class="column-2">
                                <div class="product-info">
                                    <div class="product-name">${product.name}</div>
                                    <div class="product-attributes">
                                        <div>Size: ${item.size}</div>
                                        <div>Color: ${item.color}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="column-3">
                                <span class="price">RM${item.price.toFixed(2)}</span>
                            </td>
                            <td class="column-4">
                                <div class="wrap-num-product">
                                    <button class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </button>
                                    <input class="mtext-104 cl3 txt-center num-product" 
                                        type="number" name="num-product" value="${item.quantity}" min="1">
                                    <button class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="column-5">
                                <span class="total-price">RM${itemTotal.toFixed(2)}</span>
                            </td>
                            <td class="column-6">
                                <button class="remove-item">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </td>
                        </tr>
                    `);
                });

                const total = subtotal + shippingFee;

                $('#cart-subtotal').text(`RM${subtotal.toFixed(2)}`);
                $('#cart-shipping').text(`RM${shippingFee.toFixed(2)}`);
                $('#cart-total').text(`RM${total.toFixed(2)}`);
                $('#hidden-subtotal').val(subtotal.toFixed(2));
                $('#hidden-shipping').val(shippingFee.toFixed(2));
                $('#hidden-total').val(total.toFixed(2));
                $('#hidden-items').val(JSON.stringify(cart));
                $('#checkout-btn').prop('disabled', false);
                updateCartCount();
            }

            // Initial render
            renderCart();

            // Quantity change handlers
            $(document).on('click', '.btn-num-product-down', function() {
                const $input = $(this).siblings('.num-product');
                const newVal = parseInt($input.val()) - 1;
                if (newVal >= 1) {
                    $input.val(newVal);
                    updateCartItem($(this).closest('tr').data('index'), newVal);
                }
            });

            $(document).on('click', '.btn-num-product-up', function() {
                const $input = $(this).siblings('.num-product');
                const newVal = parseInt($input.val()) + 1;
                $input.val(newVal);
                updateCartItem($(this).closest('tr').data('index'), newVal);
            });

            // Update cart item quantity
            function updateCartItem(index, quantity) {
                if (index >= 0 && index < cart.length) {
                    cart[index].quantity = quantity;
                    localStorage.setItem('cart', JSON.stringify(cart));
                    renderCart();
                }
            }

            // Remove item from cart
            $(document).on('click', '.remove-item', function() {
                const index = $(this).closest('tr').data('index');
                if (index >= 0 && index < cart.length) {
                    cart.splice(index, 1);
                    localStorage.setItem('cart', JSON.stringify(cart));
                    renderCart();
                    swal("Item removed", "The item has been removed from your cart", "success");
                }
            });

            // Update cart button
            $('#update-cart-btn').click(function() {
                renderCart();
                swal("Cart updated", "Your shopping cart has been updated", "success");
            });

            // Coupon code application
            $('.flex-c-m.stext-101.cl2.size-118.bg8.bor13').click(function() {
                const couponCode = $('input[name="coupon"]').val();
                const shippingFee = 5.00;

                if (couponCode === "DISCOUNT10") {
                    const subtotal = parseFloat($('#cart-subtotal').text().replace('RM', ''));
                    const discount = subtotal * 0.1;
                    const total = (subtotal - discount) + shippingFee;

                    $('#cart-total').text(`RM${total.toFixed(2)}`);
                    $('#hidden-total').val(total.toFixed(2));
                    swal("Coupon applied!", "10% discount has been applied", "success");
                } else if (couponCode === "WELCOMEWV") {
                    const subtotal = parseFloat($('#cart-subtotal').text().replace('RM', ''));
                    const total = subtotal;

                    $('#cart-shipping').text('RM0.00');
                    $('#cart-total').text(`RM${total.toFixed(2)}`);
                    $('#hidden-shipping').val('0.00');
                    $('#hidden-total').val(total.toFixed(2));
                    swal("Coupon applied!", "Free shipping has been applied", "success");
                } else if (couponCode) {
                    swal("Invalid coupon", "The coupon code you entered is not valid", "error");
                }
            });

            // Checkout form submission
            $('#checkout-form').submit(function(e) {
                if (cart.length === 0) {
                    e.preventDefault();
                    swal("Empty Cart", "Your cart is empty. Please add items before checkout.", "error");
                    return false;
                }

                e.preventDefault();

                swal({
                    title: "Confirm Checkout",
                    text: "Are you ready to proceed with your purchase?",
                    icon: "warning",
                    buttons: ["No", "Yes"],
                    dangerMode: true,
                }).then((willProceed) => {
                    if (willProceed) {
                        this.submit();
                    }
                });

                return false;
            });
        });
    </script>
</body>
</html>