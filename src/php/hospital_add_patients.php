
<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=3)
{
    header("Location:login.php");
}

$uid=$_SESSION['uid'];
$username=$_SESSION['username'];
$hospital_id=$_SESSION['hospital_id'];

 ?>

 <?php

  // Get current date
  $currentDate = date("Y-m-d");
 
  if(isset($_POST['submit'])){

    //$id=$_POST['patient_id'];
    $name=$_POST['patient_name'];
    $email=$_POST['email'];
    $tele=$_POST['telephone_no'];
    $addr=$_POST['address'];
    $dob=$_POST['date_of_birth'];
    $age = date_diff(date_create($dob), date_create($currentDate))->y;
    $gender=$_POST['gender'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $NIC=$_POST['NIC'];
    $marital_state=$_POST['marital_state'];
    $blood_group=$_POST['blood_group'];
    $diagnosis=$_POST['diagnosis'];
    $status=$_POST['current_status'];

    //Date validation
    $dob_timestamp = strtotime($dob);
    $now_timestamp = time();
    if($dob_timestamp > $now_timestamp){
        // Date of birth is in the future
        echo "<script> alert('Please enter a valid date of birth.') </script>";
    }else{
    $sql= "INSERT INTO `patient`(`patient_name`, `email`, `telephone_no`, `address`, `date_of_birth`, `age`, `gender`, `height`, `weight`, `NIC`, `marital_state`, `blood_group`, `diagnosis`, `current_status`, `hospital_id`) VALUES ('$name','$email','$tele','$addr','$dob','$age','$gender','$height','$weight','$NIC','$marital_state','$blood_group','$diagnosis','$status','$hospital_id')";
    $result=mysqli_query($connection,$sql);

    if($result){
      echo "<script> alert('Patient is successfully added !') </script>";
			header("Location: hospital_add_patient_hla_details.php");
    }else{
      echo "<script> alert('Patient adding is failed ! ".mysqli_error($connection)."') </script>";
    }

  }
}

 ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_navbar.css?v=1">
    <title>Document</title>
 </head>
 <body>

 <!--
 <div class="top-nav">

<div class="head">
    <h1>Add Patient</h1>
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
        <div class="Loggedin"> Welcome! <?php echo $username;?></div>
        <span class="material-icons">account_circle</span>
      </div>

</div>
-->

echo '<a class="back_btn" href="../../src/php/hospital_all_patients.php">Back</a>'
echo '<a href="../../src/php/hospital_add_patient_hla_details.php?patient_id=$patient_id">
                <button type="submit" name="submit" value="Next" class="btn">
</button>'

 </body>
 </html>

<?php include('../../public/html/hospital_add_patients.html'); ?>
<!--<?php require_once('hospital_footer.php'); ?>-->