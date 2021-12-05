<?php
include_once 'header.php';
?>
 <section class="header">
 <div class="container">
        <div class="flex-container1">
          <h2>Welcome</h2>
        </div>
       <?php
       include_once '../Login/connection.php';
       include_once '../Login/functions.php';


       if( isset($_SESSION["employee_id"]))
       {
  
       $employee_id = $_SESSION["employee_id"];
       $query1 = "SELECT employee_name, employee_name, employee_email, employee_phone_number FROM employee WHERE id = '$employee_id';";
       $query_run = mysqli_query($con, $query1);
       //we expect one thing only
       $row =  mysqli_fetch_assoc($query_run);
       ?>
          <ul>
            <li>Name:<?= $row["employee_name"]?></li> 
            <li>Email:<?= $row["employee_email"]?></li>
            <li>Phone Number:<?= $row["employee_phone_number"] ?></li>
          </ul>
          <?php

       }
     ?>
  <?php
  mysqli_close($con);
  ?>
    </section>
  </body>
</html>