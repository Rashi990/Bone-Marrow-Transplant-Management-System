<?php
require_once('admin_sidebar.php');
?>
<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name'])  ))
{
    header("Location:admin_login.php");
}
?>

<!-- <?php require_once('admin_footer.php');?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/admin_viewhospital.css">
</head>
<body>
    <!-- header -->
    <div class="main-content">
        <header>
            <h2>
               View Hospitals
            </h2>
            <div class="search-wrapper">
                <span class='bx bx-search'></span>
                <input type="search" placeholder="search here">
            </div>
    
           
    
            <div class="box-icon">
                <div class="item">
                    <i class='bx bxs-bell'></i>
                </div>
                <div class="item">
                    <i class='bx bxs-conversation'></i>
                </div>
                
            </div>
           
            
            <div class="user-wrapper">
                <img src="../../public/images/Xiao_Zhan.jpeg" alt="profile_pictire" width="50px" height="50px" >
                <div> <h4>Welcome! </h4><?php echo $_SESSION['user_name'];?></div>
            </div>
        </header>
    </div>
<div class="right">

    <a href="admin_addhospital.php" class="create-btn"> + Add Hospital
       </a>

  <table>
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
        <td><a href="admin_addhospital.php?" class="update-btn"> edit
        </a></td>
        <td><a href="admin_deletehospital.php? deleteid='.$id.'" class="delete-btn" > delete
       </a></td>   
    </tr>';

            }
        }
        
        ?>
        
       </tbody>
      
       </table>
    </div>
    
        
</body>
</html>