<?php
require_once('admin_sidebar.php');
?>
<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=0)
{
    header("Location:admin_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>

    <link rel="stylesheet" type="text/css" href="../../public/css/admin_viewtesting.css">
    
</head>
<body>
   <!-- header  -->
   <div class="main-content">
        <header>
            <h2>
                View Test Details
            </h2>
            <div class="search-wrapper">
            <span class="material-icons">search</span>
                <input type="search" placeholder="search here">
            </div>
    
           
    

            <div class="box-icon">
                <div class="item">
                    <span class="material-icons">notifications</span>
                    <span class="not" id="notify">12</span>
                </div>
                




</script>
                <div class="item">
                    <span class="material-icons">chat_bubble</span>
                </div>
                
            </div>
            
            <div class="user-wrapper">
            <a href="../../src/php/admin_profile_page.php"> <img src="../../public/images/Xiao_Zhan.jpeg" alt="profile_pictire" width="50px" height="50px" ></a>
                <div> <h4>Welcome! </h4><?php echo $_SESSION['username'];?></div>
            </div>
</header>
</div>
<div class="right">
    <main>
<!-- <nav>
        <ul>
        <li><a class="active" href="#">Pending Donor Testing</a> </li>
        <li><a href="admin_add_testing_report.php">Add Testing Report Details</a></li>
      </ul>
    </nav> -->
    <div class="cards-2">
            <div class="card-single-2"> 
                <div class="title">
                    <h3>Pending Donor Testing</h3>
                </div>
                <table>
                    <tr>
                        <th>Donor ID</th>
                        <th> Requested Date</th>
                        <th>Hospital ID</th>
                        <th>More Details</th>
                    </tr>
                
                    <?php 
                       $sql1="SELECT pending_donor.`pending_donor_id`,pending_donor.`request_date`,testing.`hospital_id` FROM `pending_donor` INNER JOIN `testing` ON testing.`donor_id` = pending_donor.`pending_donor_id`";

    $result=mysqli_query($connection,$sql1);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['pending_donor_id'];
            $date=$row['request_date'];
            $hid=$row['hospital_id'];
            echo '<tr>
            <td >'.$id. '</td>
            <td>'.$date. ' </td> 
            <td>'.$hid. '</td>
           <td><a href="../../src/php/admin_add_testing_report.php? id='.$id.'" class="btn">Add Test Result</a></td>
           </tr>';
   
       }
   }
   
   ?>
                </table>
            </div>
            </main>
</div>

        
    
    
</body>
</html>