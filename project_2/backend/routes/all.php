<?php

include '../controllers/user-controller.php';

$register = new UserController();
$result = $register->getAll();
echo json_encode($result);

?>