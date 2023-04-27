<?php
require_once('admin_sidebar.php');
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=0)
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
    <title>View Donors</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/admin_viewdonor.css">
</head>
<body>
<!-- header -->
    <div class="main-content">
    <div class="header">
            <h2>
                Donor Manage
            </h2>
            <div class="search-wrapper">
                <span class="material-icons">
                    search
                </span>
                <input type="search" placeholder="search here">
            </div>
    
           
    
            
            <div class="box-icon">
                <div class="item">
                    <span class="material-icons">notifications</span>
                </div>
                <div class="item">
                    <span class="material-icons">chat_bubble</span>
                </div>
                
            </div>
            
            <div class="user-wrapper">
            <a href="../../src/php/admin_profile_page.php"> <img src="../../public/images/Xiao_Zhan.jpeg" alt="profile_pictire" width="50px" height="50px" ></a>
                <div> <h4>Welcome! </h4><?php echo $_SESSION['username'];?></div>
            </div>
        </div>
    </div>
    
    <div class="right">
    <main>
<nav>
        <ul>
        <li><a class="active" href="#">Donor Details</a> </li>
        <li><a href="../../src/php/admin_accept_pending_donor.php">Accept Pending Donors</a></li>
      </ul>
    </nav>

  <table class="list">
        <tr>
        <th class="table-head">
      Donor ID
      </th>
      <th class="table-head">
      Donor Name
      </th><th class="table-head">
      Donor Blood Group
      </th><th class="table-head">
      Donor Telephone No.
      </th><th class="table-head">
      Donor Address
      </th>
      <th colspan="2" class="table-head">
      status
      </th>
        </tr>
        <?php 
        $sql="select * from `donor`";
        $result=mysqli_query($connection,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['donor_id'];
                $name=$row['donor_name'];
                $blood=$row['blood_group'];
                $tele=$row['telephone_no'];
                $address=$row['address'];
             echo'<tr>
        <td>'.$id. '</td>
        <td>'.$name. '</td>
        <td>'.$blood. '</td>
        <td>'.$tele. '</td>
        <td>'.$address. '</td>  
        <td><a href="admin_editdonor.php? editid='.$id.'" class="update-btn"><span class="material-icons">edit_square</span></a></td>
        <td><a href="admin_deletedonor.php? deleteid='.$id.'"  class="delete-btn" ><span class="material-icons">delete</span></a></td>
    </tr>';

            }
        }
        
        ?>
      
       </table>
       </main>
    </div>
   

    
        
</body>
</html>