<?php


require_once('../../config/connection.php');


// Prepare the query to insert into the donor_sessions_register table
$sql = "INSERT INTO donor_sessions_register (donor_id, session_id) VALUES (?, ?)";

// Create a prepared statement
$stmt = mysqli_prepare($connection, $sql);

// Bind the parameter values to the placeholders
mysqli_stmt_bind_param($stmt, "ii", $donor_id, $session_id);

// Execute the prepared statement to insert the values into the donor_sessions_register table
mysqli_stmt_execute($stmt);

// Close the prepared statement and database connection
mysqli_stmt_close($stmt);
mysqli_close($connection);



?>
















?>
