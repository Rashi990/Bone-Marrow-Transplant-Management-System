<?php
require_once('admin_sidebar.php');
?>
<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name'])))
{
    header("Location:admin_login.php");
}
?>

<?php require_once('admin_footer.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Donor</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/admin_viewdonor.css">
</head>
<body>
<!-- header -->
    <div class="main-content">
        <header>
            <h2>
               View Donors
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
    <a href="admin_adddonor.php" class="create-btn"> + Add Donor </a>

  <table>
        <thead>
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
      Operation
      </th>
        </tr>
        </thead>
       <tbody>

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
             echo '<tr>
        <td>'.$id. '</td>
        <td>'.$name. '</td>
        <td>'.$blood. '</td>
        <td>'.$tele. '</td>
        <td>'.$address. '</td>  
        <td><a href="admin_adddonor.php?" class="update-btn"> edit
        </a></button></td>
        <td><a href="admin_deletedonor.php? deleteid='.$id.'"><button class="delete-btn" > delete
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