<?php
// Khai báo biến
$servername = "103.95.197.126";
$username = "baopqspkt";
$password = "bao0985265185";
$dbname = "baopqspk_control";
$savedDoneR = "0";
$savedDoneB = "0";
$savedDoneG = "0";
$savedDoneY = "0";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$status = array();
$sql = "SELECT status FROM controlled WHERE id= '0'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            $status[0]= $row["status"];
        }
    }
    
$sql = "SELECT status FROM controlled WHERE id= '1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            $status[1]= $row["status"];
        }
    } 

$sql = "SELECT status FROM controlled WHERE id= '2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            $status[2]= $row["status"];
        }
    }
$sql = "SELECT status FROM controlled WHERE id= '3'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
            $status[3]= $row["status"];
        }
    }
foreach($status as $key => $value)
    {
        echo $status[$key];
    }
    
$b = $_GET["color"];

if (is_int((int)$b[0])){
$sql = "UPDATE status SET status='$b[0]' WHERE id= '0'";
    if($conn->query($sql) === TRUE)
    {
        $savedDoneR = "1";
    }
}

if (is_int((int)$b[1])){
$sql = "UPDATE status SET status='$b[1]' WHERE id= '1'";
    if($conn->query($sql) === TRUE)
    {
        $savedDoneG = "1";
    }
}

if (is_int((int)$b[2])){
$sql = "UPDATE status SET status='$b[2]' WHERE id= '2'";
    if($conn->query($sql) === TRUE)
    {
        $savedDoneB = "1";
    }
}

if (is_int((int)$b[3])){
$sql = "UPDATE status SET status='$b[3]' WHERE id= '3'";
    if($conn->query($sql) === TRUE)
    {
        $savedDoneY = "1";
    }
}

$conn->close();
