<?php
    
include("connection.php");
include("functions.php");

if (isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $password = $_POST["password"];
    $confirmcode = $_POST["confirmcode"];

    require_once 'connection.php';
    require_once 'functions.php';

    if(emptyInputSignup($name, $email, $phone_number, $password, $confirmcode) !== false){
        header("location:signup_page.php?error=emptyinput");
        exit();
    }
    /*if(invalidEmail($email ) !== false){
        header("location:signup.html?error=invalidemail");
        exit();
    }*/
    if(passwordMatch($password, $confirmcode ) !== false){
        header("location:signup_page.php?error=passwordsdontmatch");
        exit();
    }
    if(emailExists($con, $email ) !== false){
        header("location:signup_page.php?error=emailexists");
        exit();
    }
    if(passwordExists($con, $password) !== false){
        header("location:signup_page.php?error=invalidpassword");
        exit();
    }
    
    createCustomer($con, $name, $email, $phone_number, $password, $confirmcode);

}
else {
    header("location:signup_page.php");
    exit();
}

