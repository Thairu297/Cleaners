<?php
function emptyInputSignup($name, $email,$username , $phone_number, $password, $confirmcode)
{
    $result;
    if(empty($name)&& empty($email) &&  empty($username) && empty($phone_number) && empty($password) && empty($confirmcode))
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
   $sql = "SELECT * FROM managers WHERE manager_username = ? ;";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:manager.php?error=stmtfailedusername");
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
   $sql = "SELECT * FROM managers WHERE manager_email = ? ;";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:manager.php?error=stmtfailedemail");
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

function createManager($con, $name, $username ,$email, $phone_number, $password, $confirmcode)
{
   $sql = "INSERT INTO managers (manager_name, manager_username,manager_email, manager_phone_number, manager_password) VALUES (?, ?, ?, ?, ? );";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:manager.php?error=stmtfailedagain");
    exit();
   }

   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "sssss", $name, $username ,$email, $phone_number, $hashedPassword);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

   header("location:manager_display.php");
    exit();
}
function updateManager($con, $name, $username ,$email, $phone_number, $password, $confirmcode)
{
   $id=$_GET["updateid"];
   $sql = "UPDATE managers set manager_name=?, manager_username=? ,manager_email=?, manager_phone_number=?, manager_password=? WHERE id=$id ";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:manager_update.php?error=stmtfailedagain");
    exit();
   }

   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "sssss", $name, $username  ,$email, $phone_number, $hashedPassword);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

   header("location:manager_display.php");
    exit();
}