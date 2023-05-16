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

if(isset($_GET['updateid'])){
    $clinician_id=$_GET['updateid'];

    $sql1="SELECT * FROM clinician WHERE hospital_id=$hospital_id AND clinician_id=$clinician_id";
    $result1=mysqli_query($connection,$sql1);
   if($result1){
    while($row=mysqli_fetch_assoc($result1)){
        $cID = $row['clinician_id'];
        $clinician_name = $row['clinician_name'];
        $c_email = $row['email'];
        $tele = $row['telephone_no'];
        $address = $row['address'];
        //$c_username = $row['username'];
        //$c_password = $row['password'];
		//$conpassword=$row['conpassword'];
    }
   }

   $sql2="SELECT * FROM account WHERE uid=$uid";
   $result2=mysqli_query($connection,$sql2);
   if($result2){
    while($row=mysqli_fetch_assoc($result2)){
        //$c_username = $row['username'];
        //$conpassword = $row['password'];
   }
}

   if(isset($_POST['submit'])){
        $clinician_name = $_POST['clinician_name'];
        $c_email = $_POST['email'];
        $tele = $_POST['telephone_no'];
        $address = $_POST['address'];
        //$c_username = $_POST['username'];
        //$c_password = $_POST['password'];
        //$conpassword=$_POST['conpassword']; 

        $sql3="UPDATE clinician SET clinician_id= $clinician_id, clinician_name='$clinician_name', email='$c_email', telephone_no='$tele', address='$address', username='$c_username' WHERE clinician_id=$clinician_id";
        $result3=mysqli_query($connection,$sql3);
        if($result3){
            echo "<script> alert('Sucessfully updated') </script>";
			header("Location: hospital_clinicians.php");

            //$sql4="UPDATE account SET uid=$uid, username=$c_username";
            //$result4=mysqli_fetch_assoc($connection,$sql4);
            
        }

        echo "<script> alert('Failed') </script>";
   }

}

 ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_update_clinicians.css">
                    <title>Document</title>
                </head>
                <body>

                </body>
                </html>




<?php include('../../public/html/hospital_update_clinicians.html'); ?>