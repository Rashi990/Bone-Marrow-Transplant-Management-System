<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=3)
{
    header("Location:login.php");
}

$uid=$_SESSION['uid'];
$username=$_SESSION['username'];

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

        mysqli_query($con, "INSERT INTO `session`(`session_id`, `session_name`, `session_image`, `date`, `time`, `camp_id`) VALUES ('[$sid]','[$sname]','[$img]','[$sdate]','[$stime]','[$cid]')");
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