<?php

    require_once("../includes/User.class.php");
    if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_GET["username"]) && isset($_GET["pass"])) {
        User::login_user($_GET["username"], $_GET["pass"]);
    }

?>