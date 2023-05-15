<?php require_once('consultant_navbar_prescription.php'); ?>

<?php
require_once('../../config/connection.php');
session_start();

$patient_id=$_GET['update-id'];

if($_SESSION['userlevel']!=1)
{
    header("Location:consultant_login.php");
}

include '../../config/connection.php';

if(isset($_POST['submit'])){
  $patient_id=$_POST['patient_id'];
  $date=$_POST['date'];
  $drug_name=$_POST['drug_name'];
  $dosage=$_POST['dosage'];
  $route=$_POST['route'];
  $frequency=$_POST['frequency'];

  if (empty($patient_id)||empty($date)||empty($drug_name)||empty($dosage)||empty($route)||empty($frequency))
{
  header("Location: consultant_prescription_form.php?error=All feilds are required!");
  exit();
}

    $sql="INSERT INTO patient_clinical_reports(patient_id,date,drug_name,dosage,route,frequency) VALUES($patient_id,'$date','$drug_name','$dosage','$route','$frequency')";
    $result=mysqli_query($connection,$sql);
    if($result){
        //echo "Data inserted successfully";
        header('location:consultant_prescriptions.php');
    }
    else{
        die(mysqli_error($connection));
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_navbar.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_appointment.css" />
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_clinical_form.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Top</title>
</head>
<body>

  <div class="top-nav">
    <div class="head">
        <h1>Prescription</h1>
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
    <?php if (isset($_GET['error'])) {?>
      <p class="error">
        <?php echo ($_GET['error']); ?>
      </p>
    <?php } ?>
    <div id="show_alert">
    </div>
    <div class="form">
      <form class="" action="" method="post">
        <div class="details">
          <div class="d">
            <label class="lbl">Patient ID</label>
            <input type="text" name="patient_id" placeholder="Enter Patient ID" value="<?php echo $patient_id ?>">
          </div>
          <div class="title">
          <p>Clinical Form</p>
        </div>
          <div class="d">
            <label class="lbl">Date</label>
            <input type="date" name="date" placeholder="Choose Date" value="<?php echo $date ?>">
          </div>
        </div>
        <div class="ad">
          <div class="drugs">
            <div class="ds">
              <label class="lbl">Drug Name</label>
              <select class="select" name="drug_name" placeholder="Choose Drug Name">
                <option selected="selected" disabled="disabled">Choose drug name</option>
                <option>Amino Acids</option>
                <option>Amoxapine</option>
                <option>Amoxicillin</option>
                <option>Ampicillin</option>
                <option>Aspirin</option>
                <option>Azithromycin</option>
                <option>Cetirizine</option>
                <option>Dexamethasone</option>
                <option>Flagyl</option>
                <option>Fluconazole</option>
                <option>Insulin</option>
                <option>Lactulose</option>
                <option>Magnesium sulfate</option>
                <option>Metformin hydrochloride</option>
                <option>Omeprazole</option>
                <option>Panadeine</option>
                <option>Vermox</option>
                <option>Vitamin-A</option>
                <option>Vitamin-C</option>
                <option>Vitamin-K1</option>
              </select>
            </div>
            <div class="ds">
              <label class="lbl">Dosage</label>
              <select class="select" name="dosage">
                <option selected="selected" disabled="disabled">Choose dosage</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
              </select>
            </div>
            <div class="ds">
              <label class="lbl">Route</label>
              <select class="select" name="route" placeholder="Choose Route">
                <option selected="selected" disabled="disabled">Choose route</option>
                <option>one time a day</option>
                <option>two times a day</option>
                <option>three times a day</option>
                <option>four times a day</option>
                <option>1mg per hour</option>
                <option>10mg per hour</option>
                <option>50mg per day</option>
                <option>100mg per day</option>
              </select>
            </div>
            <div class="ds">
              <label class="lbl">Frequency</label>
              <select class="select" name="frequency" placeholder="Choose Frequency">
                <option selected="selected" disabled="disabled">Choose frequency</option>
                <option>1 day</option>
                <option>2 days</option>
                <option>3 days</option>
                <option>4 days</option>
                <option>5 days</option>
                <option>6 days</option>
                <option>1 week</option>
                <option>8 days</option>
                <option>9 days</option>
                <option>10 days</option>
                <option>11 days</option>
                <option>12 days</option>
                <option>2 weeks</option>
                <option>3 weeks</option>
                <option>1 month</option>
                <option>1 month and 2 weeks</option>
                <option>2 month</option>
                <option>3 month</option>
                <option>24 hours</option>
                <option>48 hours</option>
                <option>72 hours</option>
              </select>
            </div>
            <div class="db">
              <button class="add">
                <a href="add.php">
                  +
                </a>
              </button>
            </div>
          </div>
        </div>
        <div class="btns">
          <button type="submit" name="submit" id="add_btn">Add Records</button>
          <button type="button" name="button"><a id="butt" href="consultant_prescriptions.php">View Records</a></button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  </script>
  <script>
    $(document).ready(function(){
      $(".add").click(function(e){
        e.preventDefault();
        $(".ad").prepend(`<div class="drugs append_items">
          <div class="ds">
            <label class="lbl">Drug Name</label>
            <select class="select" name="drug_name" placeholder="Choose Drug Name">
              <option selected="selected" disabled="disabled">Choose drug name</option>
              <option>Amino Acids</option>
              <option>Amoxapine</option>
              <option>Amoxicillin</option>
              <option>Ampicillin</option>
              <option>Aspirin</option>
              <option>Azithromycin</option>
              <option>Cetirizine</option>
              <option>Dexamethasone</option>
              <option>Flagyl</option>
              <option>Fluconazole</option>
              <option>Insulin</option>
              <option>Lactulose</option>
              <option>Magnesium sulfate</option>
              <option>Metformin hydrochloride</option>
              <option>Omeprazole</option>
              <option>Panadeine</option>
              <option>Vermox</option>
              <option>Vitamin-A</option>
              <option>Vitamin-C</option>
              <option>Vitamin-K1</option>
            </select>
          </div>
          <div class="ds">
            <label class="lbl">Dosage</label>
            <select class="select" name="dosage">
              <option selected="selected" disabled="disabled">Choose dosage</option>
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>09</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
            </select>
          </div>
          <div class="ds">
            <label class="lbl">Route</label>
            <select class="select" name="route" placeholder="Choose Route">
              <option selected="selected" disabled="disabled">Choose route</option>
              <option>one time a day</option>
              <option>two times a day</option>
              <option>three times a day</option>
              <option>four times a day</option>
              <option>1mg per hour</option>
              <option>10mg per hour</option>
              <option>50mg per day</option>
              <option>100mg per day</option>
            </select>
          </div>
          <div class="ds">
            <label class="lbl">Frequency</label>
            <select class="select" name="frequency" placeholder="Choose Frequency">
              <option selected="selected" disabled="disabled">Choose frequency</option>
              <option>1 day</option>
              <option>2 days</option>
              <option>3 days</option>
              <option>4 days</option>
              <option>5 days</option>
              <option>6 days</option>
              <option>1 week</option>
              <option>8 days</option>
              <option>9 days</option>
              <option>10 days</option>
              <option>11 days</option>
              <option>12 days</option>
              <option>2 weeks</option>
              <option>3 weeks</option>
              <option>1 month</option>
              <option>1 month and 2 weeks</option>
              <option>2 month</option>
              <option>3 month</option>
              <option>24 hours</option>
              <option>48 hours</option>
              <option>72 hours</option>
            </select>
          </div>
          <div class="db">
            <button class="remove">
              <a href="remove.php">
                -
              </a>
            </button>
          </div>
        </div>`);
      });
      $(document).on('click', '.remove', function(e){
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
      });

      /*$(".form").submit(function(e){
        e.preventDefault();
        $("#add_btn").val('Adding...');
        $.ajax({
          url: 'action.php',
          method: 'post',
          data: $(this).serialize(),
          success:function(response){
            console.log(response);
          }
        });
      });*/

    });
  </script>

</body>
</html>

<!--<?php require_once('consultant_footer.php'); ?>-->
