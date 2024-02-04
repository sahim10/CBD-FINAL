
<?php 
include 'web_control/common/connection.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Crescent Blood Donors">
	<meta name="description" content="Crescent Blood Donors.">
    <meta property="og:site_name" content="Babun">
    <meta property="og:url" content="https://creativegigstf.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Crescent Blood Donors">
	<meta name='og:image' content='images/assets/ogg.png'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#1A4137">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#1A4137">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#1A4137">
	<title>Crescent Blood Donors</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="images/logo/logoo.jpeg">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="css/style.min.css" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">

	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="main-page-wrapper">
		<!-- ===================================================
				Loading Transition
			==================================================== -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="images/logoooo.png" alt="" class="m-auto d-block" width="60"></div>
				<div class="txt-loading">
					<span data-text-preloader="C" class="letters-loading">
						C
					</span>
					<span data-text-preloader="B" class="letters-loading">
						B
					</span>
					<span data-text-preloader="D" class="letters-loading">
						D
					</span>
					
				</div>
			</div>
		</div>


		
		<!-- 
		=============================================
				Theme Main Menu
		============================================== 
		-->
		<header class="theme-main-menu menu-overlay menu-style-six sticky-menu">
			<div class="inner-content">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index.html" class="d-flex align-items-center">
								<img src="images/logo/4.png" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
							<!-- <li class="nav-item">
                                        <a class="nav-link" href="contact.html" role="button">Contact Us</a>
                                    </li> -->
                                    <li class="nav-item"><a href="contact.php"
                                            class="btn-one w-100 mt-15 tran3s">Get in Touch</a></li>
							</ul>
						</div> <!--/.right-widget-->
						<nav class="navbar navbar-expand-lg p0 ms-lg-5 order-lg-2">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index.html" class="d-block"><img src="images/logo/logo_06.svg" alt=""></a></div></li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="index.php" >Home
										</a>
										<!-- <ul class="dropdown-menu">
											<li><a href="index.html" class="dropdown-item"><span>Finance</span></a></li>
											<li><a href="index-2.html" class="dropdown-item"><span>Business Consultancy</span></a></li>
											<li><a href="index-3.html" class="dropdown-item"><span>Banking</span></a></li>
											<li><a href="index-4.html" class="dropdown-item"><span>Payment Solution</span></a></li>
											<li><a href="index-5.html" class="dropdown-item"><span>Digital Agency</span></a></li>
											<li><a href="index-6.html" class="dropdown-item"><span>Marketing</span></a></li>
										</ul> -->
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="about.php">About
										</a></li>

										<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="service.php" >Service
										</a></li>

										<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="contact.php" >Contact
										</a></li>
									<!-- <li><a href="about.php" class="dropdown-item"><span>About</span></a></li>
						                <ul class="dropdown-menu">
							                <li class="row gx-1">
												<div class="col-lg-4">
													<div class="menu-column"> -->
														<!-- <ul class="style-none mega-dropdown-list">
															<li><a href="service-v1.html" class="dropdown-item"><span>Service v-1</span></a></li>
															<li><a href="service-v2.html" class="dropdown-item"><span>Service v-2</span></a></li>
															<li><a href="service-details.html" class="dropdown-item"><span>Service Details</span></a></li>
															<li><a href="team-v1.html" class="dropdown-item"><span>Team V-1</span></a></li>
															<li><a href="team-v2.html" class="dropdown-item"><span>Team V-2</span></a></li>
															<li><a href="team-details.html" class="dropdown-item"><span>Team Details</span></a></li>
														</ul> -->

													<!-- </div> 
												</div>
												<div class="col-lg-4">
													<div class="menu-column"> -->
														<!-- <ul class="style-none mega-dropdown-list">
															<li><a href="about-us-v1.html" class="dropdown-item"><span>About Us V-1</span></a></li>
															<li><a href="about-us-v2.html" class="dropdown-item"><span>About Us V-2</span></a></li>
															<li><a href="testimonial.html" class="dropdown-item"><span>Testimonial</span></a></li>
															<li><a href="pricing.html" class="dropdown-item"><span>Pricing</span></a></li>
															<li><a href="faq.html" class="dropdown-item"><span>FAQ’s</span></a></li>
															<li><a href="404.html" class="dropdown-item"><span>404 Error</span></a></li>
														</ul> -->
													<!-- </div> 
												</div>
												<div class="col-lg-4">
													<div class="menu-column"> -->
														<!-- <ul class="style-none mega-dropdown-list">
															<li><a href="project-v1.html" class="dropdown-item"><span>Project V-1</span></a></li>
															<li><a href="project-v2.html" class="dropdown-item"><span>Project V-2</span></a></li>
															<li><a href="project-v3.html" class="dropdown-item"><span>Project V-3</span></a></li>
															<li><a href="project-details-v1.html" class="dropdown-item"><span>Project Details V-1</span></a></li>
															<li><a href="project-details-v2.html" class="dropdown-item"><span>Project Details V-2</span></a></li>
														</ul> -->
													<!-- </div>
												</div>
											</li>
						                </ul>
						            </li> -->
									<!-- <li class="nav-item dropdown">
										<a href="service.php" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Service
										</a> -->
										<!-- <ul class="dropdown-menu">
											<li><a href="shop-grid.html" class="dropdown-item"><span>Shop</span></a></li>
											<li><a href="shop-details.html" class="dropdown-item"><span>Shop Details</span></a></li>
											<li><a href="cart.html" class="dropdown-item"><span>Cart</span></a></li>
											<li><a href="checkout.html" class="dropdown-item"><span>Checkout</span></a></li>
										</ul> -->
									<!-- </li> -->
									<!-- <li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Blog
										</a> -->
										<!-- <ul class="dropdown-menu">
											<li><a href="blog-v1.html" class="dropdown-item"><span>Blog List</span></a></li>
											<li><a href="blog-v2.html" class="dropdown-item"><span>Blog Grid</span></a></li>
											<li><a href="blog-details.html" class="dropdown-item"><span>Blog Details</span></a></li>
										</ul> -->
									<!-- </li> -->
									<!-- <li class="nav-item">
										<a class="nav-link" href="contact.php" role="button">Contact </a>
									</li> -->
									<li class="d-md-none ps-2 pe-2">
										<a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="fw-500 signup-btn-two tran3s w-100 mt-20">Sign Up1111111</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header>


		<div class="modal fade" id="loginModal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="container">
                    <div class="user-data-form modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<div class="form-wrapper m-auto">
							<ul class="nav nav-tabs border-0 w-100" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#fc1" role="tab">Login</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" data-bs-toggle="tab" data-bs-target="#fc2" role="tab">Signup</button>
								</li>
							</ul>
							<div class="tab-content mt-30">
								<div class="tab-pane show active" role="tabpanel" id="fc1">
									<div class="text-center mb-20">
										<h2>Hi, Welcome Back!</h2>
										<p>Still don't have an account? <a href="#">Sign up</a></p>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" placeholder="Youremail@gmail.com">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" placeholder="Enter Password" class="pass_log_id">
													<span class="placeholder_icon"><span class="passVicon"><img src="images/icon/icon_13.svg" alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember">
														<label for="remember">Keep me logged in</label>
													</div>
													<a href="#">Forget Password?</a>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button class="btn-four w-100 tran3s d-block mt-20">Login</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" role="tabpanel" id="fc2">
									<div class="text-center mb-20">
										<h2>Register</h2>
										<p>Already have an account? <a href="#">Login</a></p>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Name*</label>
													<input type="text" placeholder="Zubayer Hasan">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" placeholder="zubayerhasan@gmail.com">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" placeholder="Enter Password" class="pass_log_id">
													<span class="placeholder_icon"><span class="passVicon"><img src="images/icon/icon_13.svg" alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember2">
														<label for="remember2">By hitting the "Register" button, you agree to the <a href="#">Terms conditions</a> & <a href="#">Privacy Policy</a></label>
													</div>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button class="btn-four w-100 tran3s d-block mt-20">Sign up</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
							</div>
							
							<div class="d-flex align-items-center mt-30 mb-10">
								<div class="line"></div>
								<span class="pe-3 ps-3 fs-6">OR</span>
								<div class="line"></div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="images/icon/google.png" alt="">
										<span class="ps-3">Signup with Google</span>
									</a>
								</div>
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="images/icon/facebook.png" alt="">
										<span class="ps-3">Signup with Facebook</span>
									</a>
								</div>
							</div>
						</div>
						<!-- /.form-wrapper -->
                    </div>
                    <!-- /.user-data-form -->
                </div>
            </div>
        </div>


		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>

