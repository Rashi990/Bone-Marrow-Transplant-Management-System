<?php
session_start();
if($_SESSION['userlevel']=1)
{
include "../../config/connection.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient Clinical Reports</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient_clinical_manage.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="rtop">
          <div class="empty">
            <p>Patient Clinical Records</p>
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
      </div>
      <div class="middle">
          <button class="add" type="button" name="button">
            <a href="consultant_clinical_form.php">+ Add New Record</a>
          </button>
          <div class="mid-bottom">
              <table align="center">
                <tr>
                  <th>Patient ID</th>
                  <th>Date</th>
                  <th>Drug Name</th>
                  <th>Dosage</th>
                  <th>Route</th>
                  <th>Frequency</th>
                  <th colspan="2">Action</th>
                </tr>
                <?php
                    $sql="SELECT * FROM patient_clinical_reports ORDER BY date, patient_id, drug_name";
                    $result=mysqli_query($connection,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $patient_cr_id=$row['patient_cr_id'];
                            $patient_id=$row['patient_id'];
                            $date=$row['date'];
                            $drug_name=$row['drug_name'];
                            $dosage=$row['dosage'];
                            $route=$row['route'];
                            $frequency=$row['frequency'];
                            echo '
                              <td>'.$patient_id.'</td>
                              <td>'.$date.'</td>
                              <td>'.$drug_name.'</td>
                              <td>'.$dosage.'</td>
                              <td>'.$route.'</td>
                              <td>'.$frequency.'</td>
                              <td>
                                <button id="btn-view" class="btn">
                                  <a href="consultant_patient_clinical_reports_view.php?update-id='.$patient_cr_id.'" class="text-light">
                                    View
                                    </a>
                                </button>
                                <button id="btn-update" class="btn">
                                  <a href="consultant_patient_clinical_reports_update.php?update-id='.$patient_cr_id.'" class="text-light">
                                    Edit
                                  </a>
                                </button>
                                <button id="btn-delete" class="btn">
                                  <a href="consultant_patient_clinical_reports_delete.php?delete-id='.$patient_cr_id.'" class="text-light">
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
