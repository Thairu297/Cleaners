<?php
include "../Login/connection.php";
if(isset ($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql ="DELETE FROM customers where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        header("location:customer_display.php");
        exit();
    }
}
?>