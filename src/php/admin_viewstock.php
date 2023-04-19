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
            <span class="material-icons">search</span>
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
                <div> <h4>Welcome! </h4><?php echo $_SESSION['user_name'];?></div>
            </div>
        </header>
    </div>
<div class="right">
<center>
    <main>
<nav>
        <ul>
        <li><a  class ="active">Stock Details</a> </li>
        <li><a  href="../../src/php/admin_todays_arrival.php">Today's Arrivals</a></li>
      </ul>
    </nav>
    <a href="admin_add_stock.php" class="create-btn"> + Add Sample
       </a>

  <table class="list">
        <tr>
        <th class="table-head">
      Sample ID
      </th>
      <th class="table-head">
      Sample Owner ID
      </th>
      <th class="table-head">
      Hospital ID
      </th><th class="table-head">
      Expire Date
      </th><th class="table-head">
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
                $hname=$row['hospital_id'];
                $exdate=$row['expiry_date'];
                $status=$row['status'];
             echo '<tr>
        <td>'.$sid. '</td>
        <td>'.$oid. '</td>
        <td>'.$hname. '</td> 
        <td>'.$exdate. '</td>
        <td>'.$status.'</td>
        <td><a href="#" class="update-btn"> View
        </a></td>
        <td><a href="admin_deletestock.php? deleteid='.$sid.'" class="delete-btn" > <span class="material-icons">
        delete
        </span>
       </a></td>   
    </tr>';

            }
        }
        
        ?>
       </table>
       
       </main>
    
    </div>
    
        
</body>
</html>