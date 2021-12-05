<?php

if(isset ($_SESSION["customer_id"]) && ($_POST["submit"]))
{
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    require_once 'connection.php';
}