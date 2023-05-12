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
      <link rel="stylesheet" type="text/css" href="../../public/css/consultant_prescriptions.css">
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
      <div class="">
        <div class="topic">
          <h2>Patient List</h2>
        </div>
        <div class="mid-bottom">
            <table align="center">
              <tr>
                <th>Patient ID</th>
                <th>Date</th>
                <th>Drug Name</th>
                <th>Dosage</th>
                <th>Route</th>
                <th>Frequency</th>
                <th colspan="2">Action</th>
              </tr>
              <?php
                  $sql="SELECT * FROM patient_clinical_reports ORDER BY date, patient_id, drug_name";
                  $result=mysqli_query($connection,$sql);
                  if($result){
                      while($row=mysqli_fetch_assoc($result)){
                          $patient_cr_id=$row['patient_cr_id'];
                          $patient_id=$row['patient_id'];
                          $date=$row['date'];
                          $drug_name=$row['drug_name'];
                          $dosage=$row['dosage'];
                          $route=$row['route'];
                          $frequency=$row['frequency'];
                          echo '
                            <td>'.$patient_id.'</td>
                            <td>'.$date.'</td>
                            <td>'.$drug_name.'</td>
                            <td>'.$dosage.'</td>
                            <td>'.$route.'</td>
                            <td>'.$frequency.'</td>
                            <td>
                              <button id="btn-view" class="btn">
                                <a href="consultant_patient_reports_view.php?update-id='.$patient_cr_id.'" class="text-light">
                                  View
                                  </a>
                              </button>
                              <button id="btn-update" class="btn">
                                <a href="consultant_patient_prescriptions.php?update-id='.$patient_cr_id.'" class="text-light">
                                  Pres
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
