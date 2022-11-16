<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['clinician_name']) && isset($_SESSION['image']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clinician Home Page</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/clinician_home.css?v=2">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="left">
            <img src="../../public/images/logo.png" class="logo">

          <div class="tabs">

            <a class="hi" href="clinician_requests.php">Requests</a>
            <a class="hi" href="clinician_calender.php">Calender</a>
            <a class="hi" href="clinician_patient.php">Patient</a>
            <a class="hi" href="clinician_donor.php">Donor</a>
            <a class="hi" href="clinician_match.php">Match</a>

            <div class="logout">
              <abbr title="Logout">
                <a class="hi" href="clinician_login.php">
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
            </div>
            <div class="profile">
              <abbr title="notifications"><a href="../../public/html/clinician_notifications.html">
                <div class="icon">
                  <span class="material-symbols-outlined" style="font-size:35px;">
                    notifications
                  </span>
                </div>
              </a></abbr>
              <abbr title="messages"><a href="../../public/html/clinician_messages.html">
                <div class="icon">
                  <span class="material-symbols-outlined" style="font-size:35px;">
                    message
                  </span>
                </div>
              </a></abbr>
                <abbr title="Welcome!"><div class="greet">
                  <h3 class="greet-text">Hi, Dr.<?php echo $_SESSION['clinician_name'];?></h3>
                </div></abbr>
              <abbr title="Profile"><a href="../../public/html/clinician_profile.html">
                <div class="pp">
                  <span class="material-symbols-outlined" style="font-size:35px;">
                    account_circle
                  </span>
                </div>
              </a></abbr>
            </div>
          </div>
          <div class="rbottom">
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
