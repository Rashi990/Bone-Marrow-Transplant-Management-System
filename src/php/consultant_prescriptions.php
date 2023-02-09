<?php require_once('consultant_navbar_prescription.php'); ?>
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
    <title>Patient Clinical Reports</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient_clinical_manage.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_navbar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="rtop">
          <div class="empty">
            <p>Donor Clinical Records</p>
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
              <a href="consultant_logout.php">
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
          <button class="add" type="button" name="button">
            <a href="consultant_donor_clinical_form.php">+ Add New Record</a>
          </button>
          <div class="mid-bottom">
              <table>
                <tr>
                  <th>Record ID</th>
                  <th>Donor ID</th>
                  <th>Date</th>
                  <th>Drug Name</th>
                  <th>Dosage</th>
                  <th>Route</th>
                  <th>Frequency</th>
                  <th colspan="2">Action</th>
                </tr>
                <?php
                    $sql="SELECT * FROM donor_clinical_reports";
                    $result=mysqli_query($connection,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $donor_cr_id=$row['donor_cr_id'];
                            $donor_id=$row['donor_id'];
                            $date=$row['date'];
                            $drug_name=$row['drug_name'];
                            $dosage=$row['dosage'];
                            $route=$row['route'];
                            $frequency=$row['frequency'];
                            echo '
                              <td>'.$donor_cr_id.'</td>
                              <td>'.$donor_id.'</td>
                              <td>'.$date.'</td>
                              <td>'.$drug_name.'</td>
                              <td>'.$dosage.'</td>
                              <td>'.$route.'</td>
                              <td>'.$frequency.'</td>
                              <td>
                                <button id="btn-update">
                                  <a href="consultant_donor_clinical_reports_update.php?update-id='.$donor_cr_id.'" class="text-light">
                                    Update
                                  </a>
                                </button>
                                <button id="btn-delete">
                                  <a href="consultant_donor_clinical_reports_delete.php?delete-id='.$donor_cr_id.'" class="text-light">
                                    Delete
                                  </a>
                                </button>
                              </td>
                            </tr>
                            ';
                        }
                    }
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
