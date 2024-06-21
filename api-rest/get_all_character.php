<?php

    require_once("../includes/Character.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        Character::get_all_characters();
    }

?>