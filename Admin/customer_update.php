<?php
include_once '../Admin/header.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $password = $_POST["password"];
    $confirmcode = $_POST["confirmcode"];

    include "../Login/connection.php";
    include "customer_functions.php";

    updateCustomer($con, $name, $email, $phone_number, $password, $confirmcode);
    
}
?>
 <section class="header">
      <div class="container1">
        <div class="flex-container1">
          <h2>Update Customer</h2>
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

                        $customer_id=$_GET["updateid"];
                        $sql = "SELECT * FROM customers WHERE id= $customer_id";
                        $result = mysqli_query($con, $sql);
                        if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row["id"];
                            $name = $row["customer_name"];
                            $email = $row["customer_email"];
                            $phone_number = $row["phone_number"];
                        }
                        echo $name;
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

                        $customer_id=$_GET["updateid"];
                        $sql = "SELECT * FROM customers WHERE id= $customer_id";
                        $result = mysqli_query($con, $sql);
                        if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row["id"];
                            $name = $row["customer_name"];
                            $email = $row["customer_email"];
                            $phone_number = $row["phone_number"];
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
                            value = <?php

                        include "../Login/connection.php";

                        $customer_id=$_GET["updateid"];
                        $sql = "SELECT * FROM customers WHERE id= $customer_id";
                        $result = mysqli_query($con, $sql);
                        if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row["id"];
                            $name = $row["customer_name"];
                            $email = $row["customer_email"];
                            $phone_number = $row["phone_number"];
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
            <a href="customer_display.php" class="link_home">Back to display </a>
          </div>
            </form>
        </div>
       
      </div> 
    </section>
  </body>
</html>