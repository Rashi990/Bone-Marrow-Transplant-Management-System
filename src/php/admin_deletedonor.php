<?php
session_start();
include "../../config/connection.php";


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE from `donor` WHERE donor_id='$id'";
    $result=mysqli_query($connection,$sql);
    if($result){
       echo" <script> </script>";
       header("Location: admin_view_donor.php");
    }
    else{
        die('Database connection failed!'.mysqli_connect_error());
}
}



?>