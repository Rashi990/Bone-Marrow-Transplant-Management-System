<?php
require_once('../../config/connection.php');
session_start();
if ($_SESSION['userlevel'] != 3) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['session_id'])) {
    // Get the session ID from the URL parameter
    $sessionId = $_GET['session_id'];

    // Delete the session record from the database
    $deleteQuery = "DELETE FROM session WHERE session_id = $sessionId";
    $deleteResult = mysqli_query($connection, $deleteQuery);

    if ($deleteResult) {
        // Redirect to the updated session list
        header("Location: hospital_session_list.php");
        exit();
    } else {
        echo "Error deleting the session: " . mysqli_error($connection);
    }
}
?>

