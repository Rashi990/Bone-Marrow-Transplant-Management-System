<?php require_once('../../config/connection.php'); 

session_start();
session_unset();
session_destroy();

echo "<script type='text/javascript'>alert('Successfully loggedout!');</script>";

?>
