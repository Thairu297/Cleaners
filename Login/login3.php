<?php

if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'connection.php';
    require_once 'functions.php';

    if(emptyInputLoginManager($username, $password) !== false){
        header("location:loginpage3.php?error=emptyinput");
        exit();
    }
    if(invalidUsernameManager($username ) !== false){
        header("location:loginpage3.php?error=invalidUsername");
        exit();
    }

    loginManager($con, $username,  $password);
}
else {
    header("location:loginpage3.php");
    exit();
}