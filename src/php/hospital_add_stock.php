<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=3)
{
    header("Location:login.php");
}

$uid=$_SESSION['uid'];
$username=$_SESSION['username'];
$hospital_id=$_SESSION['hospital_id'];

$test_id=$_GET['test-id'];



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_add_stock.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Condensed:wght@700&family=Roboto+Slab:wght@700;800&family=Roboto:wght@400;500&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../../public/js/hospital_form_validation.js"></script>
    <title>Add Stock</title>
</head>
<body>

    <div class="add_stock">
        <h1>Add New Samples</h1>

        <form action="../../src/php/hospital_add_stock.php?test-id=<?php echo $test_id; ?>" method="post" class="add_stock_form">

            <div class="row">
                <div class="col-1">
                    <label>Date</label>
                </div>
                <div class="col-2">
                    <input name="date" id="date" value="<?=(isset($date) ? $date : '')?>" type="date" onblur="required_name()" required >
                </div>
            </div>	
            
            <div class="row">
                <div class="col-1">
                    <label>Arrival Time</label>
                </div>
                <div class="col-2">
                    <input name="time" id="time" value="<?=(isset($time) ? $time : '')?>" type="time" onblur="required_name()" required >
                </div>
            </div>		

            <div class="row">
                <div class="col-1">
                    <label>Departure Time</label>
                </div>
                <div class="col-2">
                    <input name="departure_time" id="departure_time" value="<?=(isset($departure_time) ? $departure_time : '')?>" type="time" onblur="required_name()" required >
                </div>
            </div>		

          


            <div class="row">
                <label>&nbsp;</label>
                <input type="submit" name="submit" value="submit" class="btn">
                <a class="back_btn" href="../../src/php/hospital_stock.php">Back</a>
            </div>

        </form>

    </div>

</body>
</html>



<?php

/*
$sql1="SELECT testing.donor_id,donor.donor_id
FROM testing 
INNER JOIN donor ON testing.donor_id=donor.donor_id
WHERE testing.hospital_id=$hospital_id";
$result1=mysqli_query($connection,$sql1);

if (!$result1) {
    die("Query failed: " . mysqli_error($connection));
}

$row1=mysqli_fetch_assoc($result1);
$donor_id = $row1['donor_id'];

*/
    if(isset($_POST['submit'])){

      $date=$_POST['date'];
      $time=$_POST['time'];
      $departure_time=$_POST['departure_time'];

    
      $sql="INSERT INTO `hospital_stock`(`date`, `time`, `departure_time`, `hospital_id`, `test_id`) VALUES ('$date','$time','$departure_time','$hospital_id','$test_id')";

      $result=mysqli_query($connection,$sql);
      
      if($result){
        echo "<script> alert('Sample details are successfully added !') </script>";
        header("Location: hospital_stock.php");
      }else{
        echo "<script> alert('Sample details adding failed !') </script>";
      }
    }

?>