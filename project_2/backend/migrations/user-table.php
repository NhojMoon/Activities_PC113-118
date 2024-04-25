<?php
include '../database/db.php';

class User extends Database
{
    public function createTBL()
    {
        $sql = "CREATE TABLE IF NOT EXISTS user(
            id int auto_increment primary key,
            full_name varchar(155) not null,
            email varchar(155) not null UNIQUE,
            password varchar(155) not null
        )";

        $created = $this->conn->query($sql);

        if($created)
        {
            return json_encode([
                'message' => 'User Table has been created successfully'
            ]);
        }else{
            return json_encode([
                'message' => 'Something went wrong :(!! '
            ]);
        }
    }
}
?>