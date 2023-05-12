<?php
session_start();
include "../../config/connection.php";

require_once("../../public/html/admin_add_stock.html"); 
if (isset($_POST['cancel']))
{
    header("Location: admin_viewstock.php");
}
if(isset($_POST['submit']) )
{

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $ID = $_POST['ID'];
  $did = $_POST['DID'];
  $hid = $_POST['HID']; 
  $date = $_POST['date']; 

  $sql="INSERT INTO `bloodbank_stock`(sample_bid, sample_owner_id, hispital_id, expiry_date) VALUES ('$hID','$did',' $hid',' $date')";
  $result = mysqli_query($connection,$sql);

  if($result) {
    
    header("Location: admin_viewstock.php");
   
  }
  else{
    die(mysqli_error($connection));
  }

}
?>

 <!-- <?php require_once('admin_footer.php');?> -->