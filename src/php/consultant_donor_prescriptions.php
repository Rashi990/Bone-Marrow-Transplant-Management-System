<?php require_once('consultant_navbar_prescription.php'); ?>

<?php
$patient_id=$_GET['update-id'];
require_once('../../config/connection.php');
session_start();

if (!(isset($_SESSION['username'])))
{
    header("Location:login.php");
}

$donor_id = $_GET['update-id'];

$sql2 = "SELECT * FROM donor_clinical_reports LEFT JOIN donor ON donor_clinical_reports.donor_id=donor.donor_id";
$result2 = mysqli_query($connection, $sql2);
if ($result2) {
  while ($rows = mysqli_fetch_assoc($result2)) {
    $donor_cr_id = $rows['donor_cr_id'];
    $donor_name = $rows['donor_name'];
    $email = $rows['email'];
    $telephone_no = $rows['telephone_no'];
    $date_of_birth = $rows['date_of_birth'];
    $gender = $rows['gender'];
    $blood_group = $rows['blood_group'];
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

$sql3 = "SELECT * FROM donor_medical_reports RIGHT JOIN donor_clinical_reports ON donor_medical_reports.donor_cr_id=donor_clinical_reports.donor_cr_id";
$result3 = mysqli_query($connection, $sql3);
if ($result3) {
  while ($rows = mysqli_fetch_assoc($result3)) {
    $donor_mr_id = $rows['donor_mr_id'];
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
        <h2>Donor ID: <?php echo $donor_id ?></h2>
      </div>
      <a href="consultant_donor_prescription_form.php" class="new"><button class="new" type="button" name="button">+ Add</button></a>
      <div class="mid-bottom">
        <table align="center">
          <tr>
            <th>Donor Name</th>
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
            <td>'.$donor_name.'</td>
            <td>'.$date.'</td>
            <td>'.$blood_pressure.'</td>
            <td>'.$pulse_rate.'</td>
            <td>'.$diagnosed_with.'</td>
            <td>'.$drugs.'</td>
            <td>'.$unit.'</td>
            <td>'.$dosage.'</td>
            <td>
              <a class="view" href="consultant_donor_clinical_reports_view.php?update-id='.$donor_cr_id.'" class="text-light">
                <abbr title="View"><span class="material-icons">visibility</span></abbr>
              </a>
              <a class="edit" href="consultant_donor_clinical_reports_update.php?update-id='.$donor_cr_id.'" class="text-light">
                <abbr title="Edit"><span class="material-icons">edit_square</span></abbr>
              </a>
              <a class="delete" href="consultant_donor_clinical_reports_delete.php?delete-id='.$donor_cr_id.'" class="text-light">
                <abbr title="Delete"><span class="material-icons">delete</span></abbr>
              </a>
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
