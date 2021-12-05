<?php

if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'connection.php';
    require_once 'functions.php';

    if(emptyInputLoginAdmin($username, $password) !== false){
        header("location:login_admin.php?error=emptyinput");
        exit();
    }
    if(wrongUsernameAdmin($con, $username) !== false){
        header("location:login_admin.php?error=wrongusername");
        exit();
    }

    loginAdmin($con, $username,  $password);
}
else {
    header("location:login_admin.php");
    exit();
}