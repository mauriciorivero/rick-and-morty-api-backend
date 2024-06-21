<?php

    require_once("../includes/EpisodeCharacterTransaction.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'GET' && isset($_GET["ep_id"])) {
        EpisodeCharacterTransaction::get_all_character_by_episode($_GET["ep_id"]);
    }

?>