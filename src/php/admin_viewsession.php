

<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name'])))
{
    header("Location:admin_login.php");
}
?>
<?php require_once('admin_sidebar.php'); ?>
<?php include('../../public/html/admin_viewsession.html'); ?> 
<?php require_once('admin_footer.php');?>