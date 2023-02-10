<?php
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
  else{
    die(mysqli_error($connection));
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient Details</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/clinician_patient_details_view.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>

    <div class="board">

      <!--Requests List-->
      <div class="match">
        <div class="patient-details">
          <h4 align="center">Patient Details</h4>
          <table class="pd" align="center">
            <tr>
              <td>Patient ID</td>
              <td>: <?php echo $patient_id ?></td>
            </tr>
            <tr>
              <td>Patient Name</td>
              <td>: <?php echo $patient_name ?></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td>: <?php echo $gender ?></td>
            </tr>
            <tr>
              <td>Age</td>
              <td>: 26</td>
            </tr>
            <tr>
              <td>Blood Group</td>
              <td>: <?php echo $blood_group ?></td>
            </tr>
            <tr>
              <td>HLA Antigen Type</td>
              <td>: <?php echo $hla_antigen ?></td>
            </tr>
            <tr>
              <td>HLA Allele Family</td>
              <td>: <?php echo $hla_allele_family ?></td>
            </tr>
            <tr>
              <td>HLA Second Type</td>
              <td>: <?php echo $hla_2nd_type ?></td>
            </tr>
            <tr>
              <td>HLA Third Type</td>
              <td>: <?php echo $hla_3rd_type ?></td>
            </tr>
            <tr>
              <td>HLA Fourth Type</td>
              <td>: <?php echo $hla_4th_type ?></td>
            </tr>
            <tr>
              <td>HLA Fifth Type</td>
              <td>: <?php echo $hla_5th_type ?></td>
            </tr>
          </table>
        </div>
        <div class="patient-diseases">
          <h4 align="center">Details of Diseases</h4>
          <table class="dd" align="center">
            <tr>
              <th>Problems</th>
              <th>Medications</th>
              <th>Tests</th>
              <th>Reports</th>
            </tr>
            <tr>
              <td>Diabetes</td>
              <td>Metfomin</td>
              <td>FBS</td>
              <td>
                <button type="button" name="button" id="view">View</button>
              </td>
            </tr>
            <tr>
              <td>Chest Pain</td>
              <td>Atrova</td>
              <td>Chest X-ray</td>
              <td>
                <button type="button" name="button" id="view">View</button>
              </td>
            </tr>
            <tr>
              <td>Kidney Stone</td>
              <td>Amoxillin</td>
              <td>CT Scan</td>
              <td>
                <button type="button" name="button" id="view">View</button>
              </td>
            </tr>
            <tr>
              <td>Knee Pain</td>
              <td>Anillin</td>
              <td>MRI Scan</td>
              <td>
                <button type="button" name="button" id="view">View</button>
              </td>
            </tr>
          </table>
        </div>
      </div>

        <!--Section1-->
        <div class="data">
          <div class="buttons">
            <a href="#">Do the Matching</a>
          </div>
          <div class="selected-donors">
            <h4 align="center">Selected Donor List</h4>
            <table  class="dd" align="center">
              <tr>
                <th>Donor ID</th>
                <th class="long">Donor Name</th>
                <th>Blood Group</th>
                <th class="long">HLA Type</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_donor_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_donor_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_donor_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_patient_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_patient_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_patient_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_patient_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_patient_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_patient_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_patient_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_patient_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_patient_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_patient_details.php" class="view">View</a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Malki Nethusha</td>
                <td>B+</td>
                <td>HLA-C 08 01 01 01 L</td>
                <td>
                  <a href="../../src/php/clinician_patient_details.php" class="view">View</a>
                </td>
              </tr>
            </table>
          </div>
        </div>

    </div>
  </body>
</html>

}

<?php
}
?>
