<?php
include_once 'database/db.php';
header('Content-type: application/json');
class User extends Database
{
    public function getAll()
    {
        $this->connect();

        $get = $this->conn->query("SELECT * FROM users");
        $data = $get->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public function insertion()
    {
        $this->connect();

        $this->conn->query("INSERT INTO users(full_name, email, password, token)
            VALUES('Nhoj Moon', 'nhoj@gmail.com', 'owner123', 'authorize123')");
    }

    public function search($search)
    {
        $this->connect();
        if(empty($search['email']))
        {
            return json_encode([
                'code' => 422,
                'message' => 'Email is Required'
            ]);
        }

        $email = $search['email'] ?? '';
        $data = $this->conn->query("SELECT * FROM users WHERE email LIKE '%$email%'");

        if($data)
        {
            $show = $data->fetch_all(MYSQLI_ASSOC);
            return $show;
        } else {
            return json_encode([
                'message' => 'error'
            ]);
        }
    }
    
}


?>