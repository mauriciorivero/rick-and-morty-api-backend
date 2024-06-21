<?php

    require_once('Database.class.php');

    class EpisodeCharacterTransaction{
        
        public static function asign_relation($id_episode, $id_character){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("INSERT INTO EPISODE_CHARACTER_RELATION (EPISODE_id, RM_Character_id) 
            VALUES (:id_episode, :id_character)");
            $query->bindParam(':id_episode', $id_episode);
            $query->bindParam(':id_character', $id_character);
            if($query->execute()){
                header('HTTP/1.1 201 relationshop between episode and character created successfully'); 
            }else{
                header('HTTP/1.1 404 relationshop between episode and character not created'); 
            }
        }

        public static function get_all_character_by_episode($ep_id){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("SELECT ch.id, ch.name, ch.status, ch.species, ch.gender, ch.image
                                    FROM RM_CHARACTER as ch,  EPISODE as ep, EPISODE_CHARACTER_RELATION as rel
                                    WHERE ch.id = rel.RM_CHARACTER_id
                                    AND ep.id = rel.EPISODE_id
                                    AND ep.id = :ep_id");
            $query->bindParam(':ep_id', $ep_id);
            if($query->execute()){
                $result = $query->fetchAll();
                echo json_encode($result);
                header('HTTP/1.1 201 all character for episode retrieved'); 
            }else{
                header('HTTP/1.1 404 character for episode can not be retrieved'); 
            }
        }

        public static function get_all_episode_by_character($ch_id){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("SELECT ep.id, ep.name, ep.air_date, ep.episode
                                    FROM RM_CHARACTER as ch,  EPISODE as ep, EPISODE_CHARACTER_RELATION as rel
                                    WHERE ep.id = rel.EPISODE_id
                                    AND ch.id = rel.RM_CHARACTER_id
                                    AND ch.id = :ch_id");
            $query->bindParam(':ch_id', $ch_id);
            if($query->execute()){
                $result = $query->fetchAll();
                echo json_encode($result);
                header('HTTP/1.1 201 all episodes for character retrieved'); 
            }else{
                header('HTTP/1.1 404 episodes for character can not be retrieved'); 
            }
        }

        public static function delete_relationship_in_between($ep_id, $ch_id){
            $database = NEW Database();
            $conn = $database -> get_connection();
            $query = $conn->prepare("DELETE FROM EPISODE_CHARACTER_RELATION 
                                    WHERE EPISODE_id=:ep_id;
                                    and RM_CHARACTER_id =:ch_id");
            $query->bindParam(':ep_id', $ep_id);
            $query->bindParam(':ch_id', $ch_id);
            if($query->execute()){
                header('HTTP/1.1 201 relationship between episode and character deleted successfully'); 
            }else{
                header('HTTP/1.1 404 relationship between episode and character not deleted'); 
            }
        }
    }

?>