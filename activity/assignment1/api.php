<?php

header('Content-type: application/json; charset=UTF-8');

$servername = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'cottagerent';

$conn = new mysqli($servername, $username, $password);
$conn->query("USE $databaseName");
$data = $conn->query("SELECT * FROM customers");
if($data->num_rows > 0){
   $all =   $data->fetch_all(MYSQLI_ASSOC);
   echo json_encode($all);
}


?>