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


       if( isset($_SESSION["manager_id"]))
       {
  
       $manager_id = $_SESSION["manager_id"];
       $query1 = "SELECT manager_name, manager_email,manager_username, manager_phone_number FROM managers WHERE id = '$manager_id';";
       $query_run = mysqli_query($con, $query1);
       //we expect one thing only
       $row =  mysqli_fetch_assoc($query_run);
       ?>
          <ul>
            <li>Name:<?= $row["manager_name"]?></li> 
            <li>Email:<?= $row["manager_email"]?></li>
            <li>Phone Number:<?= $row["manager_phone_number"] ?></li>
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