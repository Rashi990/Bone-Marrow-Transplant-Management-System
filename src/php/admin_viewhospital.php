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
        <div class="header">
        <h2>
               View Hospitals
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
        </div>
    </div>
<div class="right">
    <main>
<div class="button">
<a href="admin_addhospital.php" class="create-btn"> + Add Hospital
       </a>
</div>
    

  <table  class="list">
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
                // $uname=$row['user_name'];
                // $password=$row['password'];
             echo '<tr>
        <td>'.$id. '</td>
        <td>'.$name. '</td>
        <td>'.$email. '</td>
        <td>'.$tele. '</td>
        <td>'.$address. '</td> 

        <td><a href="admin_edithospital.php? editid='.$id.'" class="update-btn"><span class="material-icons">edit_square</span></a></td>
        <td><a href="admin_deletehospital.php? deleteid='.$id.'" class="delete-btn" ><span class="material-icons">
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