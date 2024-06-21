<?php

    require_once("../includes/Character.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_GET["name"]) && isset($_GET["status"]) && isset($_GET["species"]) && isset($_GET["gender"]) && isset($_GET["image"]) && isset($_GET["created"]) && isset($_GET["isActive"])){
        Character::create_character($_GET["name"], $_GET["status"], $_GET["species"], $_GET["gender"], $_GET["image"], $_GET["created"], $_GET["isActive"]);
    }

?>