<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=3)
{
    header("Location:login.php");
}

$uid=$_SESSION['uid'];
$username=$_SESSION['username'];

if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];

   
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



?>
<?php include('../../public/html/hospital_update_clinicians.html'); ?>