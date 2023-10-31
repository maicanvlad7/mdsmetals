<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<?php if(isset($seo)) {?>
		<title><?= $seo->title; ?></title>
		<meta name="description" content="<?= $seo->description; ?>" />
	<?php }else {?>
		<title>Premium Ferroalloys Distributor in Western Europe | MDS Metals</title>
		<meta name="description" content="Elevate your industrial standards with MDS Metals, the leading ferroalloys distributor in Western Europe. Offering top-quality products, just-in-time delivery, and competitive pricing. Your success starts with the right materials!" />
	<?php }?>
	<meta name="keywords" content="Ferroalloys, Western Europe, MDS Metals, Distributor, High-Quality, Industrial Standards, Just-In-Time Delivery, Competitive Pricing, Large Inventory, Family Business" />

	<!-- Stylesheets -->
	<link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
	<!-- Responsive File -->
	<link href="<?= base_url('assets/css/responsive.css') ?>" rel="stylesheet">
	<!-- Color File -->
	<link href="<?= base_url('assets/css/color-2.css') ?>" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800&family=Mukta:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="<?= base_url('assets/images/favicon-two.png') ?>" type="image/x-icon">
	<link rel="icon" href="<?= base_url('assets/images/favicon-two.png') ?>" type="image/x-icon">



	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="<?= base_url('js/respond.js') ?>"></script><![endif]-->
</head>

<body class="theme-color-two">

<div class="page-wrapper">
	<!-- Main Header -->
	<header class="main-header header-style-one" style="background-color: #011940;">
		<!-- Header Upper -->
		<div class="header-upper">
			<div class="auto-container">
				<div class="inner-container">
					<!--Logo-->
					<div class="logo-box">
						<div class="logo"><a href="<?= base_url('') ?>"><img src="<?= base_url('assets/mdsmetalslogo.png') ?>" alt="mds metals logo - ferro alloys provider"></a></div>
					</div>
					<div class="right-column">
						<!--Nav Box-->
						<div class="nav-outer">
							<!--Mobile Navigation Toggler-->
							<div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-5.png" alt=""></div>

							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md navbar-light">
								<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
									<ul class="navigation">
										<li><a href="<?= base_url('') ?>">Home</a></li>
										<li><a href="about.html">About Us</a></li>
										<li class="dropdown"><a href="#">Products</a>
											<ul>
												<?php foreach ($categories as $c) {?>
													<li><a href="<?= base_url('category/'.$c->short) ?>"><?= $c->title; ?></a></li>
												<?php }?>
											</ul>
										</li>
										<li><a href="about.html">Blog</a></li>
										<li><a href="<?= base_url('contact') ?>">Contact</a></li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="navbar-right-info">
							<a href="<?= base_url('contact') ?>" class="theme-btn style-four rounded"><span>Get Quote</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End Header Upper-->

		<!-- Sticky Header  -->
		<div class="sticky-header" style="background-color: #011940;">
			<div class="header-upper">
				<div class="auto-container">
					<div class="inner-container">
						<!--Logo-->
						<div class="logo-box">
							<div class="logo"><a href="<?= base_url('') ?>"><img src="<?= base_url('assets/mdsmetalslogo.png') ?>" alt="mds metals logo - ferro alloys provider"></a></div>
						</div>
						<div class="right-column">
							<!--Nav Box-->
							<div class="nav-outer">
								<!--Mobile Navigation Toggler-->
								<div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-3.png" alt=""></div>

								<!-- Main Menu -->
								<nav class="main-menu navbar-expand-md navbar-light">
								</nav>
							</div>
							<div class="navbar-right-info">
								<a href="about.html" class="theme-btn style-four rounded"><span>Get Quote</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Sticky Menu -->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-remove"></span></div>

			<nav class="menu-box">
				<div class="nav-logo"><a href="<?= base_url('') ?>"><img src="<?= base_url('assets/mdsmetalslogo.png') ?>" alt="mds metals logo - ferro alloys provider"></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
					</ul>
				</div>
			</nav>
		</div><!-- End Mobile Menu -->

		<div class="nav-overlay">
			<div class="cursor"></div>
			<div class="cursor-follower"></div>
		</div>
	</header>
	<!-- End Main Header -->
