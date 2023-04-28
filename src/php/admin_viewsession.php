<?php
require_once('../../config/connection.php');
session_start();
if (($_SESSION['userlevel']!=0))
{
    header("Location:admin_login.php");
}
?>
<?php require_once('admin_sidebar.php'); ?>
<?php include('../../public/html/admin_viewsession.html'); ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/admin_viewsession.css">
</head>
<body>


</body>

</html>