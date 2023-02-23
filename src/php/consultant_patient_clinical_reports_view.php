<?php
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
{
include '../../config/connection.php';

$patient_cr_id=$_GET['update-id'];

$sql="SELECT * FROM patient_clinical_reports WHERE patient_cr_id=$patient_cr_id";
$result=mysqli_query($connection,$sql);
if( $result){
  while($rows = mysqli_fetch_assoc($result)){
    $patient_cr_id=$rows['patient_cr_id'];
    $patient_id=$rows['patient_id'];
    $date=$rows['date'];
    $drug_name=$rows['drug_name'];
    $dosage=$rows['dosage'];
    $route=$rows['route'];
    $frequency=$rows['frequency'];
  }
}
$sql2="SELECT * FROM patient WHERE patient_id=$patient_id";
$result2=mysqli_query($connection,$sql2);
if( $result2){
  while($rows = mysqli_fetch_assoc($result2)){
    $patient_id=$rows['patient_id'];
    $patient_name=$rows['patient_name'];
    $gender=$rows['gender'];
    $blood_group=$rows['blood_group'];
    $hospital_id=$rows['hospital_id'];
  }
}
$sql3="SELECT * FROM hospital WHERE hospital_id=$hospital_id";
$result3=mysqli_query($connection,$sql3);
if( $result3){
  while($rows = mysqli_fetch_assoc($result3)){
    $hospital_id=$rows['hospital_id'];
    $hospital_name=$rows['hospital_name'];
  }
}
else{
  die(mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient No:<?php echo $patient_id ?> Clinical Records</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient_clinical_reports_view.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body>

    <div class="board">
      <div class="form">
        <div class="title">
          Patient No: <?php echo $patient_id ?> Clinical Details
        </div>
        <div class="details">
          <div class="det">
            Patient Name: <?php echo $patient_name ?>
          </div>
          <div class="det">
            Hospital Name: <?php echo $hospital_name ?>
          </div>
          <div class="det">
            Gender: <?php echo $gender ?>
          </div>
          <div class="det">
            Blood Group: <?php echo $blood_group ?>
          </div>
        </div>
        <div class="details">
          <div class="det">
            Clinical Date: <?php echo $date ?>
          </div>
          <div class="det">
            <div class="dd">
              Drug Name: <?php echo $drug_name ?>
            </div>
            <div class="dd">
              Dosage: <?php echo $dosage ?>
            </div>
            <div class="dd">
              Route: <?php echo $route ?>
            </div>
            <div class="dd">
              Frequency: <?php echo $frequency ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>

<?php
}
?>
