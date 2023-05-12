<?php require_once('consultant_navbar_appointment.php'); ?>
<?php
session_start();
if (isset($_SESSION['username']))
{
include '../../config/connection.php';

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
else{
  die(mysqli_error($connection));
}
if(isset($_POST['submit'])){
  $appointment_id=$_POST['appointment_id'];
  $patient_name=$_POST['patient_name'];
  $telephone_no=$_POST['telephone_no'];
  $email=$_POST['email'];
  $appointment_date=$_POST['appointment_date'];
  $appointment_time=$_POST['appointment_time'];
  $apply_date=$_POST['apply_date'];
  $status=$_POST['status'];
  $remark=$_POST['remark'];

    $sql0="UPDATE `appointments` SET `appointment_id`=$appointment_id, `patient_name`=$patient_name`, `appointment_date`='$appointment_date', `appointment_time`='$appointment_time', `apply_date`='$apply_date', `status`='$status', `remark`='$remark' WHERE `appointment_id`=$appointment_id";
    $result0=mysqli_query($connection,$sql0);
    if($result0){
        header('location:consultant_appointments.php');
    }
    else{
        die(mysqli_error($connection));
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Status</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_navbar.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_appointment.css" />
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_take_action.css" />
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
      <div class="title">
        <h2>Status Update Form</h2>
      </div>
      <div class="form">
        <form class="" action="" method="post">
          <div class="row">
            <label class="lbl">Appointment ID: </label>
            <input class="data" name="apointment_id" value="<?php echo $appointment_id ?>">
          </div>
          <div class="row">
            <label class="lbl">Patient Name: </label>
            <input class="data"name="patient_name" value="<?php echo $patient_name ?>">
          </div>
          <div class="row">
            <label class="lbl">Mobile Number: </label>
            <input class="data" name="telephone_no" value="<?php echo $telephone_no ?>">
          </div>
          <div class="row">
            <label class="lbl">Email: </label>
            <input class="data" name="email" value="<?php echo $email ?>">
          </div>
          <div class="row">
            <label class="lbl">Appointment Date: </label>
            <input class="data" name="appointment_date" value="<?php echo $appointment_date ?>">
          </div>
          <div class="row">
            <label class="lbl">Appointment Time: </label>
            <input class="data" name="appointment_time" value="<?php echo $appointment_time ?>">
          </div>
          <div class="row">
            <label class="lbl">Apply Date: </label>
            <input class="data" name="apply_date" value="<?php echo $apply_date ?>">
          </div>
          <div class="row">
            <label class="lbl">Status: </label>
            <select class="status" name="status">
              <option name="status" selected="selected" disabled="disabled"><?php echo $status ?>  </option>
              <option name="status" value="approved">Approved</option>
              <option name="status" value="canceled">Canceled</option>
            </select>
          </div>
          <div class="row">
            <label class="lbl">Remark: </label>
            <textarea class="remark" name="remark" value="remark" placeholder="Give a remark"><?php echo $remark ?></textarea>
          </div>
          <div class="btns">
            <button type="cancel" name="cancel">Cancel</button>
            <button type="submit" name="submit">Update</button>
          </div>
        </form>
      </div>
    </div>

  </body>
</html>

<?php
}
?>
