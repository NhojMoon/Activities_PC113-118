<?php

include '../controllers/user-controller.php';

$register = new UserController();
echo $register->login($_POST);

?>