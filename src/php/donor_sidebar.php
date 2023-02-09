


<?php
require_once('../../config/connection.php');

session_start();
if (!(isset($_SESSION['user_name']) && isset($_SESSION['donor_id']) ))
{
    header("Location:donor_login.php");
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../public/css/donor_clinical_history.css">
    <link rel="stylesheet" href="../../public/css/donor_sidebar.css">
    <link rel="stylesheet" href="../../public/css/donor_session.css">
    <link rel="stylesheet" href="../css/donor_transplant_request.css">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>SLBMTS</title>





    
</head>
<body>
    
<div class="header">
<div class="top">
    <div class="tp-lft">
        <span class="material-icons">notifications</span>
        <span class="material-icons">chat_bubble</span>
        <div class="Loggedin"> Welcome! <?php echo $_SESSION['user_name'];?></div>
        <span class="material-icons">account_circle</span>
      </div>
</div>
</div>


</body>
</html>
<?php include('../../public/html/donor_sidebar.html'); ?>















