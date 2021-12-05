<?php
function emptyInputSignup($name, $username ,$email, $phone_number, $password, $confirmcode)
{
    $result;
    if(empty($name) &&  empty($username)&& empty($email) && empty($phone_number) && empty($password) && empty($confirmcode))
    {
        $result = true;
    } else
    {
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
function usernameExists($con, $username)
{
   $sql = "SELECT * FROM employee WHERE employee_username = ? ;";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:employee.php?error=stmtfailed");
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

function emailExists($con, $email)
{
   $sql = "SELECT * FROM employee WHERE employee_email = ? ;";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:employee.php?error=stmtfailed");
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

function createEmployee($con, $name, $username ,$email, $phone_number, $password, $confirmcode)
{
   $sql = "INSERT INTO employee (employee_name, employee_username ,employee_email, employee_phone_number, employee_password) VALUES (?, ?, ?, ?, ? );";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:employee.php?error=stmtfailedagain");
    exit();
   }

   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "sssss", $name, $username ,$email, $phone_number, $hashedPassword);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

   header("location:employee_display.php");
    exit();
}
function updateEmployee($con, $name, $username ,$email, $phone_number, $password, $confirmcode)
{
   $id=$_GET["updateid"];
   $sql = "UPDATE employee set employee_name=?, employee_username=? ,employee_email=?, employee_phone_number=?, employee_password=? WHERE id=$id ";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:employee_update.php?error=stmtfailedagain");
    exit();
   }

   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "sssss", $name, $username  ,$email, $phone_number, $hashedPassword);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

   header("location:employee_display.php");
    exit();
}