<?php require_once('consultant_navbar_appointment.php'); ?>

<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=1)
{
    header("Location:home.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_navbar.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_appointment.css?v=1" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Top</title>
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
    <div class="row">
      <div class="col">
        <div class="box1">
          <div class="count">
            <?php
              $sql1 = "SELECT appointment_id FROM appointments WHERE `status` = 'Not Updated Yet' ORDER by appointment_date";
              $result1 = mysqli_query($connection, $sql1);
              $row = mysqli_num_rows($result1);
              echo '<h1>' .$row. '</h1>';
            ?>
          </div>
          Total New Appointments
        </div>
        <div class="box2">
          <a href="consultant_new_appointments.php">View Details</a>
        </div>
      </div>
      <div class="col">
        <div class="box1">
          <div class="count">
            <?php
              $sql1 = "SELECT appointment_id FROM appointments WHERE `status` = 'Approved' ORDER by appointment_date";
              $result1 = mysqli_query($connection, $sql1);
              $row = mysqli_num_rows($result1);
              echo '<h1>' .$row. '</h1>';
            ?>
          </div>
          Total Approved Appointments
        </div>
        <div class="box2">
          <a href="consultant_approved_appointments.php">View Details</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="box1">
          <div class="count">
            <?php
              $sql1 = "SELECT appointment_id FROM appointments WHERE `status` = 'Canceled' ORDER by appointment_date";
              $result1 = mysqli_query($connection, $sql1);
              $row = mysqli_num_rows($result1);
              echo '<h1>' .$row. '</h1>';
            ?>
          </div>
          Total Cancelled Appointments
        </div>
        <div class="box2">
          <a href="consultant_canceled_appointments.php">View Details</a>
        </div>
      </div>
      <div class="col">
        <div class="box1">
          <div class="count">
            <?php
              $sql1 = "SELECT appointment_id FROM appointments ORDER by appointment_date";
              $result1 = mysqli_query($connection, $sql1);
              $row = mysqli_num_rows($result1);
              echo '<h1>' .$row. '</h1>';
            ?>
          </div>
          Total Appointments
        </div>
        <div class="box2">
          <a href="consultant_all_appointments.php">View Details</a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

<!--<?php require_once('consultant_footer.php'); ?>-->
