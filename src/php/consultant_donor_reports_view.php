<?php
require_once('consultant_navbar_reports.php');
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['username']))) {
    header("Location:consultant_login.php");
}

//if (isset($_GET['report-id'])) {
  $donor_id = $_GET['report-id'];

  $sql2 = "SELECT * FROM donor_clinical_reports INNER JOIN donor ON donor_clinical_reports.donor_id=donor.donor_id";
  $result2 = mysqli_query($connection, $sql2);
  if ($result2) {
    while ($rows = mysqli_fetch_assoc($result2)) {
      $donor_cr_id = $rows['donor_cr_id'];
      $donor_name = $rows['donor_name'];
      $email = $rows['email'];
      $telephone_no = $rows['telephone_no'];
      $date_of_birth = $rows['date_of_birth'];
      $gender = $rows['gender'];
      $weight = $rows['weight'];
      $blood_group = $rows['blood_group'];
      $hospital_id = $rows['hospital_id'];
      $date = $rows['date'];
      $blood_pressure = $rows['blood_pressure'];
      $pulse_rate = $rows['pulse_rate'];
      $allergies = $rows['allergies'];
      $disabilities = $rows['disabilities'];
      $diet = $rows['diet'];
      $examinations = $rows['examinations'];
      $follow_ups = $rows['follow_ups'];
      $weight=$rows['weight'];
    }
  }

  $sql3 = "SELECT * FROM donor_medical_reports LEFT JOIN donor_clinical_reports ON donor_medical_reports.donor_cr_id=donor_clinical_reports.donor_cr_id";
  $result3 = mysqli_query($connection, $sql3);
  if ($result3) {
    while ($rows = mysqli_fetch_assoc($result3)) {
      $donor_mr_id = $rows['donor_mr_id'];
      $diagnosed_with = $rows['diagnosed_with'];
      $drugs = $rows['drugs'];
      $unit = $rows['unit'];
      $dosage = $rows['dosage'];
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Generation</title>
    <link rel="stylesheet" href="../../public/css/consultant_reports_view.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
  </head>

  <body>

    <div class="top-nav">
      <div class="head">
          <h1>Reports</h1>
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
      <div id="whatToPrint">
        <div class="row1">
          <p class="date"><?php echo $date; ?></p>
        </div>
        <div class="row1">
          <h1>Donor <?php echo $donor_id; ?> Medical Records</h1>
        </div>
        <div class="row2">
          <div class="col">
            <h4>Name</h4>
            <p><?php echo $donor_name; ?></p>
          </div>
          <div class="col">
            <h4>Date of Birth</h4>
            <p><?php echo $date_of_birth; ?></p>
          </div>
          <div class="col">
            <h4>Telephone Number</h4>
            <p><?php echo $telephone_no; ?></p>
          </div>
          <div class="col">
            <h4>Gender</h4>
            <p><?php echo $gender; ?></p>
          </div>
        </div>
        <div class="row2">
          <div class="col">
            <h4>Blood Group</h4>
            <p><?php echo $blood_group; ?></p>
          </div>
          <div class="col">
            <h4>Blood Pressure</h4>
            <p><?php echo $blood_pressure; ?></p>
          </div>
          <div class="col">
            <h4>Pulse Rate</h4>
            <p><?php echo $pulse_rate; ?></p>
          </div>
          <div class="col">
            <h4>Allergies</h4>
            <p><?php echo $allergies; ?></p>
          </div>
        </div>
        <div class="row2">
          <div class="col">
            <h4>Diagnosed With</h4>
            <p><?php echo $diagnosed_with; ?></p>
          </div>
          <div class="col">
            <h4>Drugs</h4>
            <p><?php echo $drugs; ?></p>
          </div>
          <div class="col">
            <h4>Unit</h4>
            <p><?php echo $unit; ?></p>
          </div>
          <div class="col">
            <h4>Dosage</h4>
            <p><?php echo $dosage; ?></p>
          </div>
        </div>
        <a href="javascript:generatePDF()" id="downloadButton">Click to Download</a>
        <script type="text/javascript">
          async function generatePDF() {
            document.getElementById("downloadButton").innerHTML = "";
            //Get the Element to be Downloaded
            var downloading = document.getElementById("whatToPrint");
            //Create a jason.pdf ('orientation', 'dimention', 'pdf size')
            var doc = new jsPDF('1', 'pt');
            await html2canvas(downloading, {
              //allowTaint: true,
              //useCORS: true,
              width: 1000
            }).then((canvas)=>{
              //Get a canvas to convert to PNG
              doc.addImage(canvas.toDataURL("image/png"), 'PNG', 25, 5, 500, 300);
            })
            doc.save("Document.pdf");
            //downloading Code
            document.getElementById("downloadButton").innerHTML = "Click to Download";
          }
        </script>
      </div>
    </div>
  </body>
</html>
