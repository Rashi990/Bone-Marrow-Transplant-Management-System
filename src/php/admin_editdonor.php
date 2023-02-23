<?php
session_start();
include "../../config/connection.php";


if (isset($_POST['cancel']))
{
    header("Location: admin_view_donor.php");
}

if(isset($_POST['submit']) )

{
  $id= $_GET['editid'];

  // function validate($data)
  // {
  //   $data = trim($data);
  //   $data = stripslashes($data);
  //   $data = htmlspecialchars($data);
  //   return $data;
  // }
  
  $hID = $_POST['ID'];
  $hname = $_POST['hname'];
  $email = $_POST['email']; 
  $tel = $_POST['tel']; 
  $address = $_POST['address']; 

  $sql="UPDATE `donor` SET ID= $id, hname='$hname',email='$email',tel='$tel',address='$address'";
  $result = mysqli_query($connection,$sql);

  if($result) {
    
    header("Location: admin_viewhospital.php");
   
  }
  else{
    die(mysqli_error($connection));
  }

}
require_once("../../public/html/admin_editdonor.html"); 
?>

 <!-- <?php require_once('admin_footer.php');?> -->