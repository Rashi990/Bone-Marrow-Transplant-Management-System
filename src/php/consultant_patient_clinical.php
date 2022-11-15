<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient Clinical Page</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient_clinical.css?v=2">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="rtop">
          <div class="empty">
            <h1>Patient Clinical Details</h1>
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
      </div>
      <div class="middle">
        <div class="rbottom">

          <div id="session">
            <a  class="box" href="consultant_patient_details.html">
              <div class="links-container">
                <div class="image">
                  <img class="image" src="../../public/images/pat.jpg" alt="Hla Reports">
                </div>
                <div class="text">
                  <h3>View Patient Details</h3>
                </div>
              </div>
            </a>
          </div>

          <div id="session">
            <a class="box" href="../../src/php/consultant_patient_clinical_manage_html.php">
              <div class="links-container">
                <div class="image">
                  <img class="image" src="../../public/images/clinical.jpg" alt="Clinical Reports">
                </div>
                <div class="text">
                  <h3>Manage Patient Clinical Reports</h3>
                </div>
              </div>
            </a>
          </div>

          <div id="session">
            <a class="box" href="consultant_calender.html">
              <div class="links-container">
                <div class="image">
                  <img class="image" src="../../public/images/cal.jpg" alt="">
                </div>
                <div class="text">
                  <h3>View Calender</h3>
                </div>
              </div>
            </a>
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
