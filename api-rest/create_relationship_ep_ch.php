<?php

    require_once("../includes/EpisodeCharacterTransaction.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_GET["id_episode"]) && isset($_GET["id_character"])){
        EpisodeCharacterTransaction::asign_relation($_GET["id_episode"], $_GET["id_character"]);
    }

?>