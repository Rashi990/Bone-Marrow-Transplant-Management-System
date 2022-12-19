
<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name'])))
{
    header("Location:donor_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/donor_session.css">
    <link rel="stylesheet" href="../../public/css/donor_sidebar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,500;1,700&display=swap" rel="stylesheet">
    <title>SLBTMS</title>
</head>
<body>
    <!-- sidebar section -->
   
    <div class="sidebar">
        <div class="logo-details">
            <img src="../../public/images/logo.png" class="logo">
        </div>
     <ul class="nav-link">
        <li>
            <a href="../../src/php/donor_clinical_history.php">
                <span class="link_name">Clinical History</span>
            </a>
        </li>
        <li>
            <a href="../../src/php/donor_session.php">
                <span class="link_name">Sessions</span>
            </a>
        </li>
        <li>
            <a href="../../public/html/donor_transplant_request.html">
                <span class="link_name">Request</span>
            </a>
        </li>
        <li>
            <a href="../../src/php/donor_calender.php">
                <span class="link_name">Calender</span>
            </a>
        </li>
            
            <li>
                <a href="../../src/php/home.php">
                    <span class="material-icons">logout</span>
                </a>
            </li>
     </ul>
    </div>
    <!--Header-->


    <div class="main-content">
        <header>
            <h2>
                Clinical History
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
                <img src="../../public/images/donor_image.jpg" alt="profile_pictire" width="50px" height="50px" >
                <div> <h4>Welcome! </h4><?php echo $_SESSION['user_name'];?></div>
            </div>
        </header>
    </div>
    <!-- home section -->
    <div class="container">
        <div class="donor-session-topic">
            Awareness Sessions
        </div>

        <div class="donor-card-details">
            <div class="session-card">
                <div class="donor-session-img">
                    <img class="donor-img" src="../../public/images/1.png">
                </div>
                <div class="donor-session-details">
                    <div class="donor-session-question">
                        What is Bone Marrow Transplant is?
                    </div>
                    <div class="donor-session-address">
                        An Awareness session conducted by Apeksha Hopital, Maharagama
                        <br>
                        Place:Apeksha Hospital,Maharagama.
                        <br>
                        Date: 25 th November 2022
                        <br>
                        Time: 10.00 a.m.
                        <br>
                    </div>
                    <div class="donor-join-now-btn">
                        Are you interested?<a href="#">join</a>
                    </div>
                </div>
            </div>

            <div class="session-card">
                <div class="donor-session-img">
                    <img class="donor-img" src="../../public/images/2.png">
                </div>
                <div class="donor-session-details">
                    <div class="donor-session-question">
                        What is Bone Marrow Transplant is?
                    </div>
                    <div class="donor-session-address">
                        An Awareness session conducted by Apeksha Hopital, Maharagama
                        <br>
                        Place:Apeksha Hospital,Maharagama.
                        <br>
                        Date: 25 th November 2022
                        <br>
                        Time: 10.00 a.m.
                        <br>
                    </div>
                    <div class="donor-join-now-btn">
                        Are you interested?<a href="#">join</a>
                    </div>
                </div>
            </div>

            <div class="session-card">
                <div class="donor-session-img">
                    <img class="donor-img" src="../../public/images/1.png">
                </div>
                <div class="donor-session-details">
                    <div class="donor-session-question">
                        What is Bone Marrow Transplant is?
                    </div>
                    <div class="donor-session-address">
                        An Awareness session conducted by Apeksha Hopital, Maharagama
                        <br>
                        Place:Apeksha Hospital,Maharagama.
                        <br>
                        Date: 25 th November 2022
                        <br>
                        Time: 10.00 a.m.
                    
                    </div>
                    <div class="donor-join-now-btn">
                        Are you interested?<a href="#">join</a>
                    </div>
                </div>
            </div>
        </div>
          

    </div>
</body>
</html>
