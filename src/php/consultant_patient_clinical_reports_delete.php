<?php
include '../../config/connection.php';

if(isset($_GET['delete-id'])){
    $id=$_GET['delete-id'];

    $sql="DELETE FROM patient_clinical_reports WHERE patient_cr_id=$id";
    $result=mysqli_query($connection,$sql);
    if($result){
        //echo "Deleted Successfully!";
        header('location:consultant_patient_clinical_manage.php');
    }
    else{
        die(mysqli_error($connection));
    }
}
?>
