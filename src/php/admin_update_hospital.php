
<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=0)
{
    header("Location:admin_login.php");
}
?>

<?php include('../../public/html/admin_update_hospital.html'); 
if (isset($_POST['cancel']))
{
    header("Location: admin_viewhospital.php");
}
?>
