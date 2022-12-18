<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) && isset($_SESSION['email']) ))
{
    header("Location:admin_login.php");
}
 ?>
 <?php
require_once('admin_sidebar.php');
?>
<!-- <?php require_once('admin_footer.php'); ?>    -->
<?php include('../../public/html/admin_select_hospital.html'); ?>