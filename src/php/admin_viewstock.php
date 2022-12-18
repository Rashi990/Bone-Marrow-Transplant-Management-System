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
    <link rel="stylesheet" type="text/css" href="../../public/css/admin_viewstock.css">
</head>
<body>
    <!-- header -->
    <div class="main-content">
        <header>
            <h2>
               Stock Details
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

    <a href="admin_addsample.php" class="create-btn"> + Add Sample
       </a>

  <table class="list">
        <tr>
        <th class="table-head">
      Sample ID
      </th>
      <th class="table-head">
      Sample owner ID
      </th><th class="table-head">
      Stored date
      </th><th class="table-head">
      Expire Date
      </th><th class="table-head">
      Hospital Name
      </th>
      <th class="table-head">
      status
      </th>
      <th colspan="2" class="table-head">
      Operation
      </th>
        </tr>
        <?php 
        $sql="select * from `bloodbank_stock`";
        $result=mysqli_query($connection,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $sid=$row['sample_bid'];
                $oid=$row['sample_owner_id'];
                $mdate=$row['stored_date'];
                $exdate=$row['expiry_date'];
                $hname=$row['hospital_id'];
                $status=$row['status'];
             echo '<tr>
        <td>'.$sid. '</td>
        <td>'.$oid. '</td>
        <td>'.$mdate. '</td>
        <td>'.$exdate. '</td>
        <td>'.$hname. '</td> 
        <td>'.$status.'</td>
        <td><a href="admin_addstock.php?" class="update-btn"> edit
        </a></td>
        <td><a href="admin_deletestock.php? deleteid='.$sid.'" class="delete-btn" > delete
       </a></td>   
    </tr>';

            }
        }
        
        ?>
       </table>
    </div>
    
        
</body>
</html>