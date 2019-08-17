<?php
    //declare variable 
    $uname = $_POST['user'];
    $pass = $_POST['pass'];
    $servername = "103.95.197.126";
    $username = "baopqspkt";
    $password = "bao0985265185";
    $dbname = "baopqspk_control";
    $datem   = date("Y-m-d"); 
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
            echo '<script>
                alert("Connect Faild");
            </script>';
        }
    if(isset($_GET['power']))
        {
            $power = $_GET['power'];
        }
    $sql = "INSERT INTO power(power,day) VALUES ('$power',NOW())";
    $conn->query($sql);
    $conn->close();
    
    // Get data show chart
    if(isset($_GET['volt']) && isset($_GET['ampe'])){
    $volt = $_GET['volt'];
    $ampe = $_GET['ampe'];
    $b = array(
            'volt'=>$volt, 
            'ampe'=>$ampe
    );
    $filedata = fopen("data.json", "w");
    if( $filedata == false )
    {
    	echo "error make file ";
    	exit();
    }
    $data = json_encode($b);
    fwrite($filedata, $data );
    fclose($filedata);
    echo($data);
    }
    else
    {
        echo "no data";
    }
?>