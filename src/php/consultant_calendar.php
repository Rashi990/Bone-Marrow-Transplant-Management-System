<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultant Calendar</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_calendar.css">
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
            <a class="hi-selected">Calendar</a>
            <a class="hi" href="consultant_patient.php">Patient</a>
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
              <p>Calendar</p>
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
            <div class="cases">
              <a href="">
              <div class="case">
                <div class="name">
                  <span class="material-symbols-rounded">
                    healing
                  </span>
                  Primary Care
                </div>
                <div class="descript">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
              </a>
              <a href="">
              <div class="case">
                <div class="name">
                  <span class="material-symbols-rounded">
                    emergency
                  </span>
                  Emergency Cases
                </div>
                <div class="descript">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
              </a>
              <a href="">
              <div class="case">
                <div class="name">
                  <span class="material-symbols-rounded">
                    calendar_apps_script
                  </span>
                  Online Appoinments
                </div>
                <div class="descript">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                </a>
              </div>
            </div>
            <div class="banner2">
              <div class="phara2">
                <p>This is a phara. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <button type="button" name="button">Read More</button>
              </div>
            </div>
            <div class="banner">
              <div class="phara">
                <p>This is a phara. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
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
}

<?php
}
?>
