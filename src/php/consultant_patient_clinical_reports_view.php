<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
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
    $drug_name=$rows['drug_name'];
    $dosage=$rows['dosage'];
    $route=$rows['route'];
    $frequency=$rows['frequency'];
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
$sql3="SELECT * FROM hospital WHERE hospital_id=$hospital_id";
$result3=mysqli_query($connection,$sql3);
if( $result3){
  while($rows = mysqli_fetch_assoc($result3)){
    $hospital_id=$rows['hospital_id'];
    $hospital_name=$rows['hospital_name'];
  }
}
else{
  die(mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient No:<?php echo $patient_id ?> Clinical Records</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_patient_clinical_reports_view.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body>
    <div class="hero">
      <div class="rtop">
        <div class="empty">
          <p>Patient Clinical Details</p>
        </div>
        <div class="profile">
          <abbr title="notifications">
            <a href="../../public/html/consultant_notifications.html">
              <div class="icon">
                <span class="material-icons">
                  notifications
                </span>
              </div>
            </a>
          </abbr>
          <abbr title="messages">
            <a href="../../public/html/consultant_messages.html">
              <div class="icon">
                <span class="material-icons">
                  chat_bubble
                </span>
              </div>
            </a>
          </abbr>
          <abbr title="Home">
            <a href="consultant_home.php">
              <div class="icon">
                <span class="material-icons">
                  home
                </span>
              </div>
            </a>
          </abbr>
          <abbr title="Logout">
            <a href="consultant_login.php">
              <div class="icon">
                <span class="material-icons">
                  logout
                </span>
              </div>
            </a>
          </abbr>
          <abbr title="Welcome!">
            <div class="greet">
              <h3 class="greet-text">Hi, Dr.<?php echo $_SESSION['consultant_name'];?></h3>
            </div>
          </abbr>
          <abbr title="Profile">
            <a href="../../public/html/consultant_profile.html">
              <div class="pp">
                <span class="material-icons">
                  account_circle
                </span>
              </div>
            </a>
          </abbr>
        </div>
      </div>

      <div class="middle">
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
                Drug Name: <?php echo $drug_name ?>
              </div>
              <div class="dd">
                Dosage: <?php echo $dosage ?>
              </div>
              <div class="dd">
                Route: <?php echo $route ?>
              </div>
              <div class="dd">
                Frequency: <?php echo $frequency ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bottom">
        <div class="bottom-input">
          <span>© 2022 SLBMTMS. All rights reserved.</span>
        </div>
        <div class="bottom-input">
          <span>Terms and conditions</span>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
}
?>
