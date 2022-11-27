<?php
require_once('admin_dashboard.php');
?>
<?php
session_start();

include "../../config/connection.php";
 
?>

<?php require_once('admin_footer.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/admin_viewhospital.css?n=1">
</head>
<body>
    
    
<div class="right">

    <a href="admin_addhospital.php"><button class="create-btn"> + Add Hospital
       </button></a>

  <table class=" table">
        <thead>
        <tr>
        <th class="table-head">
      Hospital ID
      </th>
      <th class="table-head">
      Hospital Name
      </th><th class="table-head">
      Hospital Email
      </th><th class="table-head">
      Hospital Telephone No.
      </th><th class="table-head">
      Hospital Address
      </th>
      <th colspan="2" class="table-head">
      Operation
      </th>
        </tr>
        </thead>
       <tbody>

        <?php 
        $sql="select * from `hospital`";
        $result=mysqli_query($connection,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['hospital_id'];
                $name=$row['hospital_name'];
                $email=$row['email'];
                $tele=$row['telephone_no'];
                $address=$row['address'];
             echo '<tr>
        <td>'.$id. '</td>
        <td>'.$name. '</td>
        <td>'.$email. '</td>
        <td>'.$tele. '</td>
        <td>'.$address. '</td>  
        <td><a href="admin_addhospital.php?"><button class="update-btn"> edit
        </button></a></td>
        <td><a href="admin_deletehospital.php? deleteid='.$id.'"><button class="delete-btn" > delete
       </button></a></td>   
    </tr>';

            }
        }
        
        ?>
        
       </tbody>
      
       </table>
    </div>
    
        
</body>
</html>