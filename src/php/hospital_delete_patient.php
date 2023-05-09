<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=3)
{
    header("Location:login.php");
}


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $patient_id=intval(substr($id, 3));

    $sql="DELETE FROM patient WHERE patient_id='$patient_id'";
    $result=mysqli_query($connection,$sql);

    if($result){
        echo "<script>alert('Successfully Deleted !')</script>";
        header("Location:hospital_all_patients.php");
    }else{
        echo "<script>alert('Deletion cannot be done. Please try again ! !')</script>";
    }
    

}

?>

