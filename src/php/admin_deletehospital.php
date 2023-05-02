<?php
session_start();
include "../../config/connection.php";


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from `hospital` WHERE Hospital_id='$id'";
    $result1=mysqli_query($connection,$sql);
    if($result1){
        $_GLOBAL['hospitaldone']=1;
    }else{
        $_GLOBAL['hospitaldone']=0;
    }

    $sql2="DELETE FROM account WHERE uid='$id'";
    $result2=mysqli_query($connection,$sql2);

    if($result2){
        $_GLOBAL['accountdone']=1;
    }else{
        $_GLOBAL['accountdone']=0;
    }
    if(($_GLOBAL['hospitaldone']==1)&&($_GLOBAL['accountdone']==1)){
       echo" <script>alert('Successfully Deleted !')</script>";
       header("Location: admin_viewhospital.php");
    }
    else{
        die('Database connection failed!'.mysqli_connect_error());
}
}



?>