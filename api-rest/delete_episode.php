<?php

    require_once("../includes/Episode.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'DELETE' && isset($_GET["id"]) ){
        Episode::delete_episode_by_id($_GET["id"]);
    }

?>