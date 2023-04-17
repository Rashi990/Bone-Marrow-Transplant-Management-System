<?php require_once('clinician_navbar.php'); ?>
<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=2)
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
    <link rel="stylesheet" type="text/css" href="../../public/css/clinician_navbar.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/clinician_dashboard.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Top</title>
</head>
<body>
  <div class="top-nav">
    <div class="head">
        <h1>Dashboard</h1>
    </div>

    <div class="search">
        <div class="search-bar">
          <span class="material-icons">search</span>
          <input type="search" placeholder="search here">
        </div>
      </div>

    <div class="top">
      <span class="material-icons">notifications</span>
      <span class="material-icons">chat_bubble</span>
      <div class="Loggedin"> Welcome! <?php echo $username;?></div>
      <span class="material-icons">account_circle</span>
    </div>
  </div>

</body>
</html>

<?php include('../../public/html/clinician_dashboard.html'); ?>
<!--<?php require_once('consultant_footer.php'); ?>-->
