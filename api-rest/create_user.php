<?php

    require_once("../includes/User.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_GET["name"]) && isset($_GET["lastname"]) && isset($_GET["username"]) && isset($_GET["pass"])){
        User::create_user($_GET["name"], $_GET["lastname"], $_GET["username"], $_GET["pass"]);
    }

?>