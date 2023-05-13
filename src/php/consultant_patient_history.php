<?php
session_start();
if($_SESSION['userlevel']=1)
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient History</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient_history.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="hero">
      <div class="top">
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
                  <h3 class="greet-text">Welcome! Dr.<?php echo $_SESSION['username'];?></h3>
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
              <div class="pt">
                <h3 align="center">Patient Test Reports</h3>
                <table align="center">
                  <tr>
                    <td>FBS</td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Chest X-ray</td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>CT Scan</td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>MRI Scan</td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Eco Testing</td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="pm">
                <h3 align="center">Patient Medication Details</h3>
                <table align="center">
                  <tr>
                    <td>Vermox</td>
                    <td>200mg</td>
                    <td>three times a day</td>
                    <td>three days</td>
                    <td>
                      <button type="button" name="button" id="edit">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Vermox</td>
                    <td>200mg</td>
                    <td>three times a day</td>
                    <td>three days</td>
                    <td>
                      <button type="button" name="button" id="edit">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Vermox</td>
                    <td>200mg</td>
                    <td>three times a day</td>
                    <td>three days</td>
                    <td>
                      <button type="button" name="button" id="edit">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Vermox</td>
                    <td>200mg</td>
                    <td>three times a day</td>
                    <td>three days</td>
                    <td>
                      <button type="button" name="button" id="edit">Edit</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Vermox</td>
                    <td>200mg</td>
                    <td>three times a day</td>
                    <td>three days</td>
                    <td>
                      <button type="button" name="button" id="edit">Edit</button>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="pa">
                <h3 align="center">Patient Allergies</h3>
                <table align="center">
                  <tr>
                    <td>Penicillin</td>
                    <td class="red">
                      High
                    </td>
                  </tr>
                  <tr>
                    <td>Tilorone</td>
                    <td class="blue">
                      Medium
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button type="button" name="button" id="add">Add</button>
                    </td>
                  </tr>
                </table>
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
