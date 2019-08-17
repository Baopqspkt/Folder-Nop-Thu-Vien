<?php
    session_start();
    if (!isset($_SESSION['username'])) 
    { 
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>PHAM QUOC BAO</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	<body class="smoothscroll enable-animation">

		<div id="wrapper">
			<div id="header" class="sticky clearfix">
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left" href="http://hcmute.edu.vn/" target="blank">
							<img src="assets/images/_smarty/logo.jpg" alt="" />
						</a>

						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown"><!-- HOME -->
										<a  href="home.php">
											HOME
										</a>
									</li>
									<li class="dropdown "><!-- PAGES -->
										<a  href="control.php">
											CONTROL
										</a>
									</li>
									<li class="dropdown"><!-- FEATURES -->
										<a  href="#">
											POWER
										</a>
									</li>
									<li class="dropdown mega-menu"><!-- PORTFOLIO -->
										<a  href="logout.php">
											LOGOUT
										</a>
									</li>
								</ul>
							</nav>
						</div>

					</div>
				</header>
			</div>


			<!-- PAGE HEADER -->
			<section class="page-header page-header-2xlg parallax parallax-4" style="background-image:url('demo_files/images/people/1200x800/2-min.jpg')">
				<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1 class="size-40">PHAM QUOC BAO</h1>
					<span class="font-lato size-18 weight-300">ENGINEER</span>

				</div>
			</section>

			<!-- TIMELINE -->
			<section>
				<div class="container">

					<!-- 
						TIMELINE CENTER
					
						AVAILABLE CLASSES:
							.timeline-desc-line = add text line
					-->
					<ul class="timeline_center list-unstyled">
						<li>
							<h3>
								<span>12 September 2017</span>
								Photography Project
							</h3>
							<div class="timeline-desc timeline-desc-line">Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea. Utinam ipsum everti necessitatibus at fuisset splendide.</div>
							
						</li>
						
						<li>
							<h3>
								<span>13 August 2017</span>
								RFID Project
							</h3>
							<div class="timeline-desc timeline-desc-line"></div>
							
						</li>
						
						<li>
							<h3>
								<span>29 June 2017</span>
								GPS Tracking Project
							</h3>
							<div class="timeline-desc timeline-desc-line">Tracking your vehicle realtime, with module GPS NEO and STM32F407 (Arm 32bit)</div>
						</li>
					</ul>


					<hr class="margin-top-80 margin-bottom-80" />


					<h4>PROJECTS</h4>
					<!-- 
						Note: remove class="rounded" from the img for squared image!
					-->
					<div class="row">
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered padding-15">
								<figure class="pull-left">
									<img class="rounded" src="demo_files/images/people/300x300/2-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Felicia Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered padding-15">
								<figure class="pull-left">
									<img class="rounded" src="demo_files/images/people/300x300/1-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Joana Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered padding-15">
								<figure class="pull-left">
									<img class="rounded" src="demo_files/images/people/300x300/6-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Melissa Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /TIMELINE -->

			<!-- FOOTER -->
			<footer id="footer">
				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">PHAM QUOC BAO</a></li>
							<li>&bull;</li>
							<li><a href="#">VO VAN THANH</a></li>
						</ul>
						&copy; All Rights Reserved
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<script async type="text/javascript" src="demo_files/styleswitcher/styleswitcher.js"></script>
	</body>
</html>