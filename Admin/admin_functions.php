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
function usernameExists($con, $username)
{
   $sql = "SELECT * FROM administartor WHERE admin_username = ? ;";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:admin.php?error=stmtfailed");
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
   $sql = "SELECT * FROM administartor WHERE admin_email = ? ;";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:admin.php?error=stmtfailed");
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

function createAdmin($con, $name ,$username ,$email, $phone_number, $password, $confirmcode)
{
   $sql = "INSERT INTO administartor ( admin_name ,admin_username ,admin_email ,admin_phone_number , admin_password) VALUES (?, ?, ?, ?, ? );";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:admin.php?error=stmtfailedagain");
    exit();
   }

   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "sssss",$name ,$username ,$email, $phone_number, $hashedPassword);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

   header("location:admin_display.php");
    exit();
}
function updateAdmin($con, $username , $password, $confirmcode)
{
   $id=$_GET["updateid"];
   $sql = "UPDATE administartor set admin_username=? , admin_password=? WHERE admin_id=$id ";
   $stmt = mysqli_stmt_init($con);

   if (!mysqli_stmt_prepare($stmt, $sql))
   {
    header("location:admin_update.php?error=stmtfailedagain");
    exit();
   }

   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

   header("location:admin_display.php");
    exit();
}