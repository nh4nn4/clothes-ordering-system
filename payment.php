<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment | Waveline</title>
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
        .payment-table {
            width: 100%;
            border-collapse: collapse;
        }
        .payment-table th, .payment-table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #e6e6e6;
        }
        .payment-table th {
            background-color: #f7f7f7;
            font-weight: 500;
        }
        .payment-img {
            width: 80px;
            height: auto;
        }
        .payment-summary {
            background-color: #f7f7f7;
            padding: 20px;
            margin-top: 30px;
        }
        .btn-confirm {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            margin-top: 20px;
        }
        .empty-cart {
            text-align: center;
            padding: 50px 0;
        }
        .empty-cart i {
            font-size: 50px;
            color: #ccc;
            margin-bottom: 20px;
        }
        .bank-dropdown {
            width: 100%;
            padding: 12px;
            border: 1px solid #e6e6e6;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .bank-dropdown:focus {
            border-color: #717fe0;
            outline: none;
        }
        .bank-option {
            padding: 8px;
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
                       
                        <a href="index.php" class= "flex-c-m trans-04 p-lr-25">
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
									<li><a href="size-finder-cust.html">Size Finder</a></li> 
									<li><a href="quiz-cust.html">Quiz</a></li>
									
								</ul>
							</li>

							<li>
								<a href="cust-order.php">View Orders</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
                        <div class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11" style="position: relative;">
    						<i class="bi bi-person-circle" style="cursor: pointer;"></i>
						</div>
					</div>
				</nav>
			</div>	
		</div>


    <!-- Payment -->
    <div class="bg0 p-t-75 p-b-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Order Summary
                        </h4>
                        
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart payment-table">
                                <thead>
                                    <tr class="table_head">
                                        <th class="column-1">Product</th>
                                        <th class="column-2"></th>
                                        <th class="column-3">Price</th>
                                        <th class="column-4">Quantity</th>
                                        <th class="column-5">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="payment-items-container">
                                    <!-- Order items will be loaded here via JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Payment Method
                        </h4>
                        
                        <form id="payment-form" action="payment-process.php" method="post">
                            <div class="form-group">
                                <label for="bank-select" class="stext-110 cl2 p-b-10">Select Bank:</label>
                                <select id="bank-select" class="bank-dropdown" name="bank" required>
                                    <option value="" selected disabled>-- Select Payment Method --</option>
                                    <option value="cimb">CIMB Clicks</option>
                                    <option value="maybank">Maybank2u</option>
                                    <option value="rhb">RHB Now</option>
                                    <option value="public">Public Bank</option>
                                    <option value="hongleong">Hong Leong Connect</option>
                                    <option value="ambank">Ambank</option>
                                    <option value="bsn">MyBSN</option>
                                    <option value="bankrakyat">Bank Rakyat</option>
                                    <option value="bankislam">Bank Islam</option>
                                    <option value="alliance">Alliance Bank</option>
                                </select>
                            </div>

                            <div class="payment-summary">
                                <div class="flex-w flex-t bor12 p-b-13">
                                    <div class="size-208">
                                        <span class="stext-110 cl2">
                                            Subtotal:
                                        </span>
                                    </div>

                                    <div class="size-209">
                                        <span class="mtext-110 cl2" id="payment-subtotal">
                                            RM<?php echo isset($_POST['cart_subtotal']) ? number_format($_POST['cart_subtotal'], 2) : '0.00'; ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="flex-w flex-t bor12 p-t-15 p-b-13">
                                    <div class="size-208">
                                        <span class="stext-110 cl2">
                                            Shipping:
                                        </span>
                                    </div>

                                    <div class="size-209">
                                        <span class="mtext-110 cl2" id="payment-shipping">
                                            RM<?php echo isset($_POST['cart_shipping']) ? number_format($_POST['cart_shipping'], 2) : '5.00'; ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="flex-w flex-t p-t-27 p-b-33">
                                    <div class="size-208">
                                        <span class="mtext-101 cl2">
                                            Total:
                                        </span>
                                    </div>

                                    <div class="size-209">
                                        <span class="mtext-110 cl2" id="payment-total">
                                            RM<?php echo isset($_POST['cart_total']) ? number_format($_POST['cart_total'], 2) : '0.00'; ?>
                                        </span>
                                    </div>
                                </div>
                                
                                <!-- Hidden fields to pass order data -->
                                <input type="hidden" name="subtotal" id="hidden-subtotal" value="<?php echo isset($_POST['cart_subtotal']) ? $_POST['cart_subtotal'] : '0'; ?>">
                                <input type="hidden" name="shipping" id="hidden-shipping" value="<?php echo isset($_POST['cart_shipping']) ? $_POST['cart_shipping'] : '5'; ?>">
                                <input type="hidden" name="total" id="hidden-total" value="<?php echo isset($_POST['cart_total']) ? $_POST['cart_total'] : '0'; ?>">
                                <input type="hidden" name="items" id="hidden-items" value="<?php echo isset($_POST['cart_items']) ? htmlspecialchars($_POST['cart_items']) : ''; ?>">
                                
                                <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer btn-confirm" id="confirm-payment-btn">
                                    Confirm Payment
                                </button>
                            </div>
                        </form>
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
                                ‎20300 Kuala Terengganu,
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
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> for CSC264 Group Project
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
    
    <!-- Payment Functionality Script -->
    <script>
    // Product Data (same as in catalogue.php)
    const products = {
      1: { id: 1, prodID: "P1", name: "Ocean Vibe Tee", price: 40, category: "men", image: "images/product-01.jpg" },
      2: { id: 2, prodID: "P2", name: "Urban Tee", price: 40, category: "men", image: "images/product-02.jpg" },
      3: { id: 3, prodID: "P3", name: "Flex Fit Pants", price: 55, category: "men", image: "images/product-03.jpg" },
      4: { id: 4, prodID: "P4", name: "Chic Cut Shirt", price: 30, category: "women", image: "images/product-04.jpg" },
      5: { id: 5, prodID: "P5", name: "Elegance Long Shirt", price: 40, category: "women", image: "images/product-05.jpg" },
      6: { id: 6, prodID: "P6", name: "Breezy Sleeveless Top", price: 30, category: "women", image: "images/product-06.jpg" },
      7: { id: 7, prodID: "P7", name: "Women's Power Pants", price: 30, category: "women", image: "images/product-07.jpg" },
      8: { id: 8, prodID: "P8", name: "Lil' Miss Style Set", price: 60, category: "kids", image: "images/product-08.jpg" },
      9: { id: 9, prodID: "P9", name: "Lil' Champ Outfit", price: 60, category: "kids", image: "images/product-09.jpg" },
      10: { id: 10, prodID: "P10", name: "Cozy Knit Ankle Socks", price: 15, category: "accessories", image: "images/product-10.jpg" },
      11: { id: 11, prodID: "P11", name: "Sleek Shades Sunglasses", price: 20, category: "accessories", image: "images/product-11.jpg" },
      12: { id: 12, prodID: "P12", name: "Vibe Band Stretch Headband", price: 20, category: "accessories", image: "images/product-12.jpg" },
      13: { id: 13, prodID: "P13", name: "Snap Style Cap", price: 15, category: "accessories", image: "images/product-13.jpg" },
      14: { id: 14, prodID: "P14", name: "Chill Brim Sun Hat", price: 20, category: "accessories", image: "images/product-14.jpg" },
      15: { id: 15, prodID: "P15", name: "Core Sweat Unisex Sweater", price: 60, category: "men women", image: "images/product-15.jpg" },
      16: { id: 16, prodID: "P16", name: "Street Heat Unisex Hoodie", price: 60, category: "men women", image: "images/product-16.jpg" }
    };

    // Bank URLs with the exact links you provided
    const bankUrls = {
        'cimb': 'https://www.cimbclicks.com.my/clicks/#/',
        'maybank': 'https://www.maybank2u.com.my/mbb/m2u/common/M2ULogin.do?action=Login',
        'rhb': 'https://www.rhbnow.com.my/',
        'public': 'https://secure.pbebank.com/myIBK/apppbb/servlet/BxxxServlet?RDOName=BxxxAuth&MethodName=login',
        'hongleong': 'https://s.hongleongconnect.my/rib/app/fo/login?web=1',
        'ambank': 'https://ambank.amonline.com.my/web/',
        'bsn': 'https://www.mybsn.com.my/mybsn/login/login.do',
        'bankrakyat': 'https://www.irakyat.com.my/',
        'bankislam': 'https://bimb.com/bimb-web/',
        'alliance': 'https://www.allianceonline.com.my/personal/login/login.do'
    };

    $(document).ready(function() {
        // Initialize cart from localStorage
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const shippingFee = <?php echo isset($_POST['cart_shipping']) ? $_POST['cart_shipping'] : '5.00'; ?>;
    
        // Update cart count in header
        function updateCartCount() {
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            $('.icon-header-noti').attr('data-notify', totalItems);
        }
    
        // Render payment items
        function renderPaymentItems() {
            const $paymentContainer = $('#payment-items-container');
            $paymentContainer.empty();
        
            if (cart.length === 0) {
                $paymentContainer.html(`
                    <tr>
                        <td colspan="5" class="empty-cart">
                            <i class="zmdi zmdi-shopping-cart"></i>
                            <p class="stext-101 cl2">Your cart is empty</p>
                            <a href="cust-catalogue.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Continue Shopping
                            </a>
                        </td>
                    </tr>
                `);
                $('#payment-subtotal').text('RM0.00');
                $('#payment-shipping').text('RM0.00');
                $('#payment-total').text('RM0.00');
                $('#confirm-payment-btn').prop('disabled', true);
                updateCartCount();
                return;
            }
        
            let subtotal = 0;
        
            cart.forEach(item => {
                // Get full product details
                const product = products[item.id] || item;
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;
            
                $paymentContainer.append(`
                    <tr class="table_row">
                        <td class="column-1">
                            <div class="how-itemcart1">
                                <img src="${product.image}" alt="${product.name}" style="width: 80px;">
                            </div>
                        </td>
                        <td class="column-2">
                            <div class="stext-115 cl6">
                                ${product.name}
                                <div class="stext-107 cl7">
                                    Size: ${item.size}, Color: ${item.color}
                                </div>
                            </div>
                        </td>
                        <td class="column-3">RM${item.price.toFixed(2)}</td>
                        <td class="column-4">${item.quantity}</td>
                        <td class="column-5">RM${itemTotal.toFixed(2)}</td>
                    </tr>
                `);
            });
        
            const total = subtotal + shippingFee;
        
            $('#payment-subtotal').text(`RM${subtotal.toFixed(2)}`);
            $('#payment-shipping').text(`RM${shippingFee.toFixed(2)}`);
            $('#payment-total').text(`RM${total.toFixed(2)}`);
            $('#confirm-payment-btn').prop('disabled', false);
        
            // Update hidden fields
            $('#hidden-subtotal').val(subtotal.toFixed(2));
            $('#hidden-shipping').val(shippingFee.toFixed(2));
            $('#hidden-total').val(total.toFixed(2));
            $('#hidden-items').val(JSON.stringify(cart));
        
            updateCartCount();
        }
    
        // Form submission
        $('#payment-form').submit(function(e) {
            e.preventDefault();
    
            // Show loading state
            const confirmBtn = $('#confirm-payment-btn');
            confirmBtn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Processing...');

            // Validate bank selection
            const selectedBank = $('#bank-select').val();
            if (!selectedBank) {
                swal("Bank Not Selected", "Please select a payment method", "error");
                confirmBtn.prop('disabled', false).text('Confirm Payment');
                return false;
            }
    
            // Validate cart not empty
            if (cart.length === 0) {
                swal("Empty Cart", "Your cart is empty", "error");
                confirmBtn.prop('disabled', false).text('Confirm Payment');
                return false;
            }

            // Show confirmation dialog
            swal({
                title: "Confirm Payment",
                text: "Are you sure you want to proceed to checkout payment?",
                icon: "warning",
                buttons: {
                    cancel: "Cancel",
                    confirm: {
                        text: "Proceed",
                        value: true
                    }
                },
                dangerMode: true
            }).then((proceed) => {
                if (proceed) {
                    // Show loading state
                    const confirmBtn = $('#confirm-payment-btn');
                    confirmBtn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Processing...');
    
                    // Prepare order data
                    const subtotal = parseFloat($('#hidden-subtotal').val());
                    const shipping = parseFloat($('#hidden-shipping').val());
                    const total = subtotal + shipping;
                    const paymentMethod = $('#bank-select option:selected').text();
            
                    // Ensure all items have proper prodID
                    const orderItems = cart.map(item => {
                        const product = products[item.id] || item;
                        return {
                            prodID: product.prodID || ('P' + product.id), // Fallback if prodID not defined
                            quantity: item.quantity,
                            price: item.price,
                            size: item.size,
                            color: item.color
                        };
                    });
    
                    // AJAX call to process the payment and create order
                        $.ajax({
                            url: 'payment-process.php',
                            type: 'POST',
                            data: {
                                action: 'create_order',
                                paymentMethod: paymentMethod,
                                subtotal: subtotal,
                                shipping: shippingFee, // Use the shippingFee variable we defined earlier
                                total: total,
                                items: JSON.stringify(orderItems)
                            },
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                // Clear the cart from localStorage
                                localStorage.removeItem('cart');
                                cart = [];
                                renderPaymentItems();
                                
                                // Get selected bank
                                const selectedBank = $('#bank-select').val();
                                const bankUrl = bankUrls[selectedBank] || 'cust-homepage.php';
                                
                                swal({
                                    title: "Payment Successful!",
                                    text: "Your order #" + response.orderID + " has been placed. Redirecting to bank...",
                                    icon: "success",
                                    button: false,
                                }).then(() => {
                                    window.location.href = bankUrl;
                                });

                                //Redirect after 3 seconds if they don't click
                                setTimeout(() => {
                                    window.location.href = bankUrl;
                                }, 3000);

                            } else {
                                swal("Payment Failed", response.message || "An error occurred", "error");
                            }
                        },
                        error: function(xhr, status, error) {
                            let errorMsg = "An error occurred while processing your payment";
                            try {
                                const response = JSON.parse(xhr.responseText);
                                errorMsg = response.message || errorMsg;
                                if (response.error) {
                                    console.error("Server Error:", response.error);
                                    if (response.error.stack) {
                                        console.error("Stack Trace:", response.error.stack);
                                    }
                                }
                            } catch (e) {
                                console.error("Raw Response:", xhr.responseText);
                                console.error("Status:", status);
                                console.error("Error:", error);
                            }
                            swal("Payment Error", errorMsg, "error");
                        },
                        complete: function() {
                            confirmBtn.prop('disabled', false).text('Confirm Payment');
                        }
                    });
                }
             });
        });
    
        // Initial render
        renderPaymentItems();
    
        // Show/hide cart panel
        $('.js-show-cart').on('click', function(e) {
            e.preventDefault();
            renderCartDropdown();
            $('.js-panel-cart').addClass('show-header-cart');
        });
    
        $('.js-hide-cart').on('click', function() {
            $('.js-panel-cart').removeClass('show-header-cart');
        });
    });
    </script>
</body>
</html>