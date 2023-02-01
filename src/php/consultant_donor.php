<?php require_once('consultant_navbar_donor.php'); ?>
<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']) ))
{
    header("Location:consultant_login.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_navbar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Top</title>
</head>
<body>

<div class="top">
        <span class="material-icons">home</span>
        <span class="material-icons">notifications</span>
        <span class="material-icons">chat_bubble</span>
        <div class="Loggedin"> Welcome! <?php echo $_SESSION['consultant_name'];?></div>
        <span class="material-icons">account_circle</span>
      </div>

</body>
</html>

<?php include('../../public/html/consultant_donor.html'); ?>
<!--<?php require_once('consultant_footer.php'); ?>-->
