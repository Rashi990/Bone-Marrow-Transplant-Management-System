  <?php require_once('consultant_navbar_prescription.php'); ?>
  <?php
  require_once('../../config/connection.php');
  session_start();
  if (!(isset($_SESSION['username'])))
  {
      header("Location:consultant_login.php");
  }
   ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="../../public/css/consultant_prescriptions.css?v=2">
      <link rel="stylesheet" type="text/css" href="../../public/css/consultant_navbar.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <title>Top</title>
  </head>
  <body>

    <div class="top-nav">
      <div class="head">
          <h1>Prescriptions</h1>
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
      <div class="tabs">
        <div class="tab-selected">
          <a>
            <button type="button" name="button">Patient</button>
          </a>
        </div>
        <div class="tab">
          <a href="consultant_donor_prescription.php">
            <button type="button" name="button">Donor</button>
          </a>
        </div>
      </div>
      <div class="scroll">
        <div class="topic">
          <h2>Patient List</h2>
        </div>
        <div class="mid-bottom">
            <table align="center">
              <tr>
                <th class="th1">Patient ID</th>
                <th class="th2">Patient Name</th>
                <th class="th1">Age</th>
                <th class="th1">Blood Group</th>
                <th class="th2">Diagnosis</th>
                <th class="th2">email</th>
                <th class="th2" colspan="2">Action</th>
              </tr>
              <?php
                  $sql="SELECT * FROM patient";
                  $result=mysqli_query($connection,$sql);
                  if($result){
                      while($row=mysqli_fetch_assoc($result)){
                          $patient_id=$row['patient_id'];
                          $patient_name=$row['patient_name'];
                          $age=$row['age'];
                          $blood_group=$row['blood_group'];
                          $diagnosis=$row['diagnosis'];
                          $email=$row['email'];
                          echo '
                            <td>'.$patient_id.'</td>
                            <td>'.$patient_name.'</td>
                            <td>'.$age.'</td>
                            <td>'.$blood_group.'</td>
                            <td>'.$diagnosis.'</td>
                            <td>'.$email.'</td>
                            <td>
                              <a class="view" href="consultant_reports_view.php?report-id='.$patient_id.'" class="text-light">
                                <abbr title="View"><span class="material-icons">visibility</span></abbr>
                              </a>
                              <a class="prescription" href="consultant_patient_prescriptions.php?update-id='.$patient_id.'" class="text-light">
                                <abbr title="Prescription"><span class="material-symbols-outlined">prescriptions</span></abbr>
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
    </div>

  </body>
  </html>

  <!--<?php require_once('consultant_footer.php'); ?>-->
