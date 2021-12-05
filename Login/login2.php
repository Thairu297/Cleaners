<?php

if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'connection.php';
    require_once 'functions.php';

    if( emptyInputLoginEmployee($username, $password) !== false){
        header("location:login_page2.php?error=emptyinput");
        exit();
    }
    if(invalidUsernameEmployee($username ) !== false){
        header("location:login_page2.php?error=invalidUsername");
        exit();
    }

    loginEmployee($con, $username,  $password);
}
else {
    header("location:login_page2.php");
    exit();
}