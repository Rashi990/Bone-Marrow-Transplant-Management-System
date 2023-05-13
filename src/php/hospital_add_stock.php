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

//$test_id=$_GET['test-id'];

if (isset($_GET['test-id'])) {
  $test = $_GET['test-id'];
  //
} else {
  echo "<script> alert('Invalid id !') </script>";
}

?>

<?php

    if(isset($_POST['submit'])){

      $date=$_POST['date'];
      $time=$_POST['time'];
      $departure_time=$_POST['departure_time'];


      $sql="IINSERT INTO `hospital_stock`(`date`, `time`, `departure_time`, `hospital_id`, `test_id`) VALUES ('$date','$time','$departure_time','$hospital_id','$test')";

      $result=mysqli_query($connection,$sql);
      
      if($result){
        echo "<script> alert('Sample details are successfully added !') </script>";
        header("Location: hospital_stock.php");
      }else{
        echo "<script> alert('Sample details adding failed !') </script>";
      }
    }

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_navbar.css?v=1">
    <title>Document</title>
 </head>
 <body>

 <!--
 <div class="top-nav">

<div class="head">
    <h1>Add Patient</h1>
</div>

  <div class="search">
  <div class="search-bar">
    <span class="material-icons">search</span>
    <input type="search" placeholder="search here">
  </div>
  </div>
-->

<!--
<div class="top">
        <span class="material-icons">notifications</span>
        <span class="material-icons">chat_bubble</span>
        <div class="Loggedin"> Welcome! <?php echo $username;?></div>
        <span class="material-icons">account_circle</span>
      </div>


-->
 </body>
 </html>

<?php include('../../public/html/hospital_add_stock.html'); ?>
<!--<?php require_once('hospital_footer.php'); ?>-->