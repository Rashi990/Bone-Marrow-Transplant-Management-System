<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultant Patient Page</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="left">
            <img src="../../public/images/logo.png" class="logo">

          <div class="tabs">

            <a class="hi" href="consultant_appointments.php">Appointments</a>
            <a class="hi" href="consultant_reports.php">Reports</a>
            <a class="hi" href="consultant_calendar.php">Calendar</a>
            <a class="hi" href="consultant_patient.php">Patient</a>
            <a class="hi-selected">Donor</a>

            <div class="logout">
              <abbr title="Logout">
                <a class="hi" href="consultant_logout.php">
                  <span class="material-symbols-rounded">
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
              <div class="search-bar">
                <span class="material-icons">search</span>
                <input type="search" placeholder="search here">
              </div>
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
              <abbr title="Home">
                <a href="consultant_home.php">
                  <div class="icon">
                    <span class="material-icons">
                      home
                    </span>
                  </div>
                </a>
              </abbr>
              <abbr title="Welcome!">
                <div class="greet">
                  <h3 class="greet-text">Hi, Dr.<?php echo $_SESSION['consultant_name'];?></h3>
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
          </div>
          <div class="rbottom">
            <div id="session">
              <a  class="box" href="consultant_donor_details.php">
                <div class="links-container">
                  <div class="image">
                    <img class="image" src="../../public/images/pat.jpg" alt="Hla Reports">
                  </div>
                  <div class="text">
                    <h3>View Donor Details</h3>
                  </div>
                </div>
              </a>
            </div>
            <div id="session">
              <a class="box" href="../../src/php/consultant_donor_clinical_manage.php">
                <div class="links-container">
                  <div class="image">
                    <img class="image" src="../../public/images/clinical.jpg" alt="Clinical Reports">
                  </div>
                  <div class="text">
                    <h3>Manage Donor Clinical Reports</h3>
                  </div>
                </div>
              </a>
            </div>
            <!--<div id="session">
              <a class="box" href="consultant_calendar.php">
                <div class="links-container">
                  <div class="image">
                    <img class="image" src="../../public/images/cal.jpg" alt="">
                  </div>
                  <div class="text">
                    <h3>View Calender</h3>
                  </div>
                </div>
              </a>
            </div>-->
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
}

<?php
}
?>
