<?php
include_once '../Admin/header.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username= $_POST["username"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $password = $_POST["password"];
    $confirmcode = $_POST["confirmcode"];

    include "../Login/connection.php";
    include "employee_functions.php";

    if(emptyInputSignup($name, $username ,$email, $phone_number, $password, $confirmcode) !== false){
        header("location:employee.php?error=emptyinput");
        exit();
    }
    /*if(invalidEmail($email ) !== false){
        header("location:signup.html?error=invalidemail");
        exit();
    }*/
    if(passwordMatch($password, $confirmcode ) !== false){
        header("location:employee.php?error=passwordsdontmatch");
        exit();
    }
    if(usernameExists($con, $username ) !== false){
        header("location:employee.php?error=usernameexists");
        exit();
    }
    if(emailExists($con, $email ) !== false){
        header("location:employee.php?error=emailexists");
        exit();
    }
    if(invalidUsernameEmployee($username ) !== false){
        header("location:employee.php?error=invalidUsername");
        exit();
    }

    createEmployee($con, $name, $username ,$email, $phone_number, $password, $confirmcode);
}
?>
 <section class="header">
      <div class="container1">
        <div class="flex-container1">
          <h2>Add Employee</h2>
        </div>
        <div>
            <form method="post"  class="login-email">
    
            <div class="input-group">
                        <input 
                        type="name"
                        name="name" 
                        placeholder="Full Name"
                        autocomplete="off" 
                        required />
                    </div>
                    <div class="input-group">
                        <input 
                        type="name"
                        name="username" 
                        placeholder="Username"
                        autocomplete="off" 
                        required />
                    </div>
                    <div class="input-group">
                        <input
                            type="email"
                            name="email"
                            placeholder="Email"
                            autocomplete="off" 
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
               <button type="submit" name="submit" class="button-login">Submit</button>
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