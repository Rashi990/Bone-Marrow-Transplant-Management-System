<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) && isset($_SESSION['hospital_name']) ))
{
    header("Location:hospital_login.php");
}

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql1="DELETE FROM clinician WHERE clinician_id='$id'";
    $result1=mysqli_query($connection,$sql1);

    if($result1){
        $_GLOBAL['cliniciandone']=1;
    }else{
        $_GLOBAL['cliniciandone']=0;
    }

    $sql2="DELETE FROM account WHERE uid='$id'";
    $result2=mysqli_query($connection,$sql2);

    if($result2){
        $_GLOBAL['accountdone']=1;
    }else{
        $_GLOBAL['accountdone']=0;
    }

    if(($_GLOBAL['cliniciandone']==1)&&($_GLOBAL['accountdone']==1)){
        echo "<script>alert('Successfully Deleted !')</script>";
        header("Location:hospital_clinicians.php");
    }else{
        echo "<script>alert('Deletion cannot be done. Please try again ! !')</script>";
    }
}

?>




