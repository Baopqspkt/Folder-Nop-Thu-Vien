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
		<title>ABOUT US</title>
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
		<!-- wrapper -->
		<div id="wrapper">

			<div id="header" class="sticky clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<a class="logo pull-left" href="hcmute.edu.vn">
							<img src="assets/images/_smarty/logo.jpg" alt="" />
						</a>

						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown"><!-- HOME -->
										<a href="home.php">
											HOME
										</a>
									</li>
									
									<li class="dropdown"><!-- FEATURES -->
										<a  href="control.php">
											CONTROL
										</a>
									</li>
									<li class="dropdown mega-menu"><!-- PORTFOLIO -->
										<a  href="door.php">
											DOOR
										</a>
									</li>
										
									<li class="dropdown"><!-- BLOG and SHOP -->
										<a  href="logout.php">
											LOGOUT
										</a>
									</li>

								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>

			<section class="page-header">
				<div class="container">

					<h1>MY TEAM</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li class="active">Home</li>
						<li class="active">Team</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>

			<section>
				<div class="container">
					
					<p class="lead">Lorem ipsum dolor sit amet. Etharums your template rerum facilis dolores nemis omnis fugats vitaes you need this.</p>
					<p>Lorem ipsum dolor sit amet. Etharums your template rerum facilis dolores nemis omnis fugats vitaes you need this totam rem aperiam, eaque ipsa qu ab illo inventore veritatis et quasi architectos beatae vitae dicta sunt explicabo. Nemo enim sadips ipsums dolores sit.Nemo enims sadips ipsums un inventore veritatis et quasi.</p>

					<div class="row">
					
						<!-- item -->
						<div class="col-md-6 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="assets/images/_smarty/thanh.jpg" alt="" />
											<h2>VO VAN THANH</h2>
											<small>ENGINEER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-primary">
										<h4 class="nomargin">VO VAN THANH</h4>
										<small>ENGINEER</small>

										<hr />

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

										<hr />

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-google">
											<i class="fa fa-google-plus"></i>
											<i class="fa fa-google-plus"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-linkedin"></i>
											<i class="fa fa-linkedin"></i>
										</a>

										<hr />

										<a href="thanhvo.php" class="btn btn-translucid btn-lg btn-block">VIEW PROFILE</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-6 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<img class="img-responsive" src="assets/images/_smarty/pqb.jpg" alt="" />
											<h2>PHAM QUOC BAO</h2>
											<small>ENGINEER</small>
										</div>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-primary">
										<h4 class="nomargin">PHAM QUOC BAO</h4>
										<small>ENGINEER</small>

										<hr />

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

										<hr />

										<a href="https://www.facebook.com/bao.chrome" target="blank" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-google">
											<i class="fa fa-google-plus"></i>
											<i class="fa fa-google-plus"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-linkedin"></i>
											<i class="fa fa-linkedin"></i>
										</a>

										<hr />

										<a href="quocbao.php" class="btn btn-translucid btn-lg btn-block">VIEW PROFILE</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

					</div>

					
				</div>
			</section>

			<footer id="footer">
				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacy</a></li>
						</ul>
						&copy; All Rights Reserved, Company LTD
					</div>
				</div>
			</footer>
		</div>

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