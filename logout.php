<?php

include_once './php/config.php';

if(isset($_SESSION["username"]) && $_SESSION["loggedin"] === true){
    session_destroy();
    header("location: login.php");
    exit;
}