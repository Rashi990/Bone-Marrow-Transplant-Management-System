<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient Clinical Reports</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient_clinical_manage.css?v=1">
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
          <div class="mid-top">
            <a id="adds" href="consultant_clinical_form.php">
              <button class="add" type="button" class="add">+ Add New Clinical Record</button>
            </a>
          </div>
          <div class="mid-bottom">
              <table>
                <tr>
                  <th>Record ID</th>
                  <th>Patient ID</th>
                  <th>Date</th>
                  <th>Drug Name</th>
                  <th>Dosage</th>
                  <th>Route</th>
                  <th>Frequency</th>
                  <th colspan="2">Action</th>
                </tr>
                <?php
                $conn = mysqli_connect("localhost","root","","bone_marrow_transplant_management_system");
                $sql = "SELECT patient_cr_id,patient_id,date,drug_name,dosage,route,frequency FROM patient_clinical_reports";
                $result = mysqli_query($conn,$sql);
                if (mysqli_num_rows($result)>0) {
                  foreach ($result as $record) {
                    ?>
                    <tr>
                      <td><?=$record['patient_cr_id'];?></td>
                      <td><?=$record['patient_id'];?></td>
                      <td><?=$record['date'];?></td>
                      <td><?=$record['drug_name'];?></td>
                      <td><?=$record['dosage'];?></td>
                      <td><?=$record['route'];?></td>
                      <td><?=$record['frequency'];?></td>
                      <td>
                        <a id="btn-update" href="consultant_patient_clinical_reports_update.php">Update</a>
                        <a id="btn-delete" href="consultant_patient_clinical_reports_update.php">Delete</a>
                      </td>
                    </tr>
                    <?php
                  }
                }
                else {
                  echo "No results!";
                }
                $conn->close();
                ?>
              </table>
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
