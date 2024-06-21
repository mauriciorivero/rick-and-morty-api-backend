<?php

    require_once('Database.class.php');

    class User{
        
        public static function create_user($name, $last_name, $username, $pass){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("INSERT INTO USER (name, lastname, username, pass) 
            VALUES (:name, :last_name, :username, :pass)");
            $query->bindParam(':name', $name);
            $query->bindParam(':last_name', $last_name);
            $query->bindParam(':username', $username);
            $hashUserAsistPass = password_hash($pass, PASSWORD_BCRYPT);
            $query->bindParam(':pass', $hashUserAsistPass);
            if($query->execute()){
                header('HTTP/1.1 201 User created successfully'); 
            }else{
                header('HTTP/1.1 404 User not created'); 
            }
        }

        public static function login_user($username, $pass){
            $database = new Database();
            $conn = $database->get_connection();
            $query = $conn->prepare("SELECT * FROM USER WHERE username = :username
                                    AND pass = :pass");
            $query->bindParam(':username', $username);
            $query->bindParam(':pass', $pass);
            $query->execute();
            $user = $query->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($pass, $user['pass'])) {
                $now = strtotime("now");
                $key = APPLICATION_PASS_MAO;
                $payload = [
                    'exp' -> $now + 3600,
                    'data' -> $user['id']
                ];
                
                $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
                $jwt_token = JWT::encode($payload, $key, 'HS256');
                return $jwt_token;
            } else {
                return false; // Login failed
            }
        }

        public static function get_all_users(){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("select * from USER");
            if($query->execute()){
                $result = $query->fetchAll();
                echo json_encode($result);
                header('HTTP/1.1 201 Episodes retrieved'); 
            }else{
                header('HTTP/1.1 404 Episodes can not be retrieved'); 
            }
        }

    }

?>