<?php require_once('consultant_navbar_prescription.php'); ?>
 <?php
 session_start();
 if($_SESSION['userlevel']=1)
 {
 include '../../config/connection.php';

 $donor_id=$_GET['update-id'];

 $sql2="SELECT * FROM donor WHERE donor_id=$donor_id";
 $result2=mysqli_query($connection,$sql2);
 if( $result2){
   while($rows = mysqli_fetch_assoc($result2)){
     $donor_id=$rows['donor_id'];
     $donor_name=$rows['donor_name'];
     $gender=$rows['gender'];
     $blood_group=$rows['blood_group'];
     $email=$rows['email'];
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
        Donor No: <?php echo $donor_id ?> Clinical Details
      </div>
      <div class="details">
        <div class="det">
          Donor Name: <?php echo $donor_name ?>
        </div>
        <div class="det">
          Email: <?php echo $email ?>
        </div>
        <div class="det">
          Gender: <?php echo $gender ?>
        </div>
        <div class="det">
          Blood Group: <?php echo $blood_group ?>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

<?php
}
?>
