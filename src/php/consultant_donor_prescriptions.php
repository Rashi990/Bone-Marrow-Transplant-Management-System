<?php require_once('consultant_navbar_prescription.php'); ?>
<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['username'])))
{
    header("Location:login.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_prescriptions.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_navbar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Top</title>
</head>
<body>

  <div class="top-nav">
    <div class="head">
        <h1>Prescriptions</h1>
    </div>

    <div class="search">
        <div class="search-bar">
          <span class="material-icons">search</span>
          <input type="search" placeholder="search here">
        </div>
      </div>

    <div class="top">
      <span class="material-icons">notifications</span>
      <span class="material-icons">chat_bubble</span>
      <div class="Loggedin"> Welcome! <?php echo $_SESSION['username'];?></div>
      <span class="material-icons">account_circle</span>
    </div>
  </div>

  <div class="board">
    <div class="">

    </div>
    <div class="">
      <a href="consultant_donor_prescription_form.php" class="new">+ Add</a>
      <div class="mid-bottom">
          <table align="center">
            <tr>
              <th>Date</th>
              <th>Drug Name</th>
              <th>Dosage</th>
              <th>Route</th>
              <th>Frequency</th>
              <th colspan="3">Action</th>
            </tr>
            <?php
                $sql="SELECT * FROM donor_clinical_reports ORDER BY date, donor_id, drug_name";
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
                          <td>'.$date.'</td>
                          <td>'.$drug_name.'</td>
                          <td>'.$dosage.'</td>
                          <td>'.$route.'</td>
                          <td>'.$frequency.'</td>
                          <td>
                            <button id="btn-view" class="btn">
                              <a href="consultant_patient_clinical_reports_view.php?update-id='.$donor_cr_id.'" class="text-light">
                                View
                                </a>
                            </button>
                            <button id="btn-update" class="btn">
                              <a href="consultant_patient_clinical_reports_update.php?update-id='.$donor_cr_id.'" class="text-light">
                                Edit
                              </a>
                            </button>
                            <button id="btn-delete" class="btn">
                              <a href="consultant_patient_clinical_reports_delete.php?delete-id='.$donor_cr_id.'" class="text-light">
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

<!--<?php require_once('consultant_footer.php'); ?>-->
