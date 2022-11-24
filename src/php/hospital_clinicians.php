<?php require_once('hospital_navbar.php'); ?>
<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) && isset($_SESSION['hospital_name']) ))
{
    header("Location:hospital_login.php");
}

$clinician_list = '';
 
$query = "SELECT * FROM clinicians ORDER BY clinician_id ";
$clinicians = mysqli_query($connection,$query);



 ?>

<?php include('../../public/html/hospital_clinicians.html'); ?>
<?php require_once('hospital_footer.php'); ?>