<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=3)
{
    header("Location:login.php");
}

$uid=$_SESSION['uid'];
$username=$_SESSION['username'];


 ?>
        
        <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate and sanitize the form input
    $sessionName = $_POST["session_name"] ?? '';
    $sessionTime = $_POST["session_time"] ?? '';
    $sessionDate = $_POST["session_date"] ?? '';

    // Validate the required fields
    if (empty($sessionName) || empty($sessionTime) || empty($sessionDate)) {
        echo "Please fill all the required fields.";
        exit;
    }

    // Get the hospital ID from the session or any other means
    $hospitalId = $_SESSION['hospital_id'];

    // Retrieve the selected campaign from the form
    $selectedCampaign = $_POST['campaign'];



    // Prepare the SQL statement to insert the session
    $sessionSql = "INSERT INTO session (session_name, session_time, session_date, hospital_id) VALUES (?, ?, ?, ?)";
    $sessionStmt = $connection->prepare($sessionSql);
    $sessionStmt->bind_param("sssi", $sessionName, $sessionTime, $sessionDate, $hospitalId);

    // Execute the session statement
    if ($sessionStmt->execute()) {
        $sessionId = $sessionStmt->insert_id; // Get the inserted session ID

        // Prepare the SQL statement to insert the campaign-session relationship
        $campaignSessionSql = "INSERT INTO camp_session (camp_id, session_id) VALUES (?, ?)";
        $campaignSessionStmt = $connection->prepare($campaignSessionSql);
        $campaignSessionStmt->bind_param("ii", $selectedCampaign, $sessionId);

        // Execute the campaign-session statement
        if ($campaignSessionStmt->execute()) {
            echo "Session data inserted successfully.";
        } else {
            echo "Error inserting campaign-session relationship: " . $campaignSessionSql . "<br>" . $connection->error;
        }

        $campaignSessionStmt->close();
    } else {
        echo "Error inserting session data: " . $sessionSql . "<br>" . $connection->error;
    }

    // Close the connection
    $sessionStmt->close();
    $connection->close();
}
?>
