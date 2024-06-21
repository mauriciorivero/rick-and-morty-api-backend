<?php

    require_once("../includes/Episode.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'PUT' && isset($_GET["name"]) && isset($_GET["air_date"]) && isset($_GET["episode"]) && isset($_GET["isActive"])){
        Episode::update_episode_by_id($_GET["id"], $_GET["name"], $_GET["air_date"], $_GET["episode"], $_GET["isActive"]);
    }

?>