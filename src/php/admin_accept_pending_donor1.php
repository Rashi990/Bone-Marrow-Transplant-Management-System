<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=0)
{
    header("Location:admin_login.php");
}
 ?>
<?php

if(isset($_GET['submit']) )
{

//   $id=$_GET['id'];
//   echo $id;
  // function validate($data)
  // {
  //   $data = trim($data);
  //   $data = stripslashes($data);
  //   $data = htmlspecialchars($data);
  //   return $data;
  // }

$sql2="INSERT INTO `donor`(`donor_name`,`telephone_no`,`email`,`address`,`date_of dirth`,`gender`,`id_number`,`marital_state`,`image`,`blood_group`,`user_name`,`password`) SELECT CONCAT_WS (' ',`first_name`,`second_name`) AS fullname,`telephone_no`,`email`,`address`,`date_of_birth`,`gender`,`id_number`,`marital_state`,`image`,`blood_group`,`user_name`,`password` FROM `pending_donor` WHERE `pending_donor_id`=3";
  $result = mysqli_query($connection,$sql2);
   if($result) {
    echo "<script> alert('Registration is Failled') </script>";
  }
  else{
    die(mysqli_error($connection));
  } 
}

?>