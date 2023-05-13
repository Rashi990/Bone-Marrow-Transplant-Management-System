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
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_appointment.css?v=2" />
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
    </div>
    <div class="list">
      <div class="full-box">
        <h2>All Appointments</h2>
        <table align="center">
          <tr>
            <th>Appointment ID</th>
            <th>Patient Name</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <?php
            $sql="SELECT * FROM appointments";
            $result=mysqli_query($connection,$sql);
            if($result){
              while($row=mysqli_fetch_assoc($result)){
                $appointment_id=$row['appointment_id'];
                $patient_name=$row['patient_name'];
                $telephone_no=$row['telephone_no'];
                $email=$row['email'];
                $status=$row['status'];
                echo '
                  <td>'.$appointment_id.'</td>
                  <td>'.$patient_name.'</td>
                  <td>'.$telephone_no.'</td>
                  <td>'.$email.'</td>
                  <td>'.$status.'</td>
                  <td>
                    <button id="btn-view" class="btn">
                      <a href="consultant_appointments_view.php?appointment-id='.$appointment_id.'" class="text-light">
                        View
                      </a>
                    </button>
                  </td>
                </tr>
                ';
              }
            }
          ?>
        </table>
      </div>
    </div>
  </div>

</body>
</html>

<!--<?php require_once('consultant_footer.php'); ?>-->
