<?php   require_once('../../config/connection.php');?>
<?php
session_start();
if (isset($_SESSION['user_name']))
   {
?>

<?php  include('../../public/html/admin_dashboard.html'); ?>
    <?php require_once('admin_footer.php');?>
<?php
   }
   ?>