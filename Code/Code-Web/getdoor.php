<!DOCTYPE html>
<html>
<head>
<style>

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  height: 100%;
  
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>
</head>
<body>
<?php 
$servername = "103.95.197.126";
$username = "baopqspkt";
$password = "bao0985265185";
$dbname = "baopqspk_control";
$mysqli = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM Door";
 
 
echo '<table id="customers">
  <tr>
    <th>Day</th>
    <th>Name</th>
  </tr>
  
  ';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Day"];
        $field2name = $row["Name"];
 
        echo '
                <tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                </tr>
              ';
    }
    $result->free();
} 
?>
