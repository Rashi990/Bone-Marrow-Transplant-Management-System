<?php
require_once('admin_sidebar.php');
?>
<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) ))
{
    header("Location:admin_login.php");
}
?>