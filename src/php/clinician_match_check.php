<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['clinician_name']))
{
  include '../../config/connection.php';

  $sql="SELECT * FROM patient WHERE patient_id=1";
  $result=mysqli_query($connection,$sql);
  if( $result){
    while($rows = mysqli_fetch_assoc($result)){
      $patient_id=$rows['patient_id'];
      $patient_name=$rows['patient_name'];
      $gender=$rows['gender'];
      $blood_group=$rows['blood_group'];
      $hospital_id=$rows['hospital_id'];
    }
  }
  $sql2="SELECT * FROM hospital WHERE hospital_id=$hospital_id";
  $result2=mysqli_query($connection,$sql2);
  if( $result2){
    while($rows = mysqli_fetch_assoc($result2)){
      $hospital_id=$rows['hospital_id'];
      $hospital_name=$rows['hospital_name'];
    }
  }
  $sql3="SELECT * FROM patient_hla_details WHERE patient_id=$patient_id";
  $result3=mysqli_query($connection,$sql3);
  if( $result3){
    while($rows = mysqli_fetch_assoc($result3)){
      $patient_id=$rows['patient_id'];
      $hla_antigen=$rows['hla_antigen'];
      $hla_allele_family=$rows['hla_allele_family'];
      $hla_2nd_type=$rows['hla_2nd_type'];
      $hla_3rd_type=$rows['hla_3rd_type'];
      $hla_4th_type=$rows['hla_4th_type'];
      $hla_5th_type=$rows['hla_5th_type'];
    }
  }
  $sql4="SELECT * FROM donor WHERE donor_id=1";
  $result4=mysqli_query($connection,$sql4);
  if( $result4){
    while($rows = mysqli_fetch_assoc($result4)){
      $donor_id=$rows['donor_id'];
      $donor_name=$rows['donor_name'];
      $gender=$rows['gender'];
      $blood_group=$rows['blood_group'];
    }
  }
  $sql3="SELECT * FROM patient_hla_details WHERE patient_id=$patient_id";
  $result3=mysqli_query($connection,$sql3);
  if( $result3){
    while($rows = mysqli_fetch_assoc($result3)){
      $donor_id=$rows['donor_id'];
      $hla_antigen=$rows['hla_antigen'];
      $hla_allele_family=$rows['hla_allele_family'];
      $hla_2nd_type=$rows['hla_2nd_type'];
      $hla_3rd_type=$rows['hla_3rd_type'];
      $hla_4th_type=$rows['hla_4th_type'];
      $hla_5th_type=$rows['hla_5th_type'];
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
    <title>View Match</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/clinician_match_view.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="right">
          <div class="rtop">
            <div class="empty">

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
              <abbr title="Welcome!">
                <div class="greet">
                  <h3 class="greet-text">Welcome! Dr.<?php echo $_SESSION['clinician_name'];?></h3>
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
          <div class="rbottom">
            <div class="main">
              <div class="pd">
                <h3 align="center">Patient Details</h3>
                <p>Hospital Name: <?php echo $hospital_name ?></p>
                <p>Patient ID: <?php echo $patient_id ?></p>
                <p>Patient Name: <?php echo $patient_name ?></p>
                <p>Gender: <?php echo $gender ?></p>
                <p>Age: 26</p>
                <p>Blood Group: <?php echo $blood_group ?></p>
                <p>HLA Antigen Type: <?php echo $hla_antigen ?></p>
                <p>HLA Allele Family: <?php echo $hla_allele_family ?></p>
                <p>HLA Second Type: <?php echo $hla_2nd_type ?></p>
                <p>HLA Third Type: <?php echo $hla_3rd_type ?></p>
                <p>HLA Fourth Type: <?php echo $hla_4th_type ?></p>
                <p>HLA Fifth Type: <?php echo $hla_5th_type ?></p>
              </div>
              <div class="ph">
                <h3>Donor List</h3>
                <table>
                  <tr>
                    <th>Donor ID</th>
                    <th>Donor Name</th>
                    <th>Blood Group</th>
                    <th>Action</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $donor_name ?></td>
                    <td><?php echo $blood_group ?></td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                      <button type="button" name="button" id="match">Match</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $donor_name ?></td>
                    <td><?php echo $blood_group ?></td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                      <button type="button" name="button" id="match">Match</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $donor_name ?></td>
                    <td><?php echo $blood_group ?></td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                      <button type="button" name="button" id="match">Match</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $donor_name ?></td>
                    <td><?php echo $blood_group ?></td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                      <button type="button" name="button" id="match">Match</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $donor_name ?></td>
                    <td><?php echo $blood_group ?></td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                      <button type="button" name="button" id="match">Match</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $donor_name ?></td>
                    <td><?php echo $blood_group ?></td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                      <button type="button" name="button" id="match">Match</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $donor_name ?></td>
                    <td><?php echo $blood_group ?></td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                      <button type="button" name="button" id="match">Match</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $donor_name ?></td>
                    <td><?php echo $blood_group ?></td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                      <button type="button" name="button" id="match">Match</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $donor_name ?></td>
                    <td><?php echo $blood_group ?></td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                      <button type="button" name="button" id="match">Match</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $donor_name ?></td>
                    <td><?php echo $blood_group ?></td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                      <button type="button" name="button" id="match">Match</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $donor_name ?></td>
                    <td><?php echo $blood_group ?></td>
                    <td>
                      <button type="button" name="button" id="view">View</button>
                      <button type="button" name="button" id="match">Match</button>
                    </td>
                  </tr>
                </table>
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
}

<?php
}
?>
