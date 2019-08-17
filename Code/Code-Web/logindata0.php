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
    $sql = "SELECT * FROM controlled WHERE id='0'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $led = $row["status"];
            (int)$led;
            echo "$led";
        }
    } 
    else 
    {
        echo "error";
    } 
    $conn->close();
?>