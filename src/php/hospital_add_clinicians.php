<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) && isset($_SESSION['hospital_name']) ))
{
    header("Location:hospital_login.php");
}
 ?>

 


<?php include('../../public/html/hospital_add_clinicians.html'); ?>
<?php require_once('hospital_footer.php'); ?>