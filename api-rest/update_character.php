<?php

    require_once("../includes/Character.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'PUT' && isset($_GET["name"]) && isset($_GET["status"]) && isset($_GET["species"]) && isset($_GET["gender"]) && isset($_GET["image"]) && isset($_GET["isActive"])){
        Character::update_character_by_id($_GET["id"], $_GET["name"], $_GET["status"], $_GET["species"], $_GET["gender"], $_GET["image"], $_GET["isActive"]);
    }

?>