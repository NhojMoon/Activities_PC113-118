<?php

include '../controllers/user-controller.php';

$register = new UserController();
echo $register->registered($_POST);

?>