<?php require_once('consultant_navbar_appointment.php'); ?>

<?php
require_once('../../config/connection.php');
session_start();

if($_SESSION['userlevel']!=1)
{
    header("Location:home.php");
}

$consultant_id=$_SESSION['uid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_navbar.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_appointment.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Condensed:wght@700&family=Roboto+Slab:wght@700;800&family=Roboto:wght@400;500&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
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
          <div class="ttl">
            Total New Appointments
          </div>
          <div class="count">
            <?php
              $sql1 = "SELECT `donor_appointment_id` FROM `appointments_donor` WHERE `consultant_id` = '$consultant_id' AND `state` = 'Not Updated Yet' ORDER BY `appointment_date`";
              $result1 = mysqli_query($connection, $sql1);
              $row = mysqli_num_rows($result1);
              echo '<h1>' .$row. '</h1>';
            ?>
          </div>
        </div>
        <div class="box2">
          <a href="consultant_new_appointments.php">View Details</a>
        </div>
      </div>
      <div class="col">
        <div class="box1">
          <div class="ttl">
            Total Approved Appointments
          </div>
          <div class="count">
            <?php
              $sql2 = "SELECT `donor_appointment_id` FROM `appointments_donor` WHERE `consultant_id` = '$consultant_id' AND `state` = 'approved' ORDER BY `appointment_date`";
              $result2 = mysqli_query($connection, $sql2);
              $row2 = mysqli_num_rows($result2);
              echo '<h1>' .$row2. '</h1>';
            ?>
          </div>
        </div>
        <div class="box2">
          <a href="consultant_approved_appointments.php">View Details</a>
        </div>
      </div>
      <div class="col">
        <div class="box1">
          <div class="ttl">
            Total Cancelled Appointments
          </div>
          <div class="count">
            <?php
              $sql3 = "SELECT `donor_appointment_id` FROM `appointments_donor` WHERE `consultant_id` = '$consultant_id' AND `state` = 'canceled' ORDER BY `appointment_date`";
              $result3 = mysqli_query($connection, $sql3);
              $row3 = mysqli_num_rows($result3);
              echo '<h1>' .$row3. '</h1>';
            ?>
          </div>
        </div>
        <div class="box2">
          <a href="consultant_canceled_appointments.php">View Details</a>
        </div>
      </div>
    </div>
    <div class="full-box">
      <h2>All Appointments</h2>
      <table align="center">
        <tr>
          <th>Appointment ID</th>
          <th>Donor Name</th>
          <th>Mobile Number</th>
          <th>Email</th>
          <th>State</th>
          <th>Action</th>
        </tr>
        <?php
          $sql="SELECT * FROM appointments_donor LEFT JOIN donor ON appointments_donor.donor_id = donor.donor_id  WHERE consultant_id = '$consultant_id'";
          $result=mysqli_query($connection,$sql);
          if($result){
            while($row=mysqli_fetch_assoc($result)){
              $donor_appointment_id=$row['donor_appointment_id'];
              $donor_id=$row['donor_id'];
              $donor_name=$row['donor_name'];
              $telephone_no=$row['telephone_no'];
              $email=$row['email'];
              $state=$row['state'];
              echo '
                <td>'.$donor_appointment_id.'</td>
                <td>'.$donor_name.'</td>
                <td>'.$telephone_no.'</td>
                <td>'.$email.'</td>
                <td>'.$state.'</td>
                <td>
                <a class="view" href="consultant_approved_appointments_view.php?appointment-id='.$donor_appointment_id.'" class="text-light">
                  <abbr title="View"><span class="material-icons">visibility</span></abbr>
                </a>
                </td>
              </tr>
              ';
            }
          }
        ?>
      </table>
    </div>
  </div>

</body>
</html>

<!--<?php require_once('consultant_footer.php'); ?>-->
