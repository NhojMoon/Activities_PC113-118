<?php

header('Content-Type: application/json; charset=UTF-8');

$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'project';

$conn = new mysqli($server, $user, $pass);
$conn->query("USE $dbname");
$data = $conn->query("SELECT * FROM players");
if($data->num_rows > 0){
    $all = $data->fetch_all(MYSQLI_ASSOC);
    echo json_encode($all);
}

?>