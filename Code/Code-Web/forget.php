<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>FORGET</title>
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
                    <!-- Logo -->
                    <a class="logo pull-left" href="http://hcmute.edu.vn/" target="_blank">
                        <img src="assets/images/_smarty/logo.jpg" alt="" />
                    </a>
                    <div class="navbar-collapse pull-right nav-main-collapse collapse">
                        <nav class="nav-main">
                            <a class="dropdown-toggle" href="index.php">
                                HOME
                            </a>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="box-static box-border-top padding-30">
                            <div class="box-title margin-bottom-30">
                                <h2 class="size-20">Please Fill Out</h2>
                            </div>
                            <form class="nomargin" method="post" action="#" autocomplete="off">
                                <div class="clearfix">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                                        <button class="btn btn-primary" name="btn">SEND EMAIL</button>
                                    </div>
                                </div>
                                <?php
                                if (isset($_POST["btn"])) {
                                $servername = "103.95.197.126";
                                $username = "baopqspkt";
                                $password = "bao0985265185";
                                $dbname = "baopqspk_control";
                                $mailto = $_POST['email'];

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                
                                $sql = "SELECT * FROM `admin` WHERE name = '$mailto'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()) {
                                    $mailSub = "Information Password";
                                    $mailMsg = "Name:".$row["name"]." - Password: ".$row["password"];
                                    require 'PHPMailer-master/PHPMailerAutoload.php';
                                    $mail = new PHPMailer();
                                    $mail->IsSmtp();
                                    $mail->SMTPDebug = 0;
                                    $mail->SMTPAuth = true;
                                    $mail->SMTPSecure = 'ssl';
                                    $mail->Host = "smtp.gmail.com";
                                    $mail->Port = 465; // or 587
                                    $mail->IsHTML(true);
                                    $mail->Username = "baopq.spkt@gmail.com";
                                    $mail->Password = "bao0985265185";
                                    $mail->SetFrom("baopq.spkt@gmail.com");
                                    $mail->Subject = $mailSub;
                                    $mail->Body = $mailMsg;
                                    $mail->AddAddress($mailto);

                                    if ($mail->Send()) {
                                        echo '<script>
                                            alert("Please Check Mail");
                                        </script>';
                                    } 
                                    else {
                                        echo '<script>
                                            alert("Send Error");
                                        </script>';;
                                    }
                                     }
                                }
                                else{
                                    echo '<script>
                                            alert("Email Incorrect");
                                        </script>';  
                                }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
    </div>
    <a href="#" id="toTop"></a>

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