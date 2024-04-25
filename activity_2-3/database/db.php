<?php

class Database
{
    protected $conn;

    public function connect()
    {
        $this->conn = new mysqli('localhost','root','', 'api_db');
    }
}

?>