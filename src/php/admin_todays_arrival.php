<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) && isset($_SESSION['email']) ))
{
    header("Location:admin_login.php");
}
 ?>
 <?php
require_once('admin_sidebar.php');
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
<?php include('../../public/html/admin_todays_arrival.html'); ?>