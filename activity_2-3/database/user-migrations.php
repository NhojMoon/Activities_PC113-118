<?php
include_once 'db.php';

class UserMigration extends Database
{
    public function createTBL()
    {
        $this->connect();

        $this->conn->query("CREATE TABLE IF NOT EXISTS users(
            id int auto_increment primary key,
            full_name varchar(50) not null,
            email varchar(50) not null UNIQUE,
            password varchar(50) not null,
            token varchar(50)
        )");
    }

}

?>