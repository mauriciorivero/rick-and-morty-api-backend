<?php

    require_once("../includes/Episode.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_GET["name"]) && isset($_GET["air_date"]) && isset($_GET["episode"]) && isset($_GET["created"]) && isset($_GET["isActive"])){
        Episode::create_episode($_GET["name"], $_GET["air_date"], $_GET["episode"], $_GET["created"], $_GET["isActive"]);
    }

?>