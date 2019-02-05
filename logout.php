<?php
    session_start();

    unset($_SESSION["logged_in"]);
    header("Location: http://localhost/travelagencyPHP/index.php");
?>