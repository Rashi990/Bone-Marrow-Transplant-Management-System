<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultant Home Page</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="left">
            <img src="../../public/images/logo.png" class="logo">

          <div class="tabs">

            <a class="hi" href="consultant_appointments.php">Appointments</a>
            <a class="hi" href="consultant_reports.php">Reports</a>
            <a class="hi" href="consultant_calender.php">Calender</a>
            <a class="hi-selected" href="consultant_patient.html">Patient</a>
            <a class="hi" href="consultant_donor.php">Donor</a>

            <div class="logout">
              <abbr title="Logout">
                <a class="hi" href="consultant_login.php">
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
              <h1>Patient</h1>
            </div>
            <div class="profile">
              <abbr title="notifications"><a href="../../public/html/consultant_notifications.html">
                <div class="icon">
                  <span class="material-symbols-outlined" style="font-size:35px;">
                    notifications
                  </span>
                </div>
              </a></abbr>
              <abbr title="messages"><a href="../../public/html/consultant_messages.html">
                <div class="icon">
                  <span class="material-symbols-outlined" style="font-size:35px;">
                    message
                  </span>
                </div>
              </a></abbr>
              <abbr title="messages"><a href="consultant_home.php">
                <div class="icon">
                  <span class="material-symbols-outlined" style="font-size:35px;">
                    home
                  </span>
                </div>
              </a></abbr>
                <abbr title="Welcome!"><div class="greet">
                  <h3 class="greet-text">Hi, Dr.<?php echo $_SESSION['consultant_name'];?></h3>
                </div></abbr>
              <abbr title="Profile"><a href="../../public/html/consultant_profile.html">
                <div class="pp">
                  <span class="material-symbols-outlined" style="font-size:35px;">
                    account_circle
                  </span>
                </div>
              </a></abbr>
            </div>
          </div>

          <div class="scroll">

            <div class="rbottom">

              <div id="session">
                <a  class="box" href="../../public/html/consultant_patient_hla.html">
                  <div class="links-container">
                    <div class="image">
                      <img class="image" src="../../public/images/hla.jpg" alt="Hla Reports">
                    </div>
                    <div class="text">
                      <h3>View Patient HLA Reports</h3>
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

              <div id="session">
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

              <div id="session">
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
      </div>

      <!--Bottom Part-->
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
