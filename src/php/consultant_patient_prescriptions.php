<?php
if($_SESSION['userlevel']=1)
{
include "../../config/connection.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient Clinical Reports</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_prescriptions.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_navbar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>

    <div class="board">
      <div class="">

      </div>
      <div class="">
        <a href="consultant_prescription_form.php" class="new">+ Add</a>
        <div class="mid-bottom">
            <table align="center">
              <tr>
                <th>Patient ID</th>
                <th>Date</th>
                <th>Drug Name</th>
                <th>Dosage</th>
                <th>Route</th>
                <th>Frequency</th>
                <th colspan="3">Action</th>
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
                                <a href="consultant_patient_reports_view.php?update-id='.$patient_cr_id.'" class="text-light">
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
    </div>

  </body>
</html>

<?php
}
?>
