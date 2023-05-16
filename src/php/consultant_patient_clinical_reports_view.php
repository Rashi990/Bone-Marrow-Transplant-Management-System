<?php require_once('consultant_navbar_prescription.php'); ?>
 <?php
 session_start();
 if($_SESSION['userlevel']=1)
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
    $blood_pressure=$rows['blood_pressure'];
    $pulse_rate=$rows['pulse_rate'];
    $weight=$rows['weight'];
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
$sql3="SELECT * FROM patient_medical_reports WHERE patient_cr_id=$patient_cr_id";
$result3=mysqli_query($connection,$sql3);
if( $result3){
  while($rows = mysqli_fetch_assoc($result3)){
    $patient_cr_id=$rows['patient_cr_id'];
    $patient_mr_id=$rows['patient_mr_id'];
    $diagnosed_with=$rows['diagnosed_with'];
    $drugs=$rows['drugs'];
    $dosage=$rows['dosage'];
  }
}
$sql4="SELECT * FROM hospital WHERE hospital_id=$hospital_id";
$result4=mysqli_query($connection,$sql4);
if( $result3){
  while($rows = mysqli_fetch_assoc($result4 )){
    $hospital_id=$rows['hospital_id'];
    $hospital_name=$rows['hospital_name'];
  }
}
else{
  die(mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_prescriptions.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient_clinical_reports_view.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_navbar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Patient No:<?php echo $patient_id ?> Clinical Records</title>
</head>
<body>

  <div class="top-nav">
    <div class="head">
        <h1>Patient Details</h1>
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
              Diagnosed With: <?php $diagnosed_with ?>
            </div>
            <div class="dd">
              Drugs: <?php echo $drugs ?>
            </div>
            <div class="dd">
              Dosage: <?php echo $dosage ?>
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
