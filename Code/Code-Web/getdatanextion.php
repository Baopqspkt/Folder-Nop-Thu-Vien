<?php
// Khai báo biến
$servername = "103.95.197.126";
$username = "baopqspkt";
$password = "bao0985265185";
$dbname = "baopqspk_control";
$savedDoneR = "0";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$b = $_GET["color"];
$status = array();
$sql = "SELECT status FROM controlled WHERE id = '0'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $status[0] = $row["status"];
    }
}

$sql = "SELECT status FROM controlled WHERE id = '1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $status[1] = $row["status"];
    }
}

$sql = "SELECT status FROM controlled WHERE id = '2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $status[2] = $row["status"];
    }
}
$sql = "SELECT status FROM controlled WHERE id = '3'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $status[3] = $row["status"];
    }
}
foreach ($status as $key => $value) {
    echo $status[$key];
}

switch ($b) {
    case "11":
        $sql = "UPDATE controlled SET status='1' WHERE id= '0'";
        if ($conn->query($sql) === TRUE) {
            $savedDoneR = "1";
        }
        break;
    case "01":
        $sql = "UPDATE controlled SET status='0' WHERE id= '0'";
        if ($conn->query($sql) === TRUE) {
            $savedDoneR = "1";
        }
        break;
    case "12":
        $sql = "UPDATE controlled SET status='1' WHERE id= '1'";
        if ($conn->query($sql) === TRUE) {
            $savedDoneR = "1";
        }
        break;
    case "02":
        $sql = "UPDATE controlled SET status='0' WHERE id= '1'";
        if ($conn->query($sql) === TRUE) {
            $savedDoneR = "1";
        }
        break;
    case "13":
        $sql = "UPDATE controlled SET status='1' WHERE id= '2'";
        if ($conn->query($sql) === TRUE) {
            $savedDoneR = "1";
        }
        break;
    case "03":
        $sql = "UPDATE controlled SET status='0' WHERE id= '2'";
        if ($conn->query($sql) === TRUE) {
            $savedDoneR = "1";
        }
        break;
    case "14":
        $sql = "UPDATE controlled SET status='1' WHERE id= '3'";
        if ($conn->query($sql) === TRUE) {
            $savedDoneR = "1";
        }
        break;
    case "04":
        $sql = "UPDATE controlled SET status='0' WHERE id= '3'";
        if ($conn->query($sql) === TRUE) {
            $savedDoneR = "1";
        }
        break;
    default:
        break;
}
$conn->close();
