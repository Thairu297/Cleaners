<?php
include_once 'header.php';
include "../Login/connection.php";
?>
<section class="header">
      <div class="container">
        <div class="flex-container1">
          <h2>Administartor</h2>
        </div>
        <div>
        <table class="table" >
 <thead>
  <tr>
    <th class="table-head">ID</th>
    <th class="table-head">Username</th>
  </tr>
</thead>
<tbody>
    <?php 
    $sql = "SELECT * FROM administartor";
    $result = mysqli_query($con, $sql);
    if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row["admin_id"];
        $username = $row["admin_username"];
        echo '<tr>
        <td class="table-data">'.$id.' </td>
        <td class="table-data">'.$username.' </td>
      </tr>
      <div >
<a href="admin_update.php?updateid= '.$id.'" class="join">Update user </a>
</div>
      ';
    }
    }
    
    
    ?>
  </tbody>
</table>
<div >
</div>
        </div>
       
      </div> 
    </section>
  </body>
</html>