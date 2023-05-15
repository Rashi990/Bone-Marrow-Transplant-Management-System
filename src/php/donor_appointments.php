

<?php require_once('donor_sidebar.php');?>

<?php
if ((isset($_SESSION['user_name']) && isset($_SESSION['donor_id']) ))
{
  include '../../config/connection.php';

  $donor_id=$_SESSION['donor_id'];

  if(isset($_POST['submit'])){
    $appointment_date=$_POST['appointment_date'];
    $appointment_time=$_POST['appointment_time'];
    $date=$_POST['date'];

    if (empty($appointment_date)||empty($appointment_time))
  {
    header("Location: donor_appointments.php?error=All feilds are required!");
    exit();
  }
      $sql="INSERT INTO appointments_donor (donor_id, appointment_date,appointment_time,apply_date) VALUES($donor_id, $appointment_date, $appointment_time, $date)";
      $result=mysqli_query($connection,$sql);
      if($result){
          header('location:donor_appointments.php?update-id=$donor_id');
      }
      else{
          die(mysqli_error($connection));
      }
  }

?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


?>
















    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../../public/css/donor_sidebar.css">
    <link rel="stylesheet" href="../../public/css/donor_appointment.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,500;1,700&display=swap" rel="stylesheet">
    <title>SLBTMS</title>
</head>
<body>
    <div class="board">
      <form class="form" action="" method="post">
        <div class="title">
          <h1>Appointment Form</h1>
        </div>
        <div class="row">
          <div class="col">
            <label>Appointment Date : </label>
            <input class="datetime" type="date" name="appointment_date" value="date">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label>Appointment Time : </label>
            <input class="datetime" type="time" name="appointment_time" value="time">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label>Apply Date : </label>
            <input class="datetime" type="date" name="date" value="date">
          </div>
        </div>
        <div class="submit">
          <button type="submit" name="submit">BOOK NOW</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

<?php

}
?>

