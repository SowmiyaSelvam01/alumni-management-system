<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["name"]);
    unset($_SESSION["logged_in"]);
    header("Location: index.php");
?>