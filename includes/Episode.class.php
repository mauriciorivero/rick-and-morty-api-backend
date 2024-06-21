<?php

    require_once('Database.class.php');

    class Episode{
        
        public static function create_episode($name, $air_date, $episode, $created, $isActive){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("INSERT INTO EPISODE (name, air_date, episode, created, isActive) 
            VALUES (:name, :air_date, :episode, :created, :isActive)");
            $query->bindParam(':name', $name);
            $query->bindParam(':air_date', $air_date);
            $query->bindParam(':episode', $episode);
            $query->bindParam(':created', $created);
            $query->bindParam(':isActive', $isActive);
            if($query->execute()){
                header('HTTP/1.1 201 Episode created successfully'); 
            }else{
                header('HTTP/1.1 404 Episode not created'); 
            }
        }

        public static function get_all_episodes(){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("select * from EPISODE");
            if($query->execute()){
                $result = $query->fetchAll();
                echo json_encode($result);
                header('HTTP/1.1 201 Episodes retrieved'); 
            }else{
                header('HTTP/1.1 404 Episodes can not be retrieved'); 
            }
        }

        public static function delete_episode_by_id($id){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("DELETE FROM EPISODE WHERE id=:id;");
            $query->bindParam(':id', $id);
            if($query->execute()){
                header('HTTP/1.1 201 Episode deleted successfully'); 
            }else{
                header('HTTP/1.1 404 Episode can not be deleted'); 
            }
        }

        public static function update_episode_by_id($id, $name, $air_date, $episode, $isActive){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("UPDATE EPISODE
                                    SET name=:name, air_date=:air_date, episode=:episode, isActive = :isActive
                                    WHERE id = :id;");
            $query->bindParam(':name', $name);
            $query->bindParam(':air_date', $air_date);
            $query->bindParam(':episode', $episode);
            $query->bindParam(':isActive', $isActive);
            $query->bindParam(':id', $id);
            if($query->execute()){
                header('HTTP/1.1 201 Episode updated successfully'); 
            }else{
                header('HTTP/1.1 404 Episode not updated'); 
            }
        }
    }

?>