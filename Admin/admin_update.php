<?php
include_once '../Admin/header.php';

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmcode = $_POST["confirmcode"];

    include "../Login/connection.php";
    include "admin_functions.php";

    updateAdmin($con, $username , $password, $confirmcode);
}
?>
 <section class="header">
      <div class="container1">
        <div class="flex-container1">
          <h2>Update Admin</h2>
        </div>
        <div>
            <form method="post"  class="login-email">
    
             <div class="input-group">
                        <input 
                        type="name"
                        name="username" 
                        placeholder="Username"
                        autocomplete="off"
                        value =<?php

include "../Login/connection.php";

    $admin_id=$_GET["updateid"];
   $sql = "SELECT * FROM administartor WHERE admin_id= $admin_id";
  $result = mysqli_query($con, $sql);
  if($result){
  while($row = mysqli_fetch_assoc($result)){
    $id = $row["admin_id"];
    $username = $row["admin_username"];
  }
  echo $username;
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
            <a href="admin_display.php" class="link_home">Back to display </a>
          </div>
            </form>
        </div>
       
      </div> 
    </section>
  </body>
</html>