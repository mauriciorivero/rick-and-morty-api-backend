<?php

    require_once('Database.class.php');

    class Character{
        
        public static function create_character($name, $status, $species, $gender, $image, $created, $isActive){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("INSERT INTO RM_CHARACTER (name, status, species, gender, image, created, isActive) 
            VALUES (:name, :status, :species, :gender, :image, :created, :isActive)");
            $query->bindParam(':name', $name);
            $query->bindParam(':status', $status);
            $query->bindParam(':species', $species);
            $query->bindParam(':gender', $gender);
            $query->bindParam(':image', $image);
            $query->bindParam(':created', $created);
            $query->bindParam(':isActive', $isActive);
            if($query->execute()){
                header('HTTP/1.1 201 Character created successfully'); 
            }else{
                header('HTTP/1.1 404 Character not created'); 
            }
        }

        public static function get_all_characters(){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("select * from RM_CHARACTER");
            if($query->execute()){
                $result = $query->fetchAll();
                echo json_encode($result);
                header('HTTP/1.1 201 Characters retrieved'); 
            }else{
                header('HTTP/1.1 404 Characters can not be retrieved'); 
            }
        }

        public static function delete_character_by_id($id){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("DELETE FROM RM_CHARACTER WHERE id=:id;");
            $query->bindParam(':id', $id);
            if($query->execute()){
                header('HTTP/1.1 201 Character deleted successfully'); 
            }else{
                header('HTTP/1.1 404 Character can not be deleted'); 
            }
        }

        public static function update_character_by_id($id, $name, $status, $species, $gender, $image, $isActive){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("UPDATE RM_CHARACTER
                                    SET name=:name, status=:status, species =:species, gender =:gender, image =:image, isActive = :isActive
                                    WHERE id = :id;");
            $query->bindParam(':name', $name);
            $query->bindParam(':status', $status);
            $query->bindParam(':species', $species);
            $query->bindParam(':gender', $gender);
            $query->bindParam(':image', $image);
            $query->bindParam(':isActive', $isActive);
            $query->bindParam(':id', $id);
            if($query->execute()){
                header('HTTP/1.1 201 Character updated successfully'); 
            }else{
                header('HTTP/1.1 404 Character not updated'); 
            }
        }
    }

?>