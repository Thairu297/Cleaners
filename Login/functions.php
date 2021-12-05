<?php
function emptyInputSignup($name, $email, $phone_number, $password, $confirmcode)
{
    $result;
    if(empty($name) && empty($email) && empty($phone_number) && empty($password) && empty($confirmcode))
    {
        $result = true;
    } else
    {
        $result = false;
    }
    return $result;
}
function invalidUsernameManager($username )
{
    $result;
    if (!preg_match("/^[Ma0-9]*$/", $username ))
    {
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}
function invalidUsernameEmployee($username )
{
    $result;
    if (!preg_match("/^[Em0-9]*$/", $username ))
    {
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}
function invalidEmail($email )
{
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}
function passwordMatch($password, $confirmcode )
{
    $result;
    if($password !==$confirmcode)
    {
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}

function emailExists($con, $email)
{
   $sql = "SELECT * FROM customers WHERE customer_email = ? ;";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:signup_page.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "s", $email);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData))
   {
       return $row;
   }
   else
   {
       $result = false;
       return $result;
   }
   mysqli_stmt_close($stmt);
}
function passwordExists($con, $password)
{
   $sql = "SELECT * FROM customers WHERE customer_password = ? ;";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:signup_page.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "s", $password);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData))
   {
       return $row;
   }
   else
   {
       $result = false;
       return $result;
   }
   mysqli_stmt_close($stmt);
}
function usernameExistsEmployee($con, $username)
{
   $sql = "SELECT * FROM employee WHERE employee_username = ? ;";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:login_page2.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "s", $username);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData))
   {
       return $row;
   }
   else
   {
       $result = false;
       return $result;
   }
   mysqli_stmt_close($stmt);
}
function usernameExistsManager($con, $username)
{
   $sql = "SELECT * FROM managers WHERE manager_username = ? ;";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:login_page2.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "s", $username);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData))
   {
       return $row;
   }
   else
   {
       $result = false;
       return $result;
   }
   mysqli_stmt_close($stmt);
}

function usernameExistsAdmin($con, $username)
{
   $sql = "SELECT * FROM administartor WHERE admin_id = 1;";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:login_admin.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "s", $username);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData))
   {
       return $row;
   }
   else
   {
       $result = false;
       return $result;
   }
   mysqli_stmt_close($stmt);
}

function createCustomer($con, $name, $email, $phone_number, $password, $confirmcode)
{
   $sql = "INSERT INTO customers (customer_name, customer_email, phone_number, customer_password) VALUES (?, ?, ?, ? );";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:signup_page.php?error=stmtfailedagain");
    exit();
   }

   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone_number, $hashedPassword);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

   header("location:login_page.php");
    exit();
}


function emptyInputLogin($email, $password)
{
    $result;
    if( empty($email) && empty($password) )
    {
        $result = true;
    } else
    {
        $result = false;
    }
    return $result;
}
function emptyInputLoginEmployee($username, $password)
{
    $result;
    if( empty($username) && empty($password) )
    {
        $result = true;
    } else
    {
        $result = false;
    }
    return $result;
}
function emptyInputLoginManager($username, $password) 
{
    $result;
    if( empty($username) && empty($password) )
    {
        $result = true;
    } else
    {
        $result = false;
    }
    return $result;
}
function emptyInputLoginAdmin($username, $password) 
{
    $result;
    if( empty($username) && empty($password) )
    {
        $result = true;
    } else
    {
        $result = false;
    }
    return $result;
}
function wrongUsernameAdmin($con, $username)
{
   $username = $_POST["username"];
   $sql = "SELECT * FROM administartor WHERE admin_username = '$username' ;";
   $query = mysqli_query($con, $sql);

if($query === false)
{
    $result = true;
} else
{
    $result = false;
}
return $result;

}

function loginCustomer($con, $email, $password)
{
    $emailExists = emailExists($con, $email);

    if($emailExists === false)
    {
    header("location:login_page.php?error=wrongemail");
    exit();
    }
    

    $passwordHashed = $emailExists["customer_password"];
    $checkPassword = password_verify($password, $passwordHashed);

     if ($checkPassword === false)
     {
     header("location:login_page.php?error=wrongpassword");
     exit();  
     }
     else if ($checkPassword === true)
      {
         session_start();
         $_SESSION["customer_id"] = $emailExists["id"];
         $_SESSION["customeremail"] = $emailExists["customer_email"];
         header("location:../Customer/profile.php");
         exit();
     }

}
function loginEmployee($con, $username,  $password)
{
    $usernameExistsEmployee = usernameExistsEmployee($con, $username);

    if($usernameExistsEmployee === false)
    {
    header("location:login_page2.php?error=wrongusername");
    exit();
    }
    

    $passwordHashed = $usernameExistsEmployee["employee_password"];
    $checkPassword = password_verify($password, $passwordHashed);

     if ($checkPassword === false)
     {
     header("location:login_page2.php?error=wrongpassword");
     exit();  
     }
     else if ($checkPassword === true)
      {
         session_start();
         $_SESSION["employee_id"] = $usernameExistsEmployee["id"];
         $_SESSION["employeeusername"] = $usernameExistsEmployee["employee_username"];
         header("location:../Employee/profile.php");
         exit();
     }

}
function loginManager($con, $username,  $password)
{
    $usernameExistsManager = usernameExistsManager($con, $username);

    if($usernameExistsManager === false)
    {
    header("location:loginpage3.php?error=wrongusername");
    exit();
    }
    

    $passwordHashed = $usernameExistsManager["manager_password"];
    $checkPassword = password_verify($password, $passwordHashed);

     if ($checkPassword === false)
     {
     header("location:loginpage3.php?error=wrongpassword");
     exit();  
     }
     else if ($checkPassword === true)
      {
         session_start();
         $_SESSION["manager_id"] = $usernameExistsManager["id"];
         $_SESSION["managerusername"] = $usernameExistsManager["manager_username"];
         header("location:../Manager/profile.php");
         exit();
     }

}
function loginAdmin($con, $username,  $password)
{
    $usernameExistsAdmin = usernameExistsAdmin($con, $username);

    if($usernameExistsAdmin === false)
    {
    header("location:login_admin.php?error=wrongusername");
    exit();
    }
    

    $passwordHashed = $usernameExistsAdmin["admin_password"];
    $checkPassword = password_verify($password, $passwordHashed);

     if ($checkPassword === false)
     {
     header("location:login_admin.php?error=wrongpassword");
     exit();  
     }
     else if ($checkPassword === true)
      {
         session_start();
         $_SESSION["admin_id"] = $usernameExistsAdmin["admin_id"];
         $_SESSION["admin_username"] = $usernameExistsAdmin["admin_username"];
         header("location:../Admin/customer_display.php");
         exit();
     }

}






