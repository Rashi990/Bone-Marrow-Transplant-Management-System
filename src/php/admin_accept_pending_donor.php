<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=0)
{
    header("Location:admin_login.php");
}
 ?>
 <?php
require_once('admin_sidebar.php');
?>

<?php

if(isset($_POST['submit']) )
{

  $id=$_GET['id'];
  echo "hello";
  // function validate($data)
  // {
  //   $data = trim($data);
  //   $data = stripslashes($data);
  //   $data = htmlspecialchars($data);
  //   return $data;
  // }

$sql="INSERT INTO `donor`(`donor_name`,`telephone_no`,`email`,`address`,`date_of dirth`,`gender`,`id_number`,`marital_state`,`image`,`blood_group`,`user_name`,`password`) SELECT (CONCAT (first_name,second_name) AS fullname),telephone_no,email,address,date_of_birth,gender,id_number,marital_state,image,blood_group,user_name,password FROM pending_donor where pending_donor_id=$id";
  $result = mysqli_query($connection,$sql);
   if($result) {
    echo "<script> alert('Registration is Failled') </script>";
  }
  else{
    die(mysqli_error($connection));
  } 
}

?>

<!-- <?php require_once('admin_footer.php'); ?>    -->

<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" type="text/css" href="../../public/css/admin_accept_pending_donor.css">
                    <title>SLBTMS</title>
                </head>
                <body>
                    
                </body>
                </html>
                <?php include('../../public/html/admin_accept_pending_donor.html'); ?>