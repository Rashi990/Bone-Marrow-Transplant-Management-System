<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['clinician_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clinician Donor Page</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/clinician_donor.css?v=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  


  <link rel="stylesheet" href="../../public/css/clinician_sidebar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,500;1,700&display=swap" rel="stylesheet">
    <title>SLBTMS</title>
</head>
<body>
    <!-- sidebar section -->
   <!--
    <div class="sidebar">
        <div class="logo-details">
            <img src="../../public/images/logo.png" class="logo">
        </div>
     <ul class="nav-link">
        <li>
            <a href="../../src/php/donor_clinical_history.php">
                <span class="link_name">Requests</span>
            </a>
        </li>
        <li>
            <a href="../../src/php/donor_session.php">
                <span class="link_name">Calender</span>
            </a>
        </li>
        <li>
            <a href="../../public/html/donor_transplant_request.html">
                <span class="link_name">Patient</span>
            </a>
        </li>
        <li>
            <a href="../../src/php/donor_calender.php">
                <span class="link_name">Donor</span>
            </a>
        </li>
        <li>
            <a href="../../src/php/donor_calender.php">
                <span class="link_name">Match</span>
            </a>
        </li>
            
            
            <li>
                <a href="../../src/php/home.php">
                    <span class="material-icons">logout</span>
                </a>
            </li>
     </ul>
    </div>-->
    <!--Header-->


    <div class="main-content">
        <header>
            <h2>
                Donor
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













































   <!-- <div class="hero">
      <div class="top">
        <div class="left">
            <img src="../../public/images/logo.png" class="logo">

          <div class="tabs">

            <a class="hi" href="clinician_requests.php">Requests</a>
            <a class="hi" href="clinician_calendar.php">Calendar</a>
            <a class="hi" href="clinician_patient.php">Patient</a>
            <a class="hi-selected">Donor</a>
            <a class="hi" href="clinician_reports.php">Match</a>

            <div class="logout">
              <abbr title="Logout">
                <a class="hi" href="consultant_login.php">
                  <span class="material-icons">
                    logout
                  </span>
                </a>
              </abbr>
            </div>

          </div>
        </div>
        <div class="right">
          <div class="rtop">
            <div class="empty">
            </div>
            <div class="profile">
              <abbr title="notifications">
                <a href="../../public/html/consultant_notifications.html">
                  <div class="icon">
                    <span class="material-icons">
                      notifications
                    </span>
                  </div>
                </a>
              </abbr>
              <abbr title="messages">
                <a href="../../public/html/consultant_messages.html">
                  <div class="icon">
                    <span class="material-icons">
                      chat_bubble
                    </span>
                  </div>
                </a>
              </abbr>
              <abbr title="Welcome!">
                <div class="greet">
                  <h3 class="greet-text">Hi, Dr.<?php echo $_SESSION['clinician_name'];?></h3>
                </div>
              </abbr>
              <abbr title="Profile">
                <a href="../../public/html/consultant_profile.html">
                  <div class="pp">
                    <span class="material-icons">
                      account_circle
                    </span>
                  </div>
                </a>
              </abbr>
            </div>
          </div>-->
          <div class="rbottom">
            <div class="session">
                <a  class="box" href="../../src/php/clinician_view_donor_hla.php">
                  <div class="box">
                    <div class="image">
                      <img class="image" src="../../public/images/hla.jpg" alt="Hla Reports">
                    </div>
                    <div class="text">
                      <h3>View Donor HLA </h3>
                    </div>
                  </div>
                </a>
                <div class="description">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <button type="button" name="button">Read More</button>
                </div>
            </div>
            <div class="session">
                <a class="box" href="consultant_patient_clinical.php">
                  <div class="links-container">
                    <div class="image">
                      <img class="image" src="../../public/images/clinical.jpg" alt="Clinical Reports">
                    </div>
                    <div class="text">
                      <h3>Manage Patient Clinical Reports</h3>
                    </div>
                  </div>
                </a>
                <div class="description">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <button type="button" name="button">Read More</button>
                </div>
              </div>
            <div class="session">
                <a class="box" href="../../public/html/consultant_patient_history.html">
                  <div class="links-container">
                    <div class="image">
                      <img class="image" src="../../public/images/history.jpg" alt="">
                    </div>
                    <div class="text">
                      <h3>View Patient History</h3>
                    </div>
                  </div>
                </a>
                <div class="description">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <button type="button" name="button">Read More</button>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="bottom-input">
          <span>© 2022 SLBMTMS. All rights reserved.</span>
        </div>
        <div class="bottom-input">
          <span>Terms and conditions</span>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
}
?>
