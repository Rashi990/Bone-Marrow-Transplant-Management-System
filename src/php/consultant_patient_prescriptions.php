<?php require_once('consultant_navbar_prescription.php'); ?>

<?php
$patient_id=$_GET['update-id'];
require_once('../../config/connection.php');
session_start();

if (!(isset($_SESSION['username'])))
{
    header("Location:login.php");
}

$patient_id = $_GET['update-id'];

$sql2 = "SELECT * FROM patient_clinical_reports LEFT JOIN patient ON patient_clinical_reports.patient_id=patient.patient_id";
$result2 = mysqli_query($connection, $sql2);
if ($result2) {
  while ($rows = mysqli_fetch_assoc($result2)) {
    $patient_cr_id = $rows['patient_cr_id'];
    $patient_name = $rows['patient_name'];
    $email = $rows['email'];
    $telephone_no = $rows['telephone_no'];
    $date_of_birth = $rows['date_of_birth'];
    $gender = $rows['gender'];
    $height = $rows['height'];
    $blood_group = $rows['blood_group'];
    $hospital_id = $rows['hospital_id'];
    $date = $rows['date'];
    $blood_pressure = $rows['blood_pressure'];
    $pulse_rate = $rows['pulse_rate'];
    $allergies = $rows['allergies'];
    $disabilities = $rows['disabilities'];
    $diet = $rows['diet'];
    $examinations = $rows['examinations'];
    $follow_ups = $rows['follow_ups'];
    $weight=$rows['weight'];
  }
}

$sql3 = "SELECT * FROM patient_medical_reports RIGHT JOIN patient_clinical_reports ON patient_medical_reports.patient_cr_id=patient_clinical_reports.patient_cr_id";
$result3 = mysqli_query($connection, $sql3);
if ($result3) {
  while ($rows = mysqli_fetch_assoc($result3)) {
    $patient_mr_id = $rows['patient_mr_id'];
    $diagnosed_with = $rows['diagnosed_with'];
    $drugs = $rows['drugs'];
    $unit = $rows['unit'];
    $dosage = $rows['dosage'];
  }
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
      <div class="topic">
        <h2>Patient ID: <?php echo $patient_id ?></h2>
      </div>
      <div class="add">
        <?php
          echo
          '<a href="consultant_prescription_form.php?update-id='.$patient_id.'" class="new">+ Add</a>';
        ?>
      </div>
      <div class="mid-bottom">
          <table align="center">
            <tr>
              <th>Patient Name</th>
              <th>Date</th>
              <th>Blood Pressure</th>
              <th>Pulse Rate</th>
              <th>Diagnosed With</th>
              <th>Drugs</th>
              <th>Unit</th>
              <th>Dosage</th>
              <th colspan="3">Action</th>
            </tr>
            <?php
            echo '
              <td>'.$patient_name.'</td>
              <td>'.$date.'</td>
              <td>'.$blood_pressure.'</td>
              <td>'.$pulse_rate.'</td>
              <td>'.$diagnosed_with.'</td>
              <td>'.$drugs.'</td>
              <td>'.$unit.'</td>
              <td>'.$dosage.'</td>
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
            ?>
          </table>
      </div>
    </div>
  </div>

</body>
</html>

<!--<?php require_once('consultant_footer.php'); ?>-->
