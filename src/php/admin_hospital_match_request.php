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
    <link rel="stylesheet" type="text/css" href="../../public/css/admin_viewrequest.css">
</head>
<body>
   <!-- header  -->
   <div class="main-content">
        <header>
            <h2>
                Hospital Matching Request
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
        <li><a class="active" href="../../src/php/admin_viewrequest.php">Pending Donor Test Request</a> </li>
        <li><a   href="#" > Hospital Matching Request </a></li>
      </ul>
    </nav>
    <div class="cards-2">
            <div class="card-single-2">
                <div class="title">
                    <h3>Hospital Matching Request</h3>
                </div>
                <table>
                    <tr>
                        <th>Hospital  Name</th>
                        <th>Patients Name</th>
                        <th>Condition</th>
                    </tr>
                    <tr>
                        <td rowspan="3">Apeksha Hospital</td>
                        <td >Malsha Samadhika</td>
                        <td>Critical</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">Select donors</a></td>
                    </tr>
                    <tr>
                    <td >Lalani Karunawathee</td>
                        <td>Critical</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">Select donors</a></td>
                    </tr>
                    <tr>
                        <td >Rishmi Vithanage</td>
                        <td>Critical</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">Select donors</a></td>
                    </tr>

                    <tr>
                        <td rowspan="3">Lanka Hospital</td>
                        <td >Kamal Gunawardhena</td>
                        <td>Non-Critical</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">Select donors</a></td>
                    </tr>
                    <tr>
                    <td >Sunil Perera</td>
                        <td>Non-Critical</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">Select donors</a></td>
                    </tr>
                    <tr>
                        <td>Malani Hansika</td>
                        <td>Non-Critical</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">Select donors</a></td>
                    </tr>
                </table>
            </div>

</div>
        
    
    
</body>
</html>