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
    <link rel="stylesheet" type="text/css" href="../../public/css/admin_viewrequest.css">
</head>
<body>
   <!-- header  -->
   <div class="main-content">
        <header>
            <h2>
                View Requests
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
<nav>
        <ul>
        <li><a class="active" href="#">Pending Donor Test Request</a> </li>
        <li><a href="../../src/php/admin_view_hospital_request.php" > Hospital Matching Request </a></li>
      </ul>
    </nav>
    <div class="cards-2">
            <div class="card-single-2">
                <div class="title">
                    <h3>Pending Donor Test Request</h3>
                </div>
                <table>
                    <tr>
                        <th>Donor Name</th>
                        <th>Nearest City</th>
                        <th>Requested Date</th>
                        <th>More Details</th>
                    </tr>
                    <tr>
                        <td>Amila kumara</td>
                        <td>Nugegoda</td>
                        <td>12/19</td>
                        <!-- <td style="color:#38fa11 ;">Qualified</td> -->
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">Select Hospital</a></td>
                    </tr>
                    <tr>
                        <td>Aruni siriwardena</td>
                        <td>Colombo 07</td>
                        <td>12/19</td>
                        <!-- <td style="color:#fa1111 ;">Disqualified</td> -->
                        <td><a href="../../src/php/admin_select_hospital_2.php" class="btn">Select Hospital</a></td>
                    </tr>
                    <tr>
                        <td>kavinda karunathilaka</td>
                        <td>Anuradhapura</td>
                        <td>12/19</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">Select Hospital</a></td>
                    </tr>
                    <tr>
                        <td>kamala Hansani</td>
                        <td>Kegalle</td>
                        <td>12/19</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">Select Hospital</a></td>
                    </tr>
                    <tr>
                        <td>Kapila kumara</td>
                        <td>Maharagama</td>
                        <td>12/19</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">Select Hospial</a></td>
                    </tr>
                    <tr>
                        <td>Ramani siriwardena</td>
                        <td>Colombo 02</td>
                        <td>12/19</td>
                        <td><a href="../../src/php/admin_select_hospital.php" class="btn">Select Hospital</a></td>
                    </tr>
                </table>
            </div>

</div>
        
    
    
</body>
</html>