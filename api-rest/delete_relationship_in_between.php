<?php

    require_once("../includes/EpisodeCharacterTransaction.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'DELETE' && isset($_GET["ep_id"]) && isset($_GET["ch_id"]) ){
        EpisodeCharacterTransaction::delete_relationship_in_between($_GET["ep_id"], $_GET["ch_id"]);
    }

?>