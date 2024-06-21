<?php

    require_once("../includes/Character.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'DELETE' && isset($_GET["id"]) ){
        Character::delete_character_by_id($_GET["id"]);
    }

?>