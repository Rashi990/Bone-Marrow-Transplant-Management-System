<?php require_once('consultant_navbar_appointment.php'); ?>

<?php
include '../../config/connection.php';
session_start();

if($_SESSION['userlevel']!=1)
{
    header("Location:home.php");
}
else{
    $donor_appointment_id=$_GET['appointment-id'];
    $sql="SELECT * FROM appointments_donor INNER JOIN donor ON appointments_donor.donor_id=donor.donor_id WHERE donor_appointment_id=$donor_appointment_id";
    $result=mysqli_query($connection,$sql);
    if( $result){
      while($rows = mysqli_fetch_assoc($result)){
        $donor_appointment_id=$rows['donor_appointment_id'];
        $donor_name=$rows['donor_name'];
        $telephone_no=$rows['telephone_no'];
        $email=$rows['email'];
        $appointment_date=$rows['appointment_date'];
        $appointment_time=$rows['appointment_time'];
        $apply_date=$rows['apply_date'];
        $state=$rows['state'];
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
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_appointments_view.css">
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
        <h3>Patient Details</h3>
        <div class="row">
          <div class="col">
            <p>Appointment ID: </p>
          </div>
          <div class="col">
            <?php echo $donor_appointment_id; ?>
          </div>
        </div>
        <div class="details">
          <div class="row">
            <div class="col">
              <p>Donor Name: </p>
            </div>
            <div class="col">
              <?php echo $donor_name; ?>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>Mobile Number: </p>
            </div>
            <div class="col">
              <?php echo $telephone_no; ?>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>Email: </p>
            </div>
            <div class="col">
              <?php echo $email; ?>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>Appointment Date: </p>
            </div>
            <div class="col">
              <?php echo $appointment_date; ?>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>Appointment Time: </p>
            </div>
            <div class="col">
              <?php echo $appointment_time; ?>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>Apply Date: </p>
            </div>
            <div class="col">
              <?php echo $apply_date; ?>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>State: </p>
            </div>
            <div class="col">
              <?php echo $state; ?>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>Remark: </p>
            </div>
            <div class="col">
              <?php echo $remark; ?>
            </div>
          </div>
        </div>
        <div class="btn">
          <?php
          echo
          '<a href="consultant_take_action.php?appointment-id='.$donor_appointment_id.'"><button type="button" name="button">Take Action</button></a>';
          ?>
        </div>
      </div>

    </div>
  </body>
</html>
