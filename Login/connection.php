<?php
$serverName = "localhost";
$dBUser = "root";
$dBPassword = "";
$dBName = "tamani_cleaners";

$con = mysqli_connect($serverName, $dBUser, $dBPassword, $dBName );

if (!$con)
 {
     die("Connection Failed: " . mysqli_connect_error());
 }
