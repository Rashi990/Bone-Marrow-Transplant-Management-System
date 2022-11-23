<?php
session_start();
include "../../config/connection.php";


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from `hospital` WHERE Hospital_id='$id'";
    $result=mysqli_query($connection,$sql);
    if($result){
       echo "<script>('Record Successfully Deleted');</script>";
       header("Location: admin_viewhospital.php");
    }
    else{
        die('Database connection failed!'.mysqli_connect_error());
}
}



?>