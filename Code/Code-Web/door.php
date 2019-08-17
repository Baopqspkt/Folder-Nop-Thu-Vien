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
    <style>
        #content {
            height: 30em;
        }
        table {
            display: flex;
            flex-flow: column;
            height: 100%;
            width: 100%;
        }
        table thead {
            /* head takes the height it requires, 
            and it's not scaled when table is resized */
            flex: 0 0 auto;
            width: calc(100% - 0.9em);
        }
        table tbody {
            /* body takes all the remaining available space */
            flex: 1 1 auto;
            display: block;
            overflow-y: scroll;
        }
        table tbody tr {
            width: 100%;
        }
        table thead,
        table tbody tr {
            display: table;
            table-layout: fixed;
        }
        /* decorations */
        .table-container {
            border: 1px solid black;
            padding: 0.3em;
        }
        table {
            border: 1px solid lightgrey;
        }
        table td, table th {
            padding: 0.3em;
            border: 1px solid lightgrey;
        }
        table th {
            border: 1px solid grey;
        }
    </style>
    
	<meta charset="utf-8" />
	<title>DOOR</title>
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

					<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="fa fa-bars"></i>
					</button>

					<a class="logo pull-left" href="index.html">
						<img src="assets/images/_smarty/logo.jpg" alt="" />
					</a>
					<div class="navbar-collapse pull-right nav-main-collapse collapse">
						<nav class="nav-main">
							<ul id="topMain" class="nav nav-pills nav-main">
								<li class="dropdown">
									<!-- HOME -->
									<a href="home.php">
										HOME
									</a>
								</li>

								<li class="dropdown">
									<!-- FEATURES -->
									<a href="control.php">
										CONTROL
									</a>
								</li>

								<li class="dropdown">
									<!-- BLOG and SHOP -->
									<a href="logout.php">
										LOGOUT
									</a>
								</li>
							</ul>
						</nav>
					</div>

				</div>
			</header>
		</div>
		<section class="page-header">
			<div class="container">

				<h1>QUẢN LÝ NGƯỜI DÙNG</h1>

				<!-- breadcrumbs -->
				<ol class="breadcrumb">
					<li class="active">HOME</li>
					<li class="active">DOOR</li>
				</ol><!-- /breadcrumbs -->

			</div>
		</section>

		<section class="container">
			<form class="form-inline" method="POST">
				<div >
				   	<!-- fix inline -->
						<span>
							<span for="email">Start Day:</span>
							<input type="date" class="form-control" id="startday" placeholder="Enter Start day" name="email">
						</span>
						<span >
							<span for="pwd">End Day:</span>
							<input type="date" class="form-control" id="endDate" placeholder="Enter End day" name="pswd">
						</span>
						<span style="margin-left: 20px">
							<button type="button" class="btn btn-success" onclick="myFunction()" style="width: 100px">Search
						    </button>
							
							<button type="button" class="btn btn-success" onclick="opendoor()" style="width: 100px">Open Door
							</button>
						</span>
					  	<!-- fix inline -->
				</div>
			</form>
				

				<div id="content"></div>

				<script>

					function myFunction() {
						var startDate, endDate, startDateStr, endDateStr, table, tr, td, i, txtValue;
						startDateStr = document.getElementById("startday").value;
						endDateStr = document.getElementById("endDate").value;
						if (startDateStr != "")
							startDate = new Date(startDateStr);
						if (endDateStr != "")
							endDate = new Date(endDateStr);

						table = document.getElementById("customers");
						tr = table.getElementsByTagName("tr");
						for (i = 0; i < tr.length; i++) {
							td = tr[i].getElementsByTagName("td")[0];
							if (td) {
								txtValue = td.textContent || td.innerText;
								if (txtValue != "") {
									txtValue = new Date(txtValue)
									if (startDateStr == "" && endDateStr == "") {

									} else if (startDateStr != "" && endDateStr == "") {
										if (txtValue >= startDate)
											tr[i].style.display = "";
										else
											tr[i].style.display = "none";
									} else if (startDateStr == "" && endDateStr != "") {
										if (txtValue <= endDate)
											tr[i].style.display = "";
										else
											tr[i].style.display = "none";
									} else {
										if (txtValue >= startDate && txtValue <= endDate)
											tr[i].style.display = "";
										else
											tr[i].style.display = "none";
									}

								}

							}
						}
					}

                    function opendoor() {
                        
                    }


					setInterval(function() {

						var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								document.getElementById("content").innerHTML = this.responseText;
							}
						};
						xmlhttp.open("GET", "getdoor.php", true);
						xmlhttp.send();
					}, 30000);
				</script>
		</section>

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
	<script type="text/javascript">
		var plugin_path = 'assets/plugins/';
	</script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

	<script type="text/javascript" src="assets/js/scripts.js"></script>

	<!-- STYLESWITCHER - REMOVE -->
	<script async type="text/javascript" src="demo_files/styleswitcher/styleswitcher.js"></script>
</body>

</html>
