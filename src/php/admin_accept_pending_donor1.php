<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=0)
{
    header("Location:admin_login.php");
}
 ?>
<?php

if (isset($_GET['id']) ) 
{
  $id = $_GET['id'];


  $sql="UPDATE donor SET approve=2 WHERE donor_id=$id";
  $result = mysqli_query($connection,$sql);
  header("Location: admin_view_donor.php");
}
?>

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