<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['clinician_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Diseases</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_disease.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="empty">
          <h1>Disease-Specific Indications and Outcomes</h1>
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
      <div class="middle">
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
