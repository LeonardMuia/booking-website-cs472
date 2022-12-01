<?php

// Check if the user is already logged in, if yes then redirect them to my-account

if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}