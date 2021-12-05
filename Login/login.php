<?php

if(isset($_POST["submit"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once 'connection.php';
    require_once 'functions.php';

    if(emptyInputLogin($email, $password) !== false){
        header("location:login_page.php?error=emptyinput");
        exit();
    }

    loginCustomer($con, $email,  $password);
}
else {
    header("location:login_page.php");
    exit();
}