<?php
require_once('../../config/connection.php');
session_start();
if(! (isset($_SESSION['user_name']) && isset($_SESSION['hospital_name']) ) )
{
    header("Location:hospital_login.php");
}

    //$errors = array();

    if(isset($_POST['submit'])){
        $cid = $_POST['camp_id'];
        $sid = $_POST['session_id'];
        $sname = $_POST['session_name'];
        $sdate = $_POST['date'];
        $stime = $_POST['time'];
        $img = $_FILES['session_image'];
        print_r($_FILES['session_image']);
        $img_loc = $_FILES['session_image']['tmp_name'];
        $img_name = $_FILES['session_image']['name'];
        move_uploaded_file($img_loc,'../../public/images/uploadimages/'.$img_name);
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


    <!--
    <div class="create_session">

        <form action="../../src/php/hospital_create_session.php" method="post" class="create_session_form"></form>

        <p>
            <label for="">Camp ID</label>
            
        </p>

        <p>
            <label for="">Session ID</label>
            <input type="text" name="session_id">
        </p>

        <p>
            <label for="">Session Name</label>
            <input type="text" name="session_name">
        </p>

    </div>
-->
        
    </body>
    </html>

<?php include('../../public/html/hospital_create_session.html');?>