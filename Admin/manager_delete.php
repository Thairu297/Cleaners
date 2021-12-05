<?php
include "../Login/connection.php";
if(isset ($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql ="DELETE FROM managers where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header("location:manager_display.php");
        exit();
    }
}
?>