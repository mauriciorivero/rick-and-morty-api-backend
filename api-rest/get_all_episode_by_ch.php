<?php

    require_once("../includes/EpisodeCharacterTransaction.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'GET' && isset($_GET["ch_id"])) {
        EpisodeCharacterTransaction::get_all_episode_by_character($_GET["ch_id"]);
    }

?>