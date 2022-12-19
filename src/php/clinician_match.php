<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['clinician_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Match</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_appointments.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="left">
            <img src="../../public/images/logo.png" class="logo">

          <div class="tabs">

            <a class="hi" href="clinician_requests.php">Requests</a>
            <a class="hi" href="clinician_calendar.php">Calendar</a>
            <a class="hi" href="clinician_patient.php">Patient</a>
            <a class="hi" href="clinician_donor.php">Donor</a>
            <a class="hi-selected" href="clinician_match.php">Match</a>

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
                  <h3 class="greet-text">Welcome! Dr.<?php echo $_SESSION['clinician_name'];?></h3>
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
            <div class="main">
              <?php include('../../public/html/consultant_match.html'); ?>
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
}

<?php
}
?>
