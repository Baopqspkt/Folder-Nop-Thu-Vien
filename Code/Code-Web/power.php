<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>CONTROL</title>
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

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>

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
									<a href="home.html">
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
									<a href="login.html">
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

				<h1>POWER MANAGEMENT</h1>

				<!-- breadcrumbs -->
				<ol class="breadcrumb">
					<li class="active">HOME</li>
					<li class="active">POWER</li>
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
							<button type="button" class="btn btn-success" onclick="myFunction()" style="width: 100px">Search</button>
							<button type="button" class="btn btn-success" onclick="myFunction1()" style="width: 100px">Excel</button>
						</span>
					  	<!-- fix inline -->
				</div>
				

				<div id="content"></div>
				<div style="height:410px;min-height:100px;margin:0 auto;" id="main"> </div>

				<script>
					function myFunction1() {
						window.location = "export_bao.php";
					}

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



					setInterval(function() {

						var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								document.getElementById("content").innerHTML = this.responseText;
							}
						};
						xmlhttp.open("GET", "gettable.php", true);
						xmlhttp.send();
					}, 30000);
				</script>

				<script type="text/javascript">
					Highcharts.setOptions({
						global: {
							useUTC: false
						}
					});

					function activeLastPointToolip(chart) {
						var points = chart.series[0].points;
						chart.tooltip.refresh(points[points.length - 1]);
					}
					var temp_1 = 10.21;
					// alert(json_temp);
					$('#main').highcharts({
						chart: {
							type: 'spline',
							animation: Highcharts.svg,
							marginRight: 10,
							events: {
								load: function() {

									var series_temp = this.series[0],
										series_humi = this.series[1],
										chart = this;
									setInterval(function() {
										var xmlhttp = new XMLHttpRequest();
										var url = "data.json";
										xmlhttp.overrideMimeType("application/json");
										xmlhttp.onreadystatechange = function() {
											if (this.readyState == 4 && this.status == 200) {
												var myArr = JSON.parse(this.responseText);
												json_volt = myArr['volt']
												json_ampe = myArr['ampe']
												console.log("Volt:", json_volt);
												console.log("Ampe:", json_ampe);
											}
										};
										xmlhttp.open("GET", url, true);
										xmlhttp.send();

										var x = (new Date()).getTime();
										y_temp = Number(json_volt);
										y_humi = Number(json_ampe);
										console.log(typeof(y_temp));
										console.log("YT:", y_temp);
										console.log("YH", y_humi);

										series_temp.addPoint([x, y_temp], true, true);
										series_humi.addPoint([x, y_humi], true, true);
										activeLastPointToolip(chart);
									}, 3000);
								}
							}
						},
						title: {
							text: 'Voltage & Ampere'
						},
						credits: {
							enabled: false
						},
						xAxis: {
							type: 'datetime',
							tickPixelInterval: 150
						},
						yAxis: {
							title: {

							},
							plotLines: [{
								value: 0,
								width: 1,
								color: '#808080'
							}]
						},
						tooltip: {
							formatter: function() {
								return '<b>' + this.series.name + '</b><br/>' +
									Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
									Highcharts.numberFormat(this.y, 2);
							}
						},
						legend: {
							enabled: false
						},
						exporting: {
							enabled: false
						},
						series: [{
								name: 'Volt',
								data: (function() {
									// generate an array of random data
									var data = [],
										time = (new Date()).getTime(),
										i;
									for (i = -19; i <= 0; i += 1) {
										data.push({
											x: time + i * 1000,
											y: Math.random()
										});
									}
									return data;
								}())
							},
							{
								name: 'Ampe',
								data: (function() {
									// generate an array of random data
									var data = [],
										time = (new Date()).getTime(),
										i;
									for (i = -19; i <= 0; i += 1) {
										data.push({
											x: time + i * 1000,
											y: Math.random()
										});
									}
									return data;
								}())
							}
						]
					}, function(c) {
						activeLastPointToolip(c)
					});
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