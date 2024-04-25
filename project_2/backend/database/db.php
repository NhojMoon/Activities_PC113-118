<?php

class DATABASE
{
    public $conn;
    
    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'proj_db');        
    }
}

$new = new Database();