<?php
include_once '../Admin/header.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $password = $_POST["password"];
    $confirmcode = $_POST["confirmcode"];

    include "../Login/connection.php";
    include "employee_functions.php";

    updateEmployee($con, $name, $username ,$email, $phone_number, $password, $confirmcode);
}
?>
 <section class="header">
      <div class="container1">
        <div class="flex-container1">
          <h2>Update Employee</h2>
        </div>
        <div>
            <form method="post"  class="login-email">
    
            <div class="input-group">
                        <input 
                        type="name"
                        name="name" 
                        placeholder="Full Name"
                        autocomplete="off" 
                        value = <?php

          include "../Login/connection.php";

              $employee_id=$_GET["updateid"];
             $sql = "SELECT * FROM employee WHERE id= $employee_id";
            $result = mysqli_query($con, $sql);
            if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row["id"];
                $name = $row["employee_name"];
                $username = $row["employee_username"];
                $email = $row["employee_email"];
                $phone_number = $row["employee_phone_number"];
            }
            echo $name;
             }
            ?>
                        required />
                    </div>
             <div class="input-group">
                        <input 
                        type="name"
                        name="username" 
                        placeholder="Username"
                        autocomplete="off"
                        value = <?php

include "../Login/connection.php";

    $employee_id=$_GET["updateid"];
   $sql = "SELECT * FROM employee WHERE id= $employee_id";
  $result = mysqli_query($con, $sql);
  if($result){
  while($row = mysqli_fetch_assoc($result)){
      $id = $row["id"];
      $name = $row["employee_name"];
      $username = $row["employee_username"];
      $email = $row["employee_email"];
      $phone_number = $row["employee_phone_number"];
  }
  echo $username;
   }
  ?> 
                        required />
            </div>

                    <div class="input-group">
                        <input
                            type="email"
                            name="email"
                            placeholder="Email"
                            autocomplete="off" 
                            value = <?php

include "../Login/connection.php";

    $employee_id=$_GET["updateid"];
   $sql = "SELECT * FROM employee WHERE id= $employee_id";
  $result = mysqli_query($con, $sql);
  if($result){
  while($row = mysqli_fetch_assoc($result)){
      $id = $row["id"];
      $name = $row["employee_name"];
      $username = $row["employee_username"];
      $email = $row["employee_email"];
      $phone_number = $row["employee_phone_number"];
  }
  echo $email;
   }
  ?> 
                            required
                        />
                    </div>
                    <div class="input-group">
                        <input
                            type="tel"
                            name="phone_number"
                            placeholder="0711111111"
                            pattern= "[0-9]{10}"
                            autocomplete="off" 
                            value =<?php

include "../Login/connection.php";

    $employee_id=$_GET["updateid"];
   $sql = "SELECT * FROM employee WHERE id= $employee_id";
  $result = mysqli_query($con, $sql);
  if($result){
  while($row = mysqli_fetch_assoc($result)){
      $id = $row["id"];
      $name = $row["employee_name"];
      $username = $row["employee_username"];
      $email = $row["employee_email"];
      $phone_number = $row["employee_phone_number"];
  }
  echo $phone_number;
   }
  ?>
                            required
                        />
                    </div>
                    <div class="input-group">
                        <input
                            type="password"
                            name="password"
                            placeholder="Password"
                            autocomplete="off" 
                            required
                        />
                    </div>
                    <div class="input-group">
                        <input
                            type="password"
                            name="confirmcode"
                            placeholder="Confirm password"
                            autocomplete="off" 
                            required
                        />
                    </div>
            <div class="input-group">
               <button type="submit" name="submit" class="button-login">Update</button>
            </div>
            <div >
            <a href="employee_display.php" class="link_home">Back to display </a>
          </div>
            </form>
        </div>
       
      </div> 
    </section>
  </body>
</html>