<?php
include_once 'database/user-migrations.php';

$migrate = new UserMigration();
$migrate->createTBL();

?>