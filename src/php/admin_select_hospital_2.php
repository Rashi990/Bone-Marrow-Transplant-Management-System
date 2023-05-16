<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=0)
{
    header("Location:admin_login.php");
}
?>

<?php
  if (isset($_GET['id']) && isset($_GET['hid'])) {
      $id = $_GET['id'];
      $hid = $_GET['hid'];

      $sql="INSERT INTO `testing`(donor_id, hospital_id) VALUES ('$id','$hid')";
      $result = mysqli_query($connection,$sql);
    
      if($result) {
        $sql2 = "UPDATE donor SET hos_add=1 WHERE donor_id=$id";
        $result = $connection->query($sql2);
       header("Location: admin_viewrequest.php");
       
      }
      else{
        die(mysqli_error($connection));
      }
  } 
  ?>

 <?php
require_once('admin_sidebar.php');
?>

<?php include('../../public/html/admin_select_hospital_2.html'); ?>
