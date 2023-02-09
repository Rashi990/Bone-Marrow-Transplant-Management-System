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

  $ID = $_POST['sample_bid'];
  $hname = $_POST['hname'];
  $email = $_POST['email']; 
  $tel = $_POST['tel']; 
  $address = $_POST['address']; 

  $sql="INSERT INTO `hospital`(hospital_id, hospital_name, email, telephone_no, address) VALUES ('$hID','$hname',' $email',' $tel','$address')";
  $result = mysqli_query($connection,$sql);

  if($result) {
    
    header("Location: admin_viewhospital.php");
   
  }
  else{
    die(mysqli_error($connection));
  }

}
?>

 <!-- <?php require_once('admin_footer.php');?> -->