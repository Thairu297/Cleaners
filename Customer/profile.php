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


       if( isset($_SESSION["customer_id"]))
       {
  
       $customer_id = $_SESSION["customer_id"];
       $query1 = "SELECT customer_name, customer_email, phone_number FROM customers WHERE id = '$customer_id';";
       $query_run = mysqli_query($con, $query1);
       //we expect one thing only
       $row =  mysqli_fetch_assoc($query_run);
       ?>
          <ul>
            <li>Name:<?= $row["customer_name"]?></li> 
            <li>Email:<?= $row["customer_email"]?></li>
            <li>Phone Number:<?= $row["phone_number"] ?></li>
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