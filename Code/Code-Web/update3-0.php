<?php
    $servername = "103.95.197.126";
    $username = "baopqspkt";
    $password = "bao0985265185";
    $dbname = "baopqspk_control";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
     $sql = "UPDATE controlled SET status='0' WHERE id= '3'";
     if($conn->query($sql) === TRUE);
     else 
         {
             echo $sql;
             echo "Error updating record: " . $conn->error;
         }
     $conn->close();
     
     ?>

    $conn->close();
?>