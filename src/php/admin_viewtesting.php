<?php
require_once('admin_sidebar.php');
?>
<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) ))
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
                View Test
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
    <main>
<nav>
        <ul>
        <li><a class="active" href="#">Pending Donor Testing</a> </li>
        <li><a href="admin_add_testing_report.php">Add Testing Report Details</a></li>
      </ul>
    </nav>
    <div class="cards-2">
            <div class="card-single-2"> 
                <div class="title">
                    <h3>Pending Donor Testing</h3>
                </div>
                <table>
                    <tr>
                        <th>Donor ID</th>
                        <th> Sample ID</th>
                        <th>Requested Date</th>
                        <th>More Details</th>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>004</td>
                        <td>12/19</td>
                        <!-- <td style="color:#38fa11 ;">Qualified</td> -->
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">View More</a></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>005</td>
                        <td>12/19</td>
                        <!-- <td style="color:#fa1111 ;">Disqualified</td> -->
                        <td><a href="../../src/php/admin_select_hospital_2.php" class="btn">View More</a></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>006</td>
                        <td>006</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">View More</a></td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>007</td>
                        <td>12/19</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">View More</a></td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>008</td>
                        <td>12/19</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">View More</a></td>
                    </tr>
                    <tr>
                        <td>006</td>
                        <td>009</td>
                        <td>12/19</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">View More</a></td>
                    </tr>
                </table>
            </div>
            </main>
</div>

        
    
    
</body>
</html>