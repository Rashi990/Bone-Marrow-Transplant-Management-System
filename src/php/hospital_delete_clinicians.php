<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) && isset($_SESSION['hospital_name']) ))
{
    header("Location:hospital_login.php");
}

if(isset($_GET['clinician_id'])){
    $cID = mysqli_real_escape_string($connection, $_GET['clinician_id']);
    
    $sql = "DELETE FROM clinician WHERE clinician_id = $cID ";
    $result = mysqli_query($connection,$sql);

    if($result){
        echo "<script type='text/javascript'> alert('Passed') </script>";
        //header("Location:hospital_clinician_list.php");
    }
    else{
        echo "<script type='text/javascript'> alert('Failed') </script>";	;
    }
}

?>

<?php include('../../public/html/hospital_delete_clinicians.html'); ?>



