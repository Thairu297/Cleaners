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
/*function invalidEmail($email )
{
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}*/
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
    header("location:customer.php?error=stmtfailed");
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

function createCustomer($con, $name, $email, $phone_number, $password, $confirmcode)
{
   $sql = "INSERT INTO customers (customer_name, customer_email, phone_number, customer_password) VALUES (?, ?, ?, ? );";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:customer.php?error=stmtfailedagain");
    exit();
   }

   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone_number, $hashedPassword);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

   header("location:customer_display.php");
    exit();
}
function updateCustomer($con, $name, $email, $phone_number, $password, $confirmcode)
{
   $id=$_GET["updateid"];
   $sql = "UPDATE customers set customer_name=?, customer_email=?, phone_number=?, customer_password=? WHERE id=$id ";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:customer_update.php?error=stmtfailedagain");
    exit();
   }

   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone_number, $hashedPassword);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

   header("location:customer_display.php");
    exit();
}

