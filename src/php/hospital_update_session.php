
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_add_session.css?v=2">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Condensed:wght@700&family=Roboto+Slab:wght@700;800&family=Roboto:wght@400;500&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
    <title>Add Session</title>
</head>
<body>

<div class="add_session">
    <h1>Edit Session</h1>

    <?php
    require_once('../../config/connection.php');

    // Check if the session ID is provided in the URL parameter
    if (isset($_GET['session_id'])) {
        $sessionId = $_GET['session_id'];

        // Fetch the session data from the database
        $query = "SELECT * FROM session WHERE session_id = $sessionId";
        $result = mysqli_query($connection, $query);

        // Check if the session exists
        if ($row = mysqli_fetch_assoc($result)) {
            // Display the form with the current session values
            echo "<form action='hospital_update_session.php' method='POST'  class=add_session_form>";
           // echo "<input type='hidden' name='session_id' value='" . $row['session_id'] . "'>";

            echo "<p>Session Name: <input type='text' name='session_name' value='" . $row['session_name'] . "'></p><br>";
            echo "<p>Date: <input type='date' name='session_date' value='" . $row['session_date'] . "'></p><br>";
            echo "<p>Time: <input type='time' name='session_time' value='" . $row['session_time'] . "'></p><br>";
            echo "<input type='submit' name='update' value='Update'>";
            echo "</form>";
        } else {
            echo "Session not found.";
        }

        // Free the result set
        mysqli_free_result($result);

        // Close the database connection
        mysqli_close($connection);
    } else {
        echo "Session ID not provided.";
    }
    ?>



<?php
require_once('../../config/connection.php');

if (isset($_POST['update'])) {
    // Get the updated values from the form
  //  $sessionId = $_POST['session_id'];
    $sessionName = $_POST['session_name'];
    $sessionDate = $_POST['session_date'];
    $sessionTime = $_POST['session_time'];

    // Update the session record in the database
    $updateQuery = "UPDATE session SET session_name = '$sessionName', session_date = '$sessionDate', session_time = '$sessionTime' ";
    $updateResult = mysqli_query($connection, $updateQuery);

    if ($updateResult) {
        // Redirect to the session list
        header("Location: hospital_session_list.php");
        exit();
    } else {
        echo "Error updating the session: " . mysqli_error($connection);
    }
}
?>
</body>
</html>










