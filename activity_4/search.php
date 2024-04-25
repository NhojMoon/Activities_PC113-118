<?php
include_once 'user.php';

$user = new User();
$search = $user->search($_GET);
echo json_encode($search);

?>