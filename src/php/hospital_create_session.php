<?php
require_once('../../config/connection.php');
session_start();
if(!(isset($_SESSION['username'])&&($_SESSION['hospital_name'])))
{
    header("Location:hospital_login.php");
}

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../public/css/hospital_create_session.css">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>

<?php include('../../public/html/hospital_create_session.html');?>