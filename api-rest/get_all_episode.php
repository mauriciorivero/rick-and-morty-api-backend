<?php

    require_once("../includes/Episode.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        Episode::get_all_episodes();
    }

?>