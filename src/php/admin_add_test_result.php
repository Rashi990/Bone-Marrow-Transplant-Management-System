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
    <title>Testing</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/admin_viewrequest.css">
</head>
<body>
   <!-- header  -->
   <div class="main-content">
        <header>
            <h2>
                View HLA Non Added Donors
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
                <div> <h4>Welcome! </h4><?php echo $_SESSION['username'];?></div>
            </div>
</header>
</div>
<div class="right">
<nav>
        <ul>
        <li><a class="active" href="admin_viewtesting.php">Tested HLA Details</a> </li>
        <li><a href="admin_add_test_result.php">Check HLA Non Added Donors</a></li>
      </ul>
    </nav>
    <div class="cards-2">
            <div class="card-single-2">
                <div class="title">
                    <h3>checked HLA Non Added Donors</h3>
                </div>
                <table>
                    <tr>
                        <th>Donor id</th>
                        <th>Donor Name</th>
                        <th>Operation</th>
                    </tr>
                    <?php 
                        $sql="SELECT donor_id,donor_name FROM donor WHERE donor_id NOT IN (SELECT donor_id FROM donor_hla_details)";

    $result=mysqli_query($connection,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['donor_id'];
            $name=$row['donor_name'];
         echo '<tr>
         <td >'.$id. '</td>
         <td>'.$name. ' </td> 
        <td><a href="../../src/php/admin_add_testing_report.php? id='.$id.'" class="btn">Add HLA details</a></td>
        </tr>';

    }
}

?>
                </table>
            </div>

</div>
</body>
</html>