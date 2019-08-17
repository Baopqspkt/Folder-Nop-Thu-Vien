<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
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
</head>

<body class="smoothscroll enable-animation">
    <div id="wrapper">

        <div id="header" class="sticky clearfix">
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
                                <li class="dropdown">
                                    <!-- HOME -->
                                    <a href="home.php">
                                        HOME
                                    </a>
                                </li>

                                <li class="dropdown">
                                    <!-- FEATURES -->
                                    <a href="door.php">
                                        DOOR
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

                <h1>CONTROL DEVICE</h1>

                <!-- breadcrumbs -->
                <ol class="breadcrumb">
                    <li class="active">HOME</li>
                    <li class="active">CONTROL</li>
                </ol><!-- /breadcrumbs -->

            </div>
        </section>

        <section>
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-lg-push-3 col-md-push-3 col-sm-push-3">
                        <p>PHÒNG KHÁCH:</p>
                        <button type="button" class="btn btn-success" onclick="ONR()">ON</button>
                        <button type="button" class="btn btn-success" onclick="OFFR()" style="margin-left: 20px;">OFF</button>
                        <img id="demo" src="http://www.w3schools.com/js/pic_bulboff.gif" width="100" height="80" style="margin-left: 100px;">
                        <p>PHÒNG NGỦ:</p>
                        <button type="button" class="btn btn-success" onclick="ONG()">ON</button>
                        <button type="button" class="btn btn-success" onclick="OFFG()" style="margin-left: 20px;">OFF</button>
                        <img id="demo1" src="http://www.w3schools.com/js/pic_bulboff.gif" width="100" height="80" style="margin-left: 100px;">
                        <p>PHÒNG ĂN:</p>
                        <button type="button" class="btn btn-success" onclick="ONB()">ON</button>
                        <button type="button" class="btn btn-success" onclick="OFFB()" style="margin-left: 20px;">OFF</button>
                        <img id="demo2" src="http://www.w3schools.com/js/pic_bulboff.gif" width="100" height="80" style="margin-left: 100px;">
                        <p>BAN CÔNG:</p>
                        <button type="button" class="btn btn-success" onclick="ONY()">ON</button>
                        <button type="button" class="btn btn-success" onclick="OFFY()" style="margin-left: 20px;">OFF</button>
                        <img id="demo3" src="http://www.w3schools.com/js/pic_bulboff.gif" width="100" height="80" style="margin-left: 100px;">

                        <div class="divider divider-dotted"></div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="box-flip box-icon box-icon-center box-icon-round box-icon-large text-center">
                                    <div class="front">
                                        <div class="box1">
                                            <span class="box-icon-title">
                                                <img class="img-responsive" src="assets/images/_smarty/pqb.jpg" alt="" />
                                                <h2>PHAM QUOC BAO</h2>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="back">
                                        <div class="box2">
                                            <h4>PHAM QUOC BAO</h4>
                                            <hr />
                                            <p>ENGNIEER.</p>
                                            <a href="#" class="social-icon social-facebook">
                                                <i class="fa fa-facebook"></i>
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#" class="social-icon social-twitter">
                                                <i class="fa fa-twitter"></i>
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon social-linkedin">
                                                <i class="fa fa-linkedin"></i>
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="box-flip box-icon box-icon-center box-icon-round box-icon-large text-center">
                                    <div class="front">
                                        <div class="box1">
                                            <span class="box-icon-title">
                                                <img class="img-responsive" src="assets/images/_smarty/thanh.jpg" alt="" />
                                                <h2>Felicia Doe</h2>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="back">
                                        <div class="box2">
                                            <h4>Felica Doe</h4>
                                            <hr />
                                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere.</p>
                                            <a href="#" class="social-icon social-facebook">
                                                <i class="fa fa-facebook"></i>
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#" class="social-icon social-twitter">
                                                <i class="fa fa-twitter"></i>
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon social-linkedin">
                                                <i class="fa fa-linkedin"></i>
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-lg-pull-6 col-md-pull-6 col-sm-pull-6">
                        <div class="side-nav margin-bottom-60">

                            <div class="side-nav-head">
                                <button class="fa fa-bars"></button>
                                <h4>HOW TO USE</h4>
                                <p> Click on the button and observe the status of the led. When the status change led means the status of your home light has been changed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <h3 class="size-16 margin-bottom-10">FEATURED VIDEO</h3>
                        <div class="embed-responsive embed-responsive-16by9 margin-bottom-60">
                            <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- / -->
        <script>
            setInterval(function() {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    var demo = document.getElementById('demo');
                    if (this.responseText != "") {
                        if (this.responseText == 0) {
                            demo.src = "http://www.w3schools.com/js/pic_bulboff.gif";
                        } else if (this.responseText == 1) {
                            demo.src = "http://www.w3schools.com/js/pic_bulbon.gif";
                        }
                    }
                };
                xmlhttp.open("GET", "logindata0.php", true);
                xmlhttp.send();
            }, 3000);

            setInterval(function() {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    var demo = document.getElementById('demo1');
                    if (this.responseText != "") {
                        if (this.responseText == 0) {
                            demo.src = "http://www.w3schools.com/js/pic_bulboff.gif";
                        } else if (this.responseText == 1) {
                            demo.src = "http://www.w3schools.com/js/pic_bulbon.gif";
                        }
                    }
                };
                xmlhttp.open("GET", "logindata1.php", true);
                xmlhttp.send();
            }, 3000);

            setInterval(function() {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    var demo = document.getElementById('demo2');
                    if (this.responseText != "") {
                        if (this.responseText == 0) {
                            demo.src = "http://www.w3schools.com/js/pic_bulboff.gif";
                        } else if (this.responseText == 1) {
                            demo.src = "http://www.w3schools.com/js/pic_bulbon.gif";
                        }
                    }
                };
                xmlhttp.open("GET", "logindata2.php", true);
                xmlhttp.send();
            }, 3000);

            setInterval(function() {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    var demo = document.getElementById('demo3');
                    if (this.responseText != "") {
                        if (this.responseText == 0) {
                            demo.src = "http://www.w3schools.com/js/pic_bulboff.gif";
                        } else if (this.responseText == 1) {
                            demo.src = "http://www.w3schools.com/js/pic_bulbon.gif";
                        }
                    }
                };
                xmlhttp.open("GET", "logindata3.php", true);
                xmlhttp.send();
            }, 3000);

            function ONR() {
                var xhttp;
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200);
                };
                xhttp.open("GET", "update0-1.php", true);
                xhttp.send();
            }

            function OFFR() {
                var xhttp;
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200);
                };
                xhttp.open("GET", "update0-0.php", true);
                xhttp.send();
            }

            function ONG() {
                var xhttp;
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200);
                };
                xhttp.open("GET", "update1-1.php", true);
                xhttp.send();
            }

            function OFFG() {
                var xhttp;
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200);
                };
                xhttp.open("GET", "update1-0.php", true);
                xhttp.send();
            }

            function ONB() {
                var xhttp;
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200);
                };
                xhttp.open("GET", "update2-1.php", true);
                xhttp.send();
            }

            function OFFB() {
                var xhttp;
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200);
                };
                xhttp.open("GET", "update2-0.php", true);
                xhttp.send();
            }

            function ONY() {
                var xhttp;
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200);
                };
                xhttp.open("GET", "update3-1.php", true);
                xhttp.send();
            }

            function OFFY() {
                var xhttp;
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200);
                };
                xhttp.open("GET", "update3-0.php", true);
                xhttp.send();
            }
        </script>



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
    <script type="text/javascript">
        var plugin_path = 'assets/plugins/';
    </script>
    <script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

    <script type="text/javascript" src="assets/js/scripts.js"></script>

    <!-- STYLESWITCHER - REMOVE -->
    <script async type="text/javascript" src="demo_files/styleswitcher/styleswitcher.js"></script>
</body>
</html>