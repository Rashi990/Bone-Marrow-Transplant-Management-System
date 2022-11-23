<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['clinician_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Match Requests</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/clinician_requests.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="left">
            <img src="../../public/images/logo.png" class="logo">

          <div class="tabs">

            <a class="hi-selected">Requests</a>
            <a class="hi" href="clinician_calendar.php">Calendar</a>
            <a class="hi" href="clinician_patient.php">Patient</a>
            <a class="hi" href="clinician_donor.php">Donor</a>
            <a class="hi" href="clinician_reports.php">Match</a>

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
              <p>Match Requests</p>
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
                  <h3 class="greet-text">Hi, Dr.<?php echo $_SESSION['clinician_name'];?></h3>
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
          <div class="rbottom">
            <div class="requests">
              <table>
                <tr>
                  <th>Patient ID</th>
                  <th>Patient Name</th>
                  <th>Gender</th>
                  <th>Blood Group</th>
                  <th>HLA Gene</th>
                  <th colspan="2">Action</th>
                </tr>
                <?php

                $conn = mysqli_connect("localhost","root","","bone_marrow_transplant_management_system");
                $sql = "SELECT patient_id,patient_name,gender,blood_group,hla_gene FROM patient";
                $result = mysqli_query($conn,$sql);

                if (mysqli_num_rows($result)>0) {
                  foreach ($result as $record) {
                    echo "
                    <tr>
                      <td>".$record['patient_id']."</td>
                      <td>".$record['patient_name']."</td>
                      <td>".$record['gender']."</td>
                      <td>".$record['blood_group']."</td>
                      <td>".$record['hla_gene']."</td>
                      <td>
                        <a id='view' href='clinician_view_patient.php'>View</a>
                        <a id='match' href='clinician_match_patient.php?patient_name=".$record['patient_name']."&action=match'>Match</a>
                      </td>
                    </tr>
                    ";
                  }
                }
                ?>
              </table>
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
