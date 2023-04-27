<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=0)
{
    header("Location:admin_login.php");
}
 ?>
 <?php
require_once('admin_sidebar.php');
?>
<!-- <?php require_once('admin_footer.php'); ?>    -->
<?php include('../../public/html/admin_select_hospital_2.html'); ?>