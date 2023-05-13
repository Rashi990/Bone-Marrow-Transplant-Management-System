<?php require_once('consultant_navbar_appointment.php'); ?>

<?php
include '../../config/connection.php';
session_start();

if($_SESSION['userlevel']!=1)
{
    header("Location:home.php");
}
else{
    $appointment_id=$_GET['appointment-id'];
    $sql="SELECT * FROM appointments WHERE appointment_id=$appointment_id";
    $result=mysqli_query($connection,$sql);
    if( $result){
      while($rows = mysqli_fetch_assoc($result)){
        $appointment_id=$rows['appointment_id'];
        $patient_name=$rows['patient_name'];
        $telephone_no=$rows['telephone_no'];
        $email=$rows['email'];
        $appointment_date=$rows['appointment_date'];
        $appointment_time=$rows['appointment_time'];
        $apply_date=$rows['apply_date'];
        $status=$rows['status'];
        $remark=$rows['remark'];
      }
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultant Appointments</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_appointments_view.css?v=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="top-nav">
      <div class="head">
          <h1>Appointments</h1>
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
      <div class="pd">
        <h3 align="center">Patient Details</h3>
        <p>Appointment ID: <?php echo $appointment_id ?></p>
        <p>Patient Name: <?php echo $patient_name ?></p>
        <p>Mobile Number: <?php echo $telephone_no ?></p>
        <p>Email: <?php echo $email ?></p>
        <p>Appointment Date: <?php echo $appointment_date ?></p>
        <p>Appointment Time: <?php echo $appointment_time ?></p>
        <p>Apply Date: <?php echo $apply_date ?></p>
        <p>Status: <?php echo $status ?></p>
        <p>Remark: <?php echo $remark ?></p>
      </div>
      <div class="btn">
        <a href="#"><button type="button" name="button">Take Action</button></a>
      </div>
    </div>
  </body>
</html>
