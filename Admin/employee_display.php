<?php
include_once 'header.php';
include "../Login/connection.php";
?>
<section class="header">
      <div class="container">
        <div class="flex-container1">
          <h2>Employee</h2>
        </div>
        <div>
        <table class="table" >
 <thead>
  <tr>
    <th class="table-head">ID</th>
    <th class="table-head">Name</th>
    <th class="table-head">Username</th>
    <th class="table-head">Email</th>
    <th class="table-head">Phone Number</th>
    <th class="table-head">Operations</th>
  </tr>
</thead>
<tbody>
    <?php 
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($con, $sql);
    if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row["id"];
        $name = $row["employee_name"];
        $username = $row["employee_username"];
        $email = $row["employee_email"];
        $phone_number = $row["employee_phone_number"];
        echo '<tr>
        <td class="table-data">'.$id.' </td>
        <td class="table-data">'.$name.' </td>
        <td class="table-data">'.$username.' </td>
        <td class="table-data">'.$email.'</td>
        <td class="table-data">'.$phone_number.'</td>
        <td>
       <a href="employee_update.php?updateid='.$id.'" class="join1">Update</a>
       <a href="employee_delete.php?deleteid='.$id.'" class="join1">Delete</a>
    </td>
      </tr>';
    }
    }
    
    
    ?>
  </tbody>
</table>
<div >
<a href="employee.php" class="join">Add User </a>
</div>
        </div>
       
      </div> 
    </section>
  </body>
</html>