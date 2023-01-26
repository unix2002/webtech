<?php
    session_start();
    session_unset();
    session_destroy();
    // include_once "header.php";
    // $_SESSION['loggedin'] = false;
    header("Location: login.php");
    exit();
?>
