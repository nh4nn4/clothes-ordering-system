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
    <title>Style Quiz</title>
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

    <style>
        .quiz-container {
            max-width: 800px;
            width: 100%;
            padding: 40px;
            background: white;
            border-radius: 10px;
        }
        #question {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: #333;
            font-weight: 500;
            text-align: center;
        }
        .option-btn {
            font-size: 1.1rem;
            padding: 12px 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            text-align: left;
            width: 100%;
            color: #333;
            border: 2px solid #eee;
            background: white;
        }
        .progress-container {
            margin-bottom: 30px;
        }
        .progress-text {
            text-align: right;
            margin-bottom: 5px;
            color: #666;
        }

        .progress-bar {
            background-color: #717fe0 !important;
        }
        #result {
            font-size: 1.1rem;
        }
        .style-title {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #222;
            text-align: center;
        }
        .product-card {
            border: none;
            background: transparent;
            text-align: center;
            margin-bottom: 20px;
        }
        .product-img {
            max-height: 220px;
            width: auto;
            margin: 0 auto;
            border-radius: 8px;
        }
        .product-title {
            font-size: 1.1rem;
            margin-top: 15px;
            font-weight: 500;
        }
        .recommendations-title {
            font-size: 1.8rem;
            margin: 2rem 0 1rem;
            color: #222;
            text-align: center;
        }
        .style-description {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        .quiz-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .quiz-icon {
            display: block;
            margin: 0 auto 15px;
            text-align: center;
            font-size: 3rem;
        }
        .completed-icon {
            color: #717fe0;
        }

        .option-btn:hover {
            background-color: #717fe0 !important;
            border-color: #717fe0 !important;
            color: white !important;
        }
    </style>
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
                <div class="bor10 quiz-container">
                    <div id="quiz">
                        <div class="quiz-header">
                            <i class="fa fa-star quiz-icon" id="quiz-icon"></i>
                            <h4 class="mtext-105 cl2 txt-center p-b-15" style="font-size: 2.2rem;">
                                Find Your Style
                            </h4>
                            <p class="stext-111 cl6">Answer a few questions to discover your perfect fashion style</p>
                        </div>
                        <div class="progress-container">
                            <div class="progress-text" id="progress-text">Question 1 of 8</div>
                            <div class="progress">
                                <div class="progress-bar" id="progress-bar" role="progressbar" style="width: 12.5%" aria-valuenow="12.5" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="stext-111 cl2 m-b-20" id="question"></div>
                        <div id="options"></div>
                    </div>
                    <div class="txt-center stext-109 cl6 p-t-30" id="result"></div>
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
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> for CSC264 Group Project</a>
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

    <!-- Quiz logic -->
    <script>
        const quizData = [
            {
                question: "How do you usually spend your free time?",
                options: [
                    { text: "Practising yoga or meditation", style: "Boho" },
                    { text: "Reading books", style: "Minimalist" },
                    { text: "Playing video games or following esports", style: "Streetwear" },
                    { text: "Attending brunches, family gatherings or social events", style: "Preppy" }
                ]
            },
            {
                question: "Who is your favorite artist among these?",
                options: [
                    { text: "Billie Eilish", style: "Streetwear" },
                    { text: "Harry Styles", style: "Preppy" },
                    { text: "Stevie Nicks", style: "Boho" },
                    { text: "Rose BlackPink", style: "Minimalist" }
                ]
            },
            {
                question: "What is your favorite movie?",
                options: [
                    { text: "Spider-Man: Into the Spider-Verse (2018)", style: "Streetwear" },
                    { text: "La La Land (2016)", style: "Boho" },
                    { text: "The Intern (2015)", style: "Minimalist" },
                    { text: "Gossip Girl (2012)", style: "Preppy" }
                ]
            },
            {
                question: "What color palette do you prefer?",
                options: [
                    { text: "Earth Tones", style: "Boho" },
                    { text: "Neutral Black & White", style: "Minimalist" },
                    { text: "Bright Pops of Color", style: "Streetwear" },
                    { text: "Classic Navy and Beige", style: "Preppy" }
                ]
            },
            {
                question: "What kind of accessory you wear the most?",
                options: [
                    { text: "Round sunglasses", style: "Boho" },
                    { text: "Leather watch", style: "Minimalist" },
                    { text: "Beanies or bucket hat", style: "Streetwear" },
                    { text: "Belts with gold or signature brand buckles", style: "Preppy" }
                ]
            },
            {
                question: "What's your go-to footwear?",
                options: [
                    { text: "Chunky sneakers", style: "Streetwear" },
                    { text: "Leather loafers", style: "Preppy" },
                    { text: "Leather sandals or ankle boots", style: "Boho" },
                    { text: "Simple white sneakers or loafers", style: "Minimalist" }
                ]
            },
            {
                question: "How would you describe your ideal weekend outfit?",
                options: [
                    { text: "Oversized hoodie and joggers", style: "Streetwear" },
                    { text: "Tailored trousers and a crisp shirt", style: "Preppy" },
                    { text: "Flowy dress with layered jewelry", style: "Boho" },
                    { text: "Neutral-toned basics with clean lines", style: "Minimalist" }
                ]
            },
            {
                question: "Which fashion brand resonates with you most?",
                options: [
                    { text: "Supreme or Off-White", style: "Streetwear" },
                    { text: "Ralph Lauren or Tommy Hilfiger", style: "Preppy" },
                    { text: "Free People or Anthropologie", style: "Boho" },
                    { text: "COS or The Row", style: "Minimalist" }
                ]
            }
        ];

        // Product recommendations for each style
        const productRecommendations = {
            "Streetwear": [
                { id: "P2", name: "Urban Tee", code: "M-TEE-002", price: 40.00 },
                { id: "P16", name: "Street Heat Hoodie", code: "U-HOD-001", price: 60.00 },
                { id: "P13", name: "Snap Style Cap", code: "A-CAP-001", price: 15.00 },
                { id: "P1", name: "Ocean Vibe Tee", code: "M-TEE-001", price: 40.00 }
            ],
            "Boho": [
                { id: "P4", name: "Chic Cut Shirt", code: "F-SHT-001", price: 30.00 },
                { id: "P6", name: "Breezy Sleeveless Top", code: "F-TOP-001", price: 30.00 },
                { id: "P14", name: "Chill Brim Sun Hat", code: "A-HAT-001", price: 20.00 },
                { id: "P12", name: "Vibe Band Headband", code: "A-HDB-001", price: 20.00 }
            ],
            "Minimalist": [
                { id: "P5", name: "Elegance Long Shirt", code: "F-SHT-002", price: 40.00 },
                { id: "P7", name: "Women's Power Pants", code: "F-PNT-001", price: 30.00 },
                { id: "P11", name: "Sleek Shades", code: "A-SUN-001", price: 20.00 },
                { id: "P15", name: "Core Sweat Sweater", code: "U-SWT-001", price: 60.00 }
            ],
            "Preppy": [
                { id: "P3", name: "Flex Fit Pants", code: "M-PNT-001", price: 55.00 },
                { id: "P9", name: "Lil' Champ Outfit", code: "K-SET-002", price: 60.00 },
                { id: "P13", name: "Snap Style Cap", code: "A-CAP-001", price: 15.00 },
                { id: "P8", name: "Lil' Miss Style Set", code: "K-SET-001", price: 60.00 }
            ]
        };

        // Product image mapping
        const productImageMap = {
            'P1': 'product-01.jpg',
            'P2': 'product-02.jpg',
            'P3': 'product-03.jpg',
            'P4': 'product-04.jpg',
            'P5': 'product-05.jpg',
            'P6': 'product-06.jpg',
            'P7': 'product-07.jpg',
            'P8': 'product-08.jpg',
            'P9': 'product-09.jpg',
            'P10': 'product-10.jpg',
            'P11': 'product-11.jpg',
            'P12': 'product-12.jpg',
            'P13': 'product-13.jpg',
            'P14': 'product-14.jpg',
            'P15': 'product-15.jpg',
            'P16': 'product-16.jpg'
        };

        let currentQuestion = 0;
        const styleScores = { "Streetwear": 0, "Boho": 0, "Minimalist": 0, "Preppy": 0 };
        const questionEl = document.getElementById('question');
        const optionsEl = document.getElementById('options');
        const resultEl = document.getElementById('result');
        const quizEl = document.getElementById('quiz');
        const progressTextEl = document.getElementById('progress-text');
        const progressBarEl = document.getElementById('progress-bar');
        const quizIconEl = document.getElementById('quiz-icon');

        function loadQuestion() {
            const currentData = quizData[currentQuestion];
            questionEl.innerText = currentData.question;
            optionsEl.innerHTML = '';
            currentData.options.forEach(option => {
                const btn = document.createElement('button');
                btn.className = 'btn btn-outline-primary btn-block option-btn';
                btn.innerText = option.text;
                btn.onclick = () => selectOption(option.style);
                optionsEl.appendChild(btn);
            });
            
            // Update progress
            progressTextEl.innerText = `Question ${currentQuestion + 1} of ${quizData.length}`;
            progressBarEl.style.width = `${((currentQuestion + 1) / quizData.length * 100)}%`;
        }

        function selectOption(style) {
            styleScores[style]++;
            currentQuestion++;
            if (currentQuestion < quizData.length) {
                loadQuestion();
            } else {
                showResult();
            }
        }

        function showResult() {
            // Change star icon to checkmark
            quizIconEl.className = 'fa fa-check-circle quiz-icon completed-icon';
            
            const descriptions = {
                "Streetwear": "Your style is all about urban cool! An edgy, urban style rooted in skate, hip-hop, and youth culture. You probably love comfort yet still want to be stylish. Streetwear combines casual comfort with bold statements through graphic tees, hoodies, sneakers, and sporty influences.",
                "Boho": "You are a free spirit with bohemian style! You have a relaxed, artistic style inspired by nature, travel, and the 70s. Flowy fabrics, earthy colors, and layered accessories with a wide range of patterns definitely suit you well. Boho style embraces natural fabrics, loose silhouettes, and eclectic accessories.",
                "Minimalist": "You prefer clean lines, neutral colors, and high-quality basics. A clean, simple style focused on neutral tones, high-quality basics, and timeless pieces suits you best! Minimalism is about quality over quantity, with a curated wardrobe of versatile pieces that mix and match effortlessly.",
                "Preppy": "You were probably inspired by Ivy League fashion. You love tailored pieces, crisp shirts, and timeless patterns like stripes and plaids. A polished, academic style inspired by elite schools and classic fashion is definitely your go-to style! Preppy style values tradition, quality fabrics, and a put-together appearance."
            };

            const topStyle = Object.keys(styleScores).reduce((a, b) => styleScores[a] > styleScores[b] ? a : b);
            const recommendedProducts = productRecommendations[topStyle];
            
            // Create product cards HTML
            let productsHTML = '<div class="row p-t-20" style="justify-content: center;">';
            recommendedProducts.forEach(product => {
                productsHTML += `
                    <div class="col-sm-6 col-md-3 p-b-20">
                        <div class="product-card">
                            <img class="product-img" src="images/${productImageMap[product.id]}" alt="${product.name}">
                            <div class="card-body">
                                <h5 class="product-title">${product.name}</h5>
                                <p class="stext-107 cl6">RM${product.price.toFixed(2)}</p>
                            </div>
                        </div>
                    </div>
                `;
            });
            productsHTML += '</div>';

            // Hide quiz and show results
            quizEl.style.display = 'none';
            
            resultEl.innerHTML = 
            `<div>
                <div class="quiz-header">
                    <i class="fa fa-check-circle quiz-icon completed-icon"></i>
                    <span class="style-title"><strong>Your style is: <span class="cl2">${topStyle}</span></strong></span>
                </div>
                <div class="style-description">
                    <p class="stext-111 cl6" style="font-size: 1.1rem;">${descriptions[topStyle]}</p>
                </div>
                <h4 class="recommendations-title">Recommended For You:</h4>
                ${productsHTML}
                <div class="action-buttons">
                    <a href="cust-catalogue.php" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04">
                        View Catalogue
                    </a>
                    <button onclick="retakeQuiz()" class="flex-c-m stext-101 cl0 size-121 bg1 bor1 hov-btn1 p-lr-15 trans-04 pointer">
                        Retake Quiz
                    </button>
                    <a href="cust-homepage.php" class="flex-c-m stext-101 cl0 size-121 bg1 bor1 hov-btn1 p-lr-15 trans-04 pointer">
                        Back to Home
                    </a>
                </div>
            </div>`;
        }

        function retakeQuiz() {
            // Change icon back to star
            quizIconEl.className = 'fa fa-star quiz-icon';
            
            // Reset quiz state
            currentQuestion = 0;
            for (const style in styleScores) {
                styleScores[style] = 0;
            }
            
            // Show quiz and hide results
            quizEl.style.display = 'block';
            resultEl.innerHTML = '';
            
            // Reload first question
            loadQuestion();
        }

        loadQuestion();
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