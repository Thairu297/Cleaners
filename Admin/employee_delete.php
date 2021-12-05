<?php
include "../Login/connection.php";
if(isset ($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql ="DELETE FROM employee where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header("location:employee_display.php");
        exit();
    }
}
?>