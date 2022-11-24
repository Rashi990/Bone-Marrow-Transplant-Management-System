<?php require_once('../../config/connection.php'); ?>
<?php 
session_start();
session_unset();
session_destroy();
header("Location:home.php");

?>
