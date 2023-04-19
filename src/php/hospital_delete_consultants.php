<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=3)
{
    header("Location:login.php");
}



if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql1="DELETE FROM consultant WHERE consultant_id='$id'";
    $result1=mysqli_query($connection,$sql1);

    if($result1){
        $_GLOBAL['consultantdone']=1;
    }else{
        $_GLOBAL['consultantdone']=0;
    }

    $sql2="DELETE FROM account WHERE uid='$id'";
    $result2=mysqli_query($connection,$sql2);

    if($result2){
        $_GLOBAL['accountdone']=1;
    }else{
        $_GLOBAL['accountdone']=0;
    }

    if(($_GLOBAL['consultantdone']==1)&&($_GLOBAL['accountdone']==1)){
        echo "<script>alert('Successfully Deleted !')</script>";
        header("Location:hospital_consultants.php");
    }else{
        echo "<script>alert('Deletion cannot be done. Please try again ! !')</script>";
    }
}

?>




