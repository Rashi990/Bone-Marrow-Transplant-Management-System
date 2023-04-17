<?php require_once('hospital_navbar.php'); ?>
<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=3)
{
    header("Location:login.php");
}

$uid=$_SESSION['uid'];
$username=$_SESSION['username'];

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
 <div class="top">
        <span class="material-icons">notifications</span>
        <span class="material-icons">chat_bubble</span>
        <div class="Loggedin"> Welcome! <?php echo $username;?></div>
        <span class="material-icons">account_circle</span>
      </div>
 </body>
 </html>

<?php include('../../public/html/hospital_view_matching_req.html'); ?>
<!--<?php require_once('hospital_footer.php'); ?>-->