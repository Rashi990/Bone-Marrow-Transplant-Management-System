<?php
include '../../config/connection.php';

if(isset($_GET['delete-id'])){
    $id=$_GET['delete-id'];

    $sql="DELETE FROM patient_clinical_reports WHERE patient_cr_id=$id";
    $result=mysqli_query($connection,$sql);
    if($result){
        //echo "Deleted Successfully!";
        header('location:consultant_prescriptions.php');
    }
    else{
        die(mysqli_error($connection));
    }
}
?>
