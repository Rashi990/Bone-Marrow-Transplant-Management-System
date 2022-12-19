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
    <title>Report</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/admin_generatereport.css">
</head>
<body>
   <!-- header  -->
   <div class="main-content">
        <header>
            <h2>
                Generate Reports
            </h2>
            <div class="search-wrapper">
                <span class='bx bx-search'></span>
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
                <img src="../../public/images/Xiao_Zhan.jpeg" alt="profile_pictire" width="50px" height="50px" >
                <div> <h4>Welcome! </h4><?php echo $_SESSION['user_name'];?></div>
            </div>
        </header>

    <div class="board">

        <!--Section1-->
        <div class="data">
            <form class="form1">

                <div class="sbar">
                    <input type="search" name="search" value="search"> <button>Search</button>
                </div>

                <div class="chart">
                    <h3>2022 Details</h3>
                    <img src="../../public/images/pie.png" class="image">
                    <img src="../../public/images/bar.png" class="image">
                </div>

            </form>
            
        </div>

        <!--Report Types-->
        <div class="reports">
            <div class="types">
                <h3>Select Report Type</h3>
                <a href="../../src/php/hospital_patient_reports.php">Patient Reports</a>
                <a href="../../src/php/hospital_donor_reports.php">Donor Reports</a>
            </div>
        </div>
            
      
    </div>
    
    
    
    </div>
    
    </div>
</body>
</html>