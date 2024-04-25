<?php
include_once 'user.php';

$user = new User();
$data = $user->getAll();
echo json_encode($data);

?>