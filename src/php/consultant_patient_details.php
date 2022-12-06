<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
{
include "../../config/connection.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient Details</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient_details.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="rtop">
          <div class="empty">
            <p>Patient Details</p>
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
            <abbr title="Logout">
              <a href="consultant_login.php">
                <div class="icon">
                  <span class="material-icons">
                    logout
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
      </div>
      <div class="middle">
          <?php include('../../public/html/consultant_patient_details.html'); ?>
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
