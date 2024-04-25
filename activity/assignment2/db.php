<?php

header('Content-type: application/json; charset=UTF-8');

class players {

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'project');
    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] != 'POST') {
            return json_encode([
                'code' => 201,
                'message' => $_SERVER['REQUEST_METHOD']. "Method is not allowed, Only POST method is allowed",
            ]);
        }

        $data = json_decode(file_get_contents("php://input"), true);

            $username = $data['username'];
            $player_class = $data['player_class'];
            $player_type = $data['player_type'];
            $gender = $data['gender'];
            $description = $data['description'];

            $inserted = $this->conn->query("INSERT INTO players (username, player_class, player_type, gender, description)
                values ('$username', '$player_class', '$player_type', '$gender', '$description')");

            if($inserted) {
                $id = $this->conn->insert_id;
                $row = $this->conn->query("SELECT * FROM players where id = $id");
                $response = $row->fetch_assoc();

                echo json_encode($response);
            } else {
                echo json_encode([
                   'message' => 'Failed to add the new data',
                   'code' => 422,
                ]);
            }

        }
    }


$create = new players();

echo $create->create($_POST);

?>