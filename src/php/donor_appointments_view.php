
<?php require_once('donor_sidebar.php');?>


<?php //include('../../public/html/donor_medications.html'); ?>
<?php

require_once('../../config/connection.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/donor_appointments_view.css"> 
    <title>SLBTMS</title>
</head>
<body>

    <!--
    <div class="head">
        <h1>Session Details</h1>
    </div>

    <div class="search">
        <div class="search-bar">
          <span class="material-icons">search</span>
          <input type="search" placeholder="search here">
        </div>
    </div>
    -->

    <div class="session-list">

        <a class="new" href="../../src/php/donor_clinical_history.php">Back to Clinical History</a>
            
        <table class="list">
            
            <tr>
                <th>Appointment No.</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Consultant</th>
                <th>Venue</th>
                <th>Apply Date</th>
                <th>Status</th>
                <th>Remark</th>
               
               
            </tr>
            <?php 


/*

$stmt = mysqli_prepare($connection, "SELECT a.appointment_id, a.appointment_date, a.appointment_time, c.consultant_id, a.appy_date, a.status, a.remarks
                       FROM appointments_donor a
                       INNER JOIN consultant c
                       ON a.consultant_id = c.consultant_id");
                               
                              

 mysqli_stmt_bind_param($stmt, "i", $donor_id);
// Execute query
mysqli_stmt_execute($stmt);

// Bind result variables
mysqli_stmt_bind_result($stmt, $date, $drug_name, $dosage, $route);

// Check if there are any rows
if (mysqli_stmt_fetch($stmt)) {
  $prev_date = "";
  do {
    // Output row with rowspan for date column
    echo "<tr>";
    if ($prev_date != $date) {
      $prev_date = $date;
      echo "<td rowspan='5'>$date</td>";
    }
    echo "<td>$drug_name</td>";
    echo "<td>$dosage</td>";
    echo "<td>$route</td>";
    echo "</tr>";
  } while (mysqli_stmt_fetch($stmt));
} else {
  echo "<tr><td colspan='5'>No data found</td></tr>";
}

// Close statement and database connection
mysqli_stmt_close($stmt);
mysqli_close($connection);
?>

</table>

*/

$stmt =mysqli_prepare($connection,"SELECT a.donor_appointment_id, a.appointment_date, a.appointment_time, c.consultant_name, a.venue, a.apply_date, a.status, a.remark
        FROM appointments_donor a
        INNER JOIN consultant c
        ON a.consultant_id = c.consultant_id
        WHERE a.donor_id = ?");

$donor_id = $_SESSION['donor_id']; 

mysqli_stmt_bind_param($stmt, 'i', $donor_id);
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt, $donor_appointment_id, $appointment_date, $appointment_time, $consultant_name, $venue ,$apply_date,$status,$remark);

while (mysqli_stmt_fetch($stmt)) {
    // access the fields using the bound variables
    echo '<tr>';
    echo '<td>' . $donor_appointment_id . '</td>';
    echo '<td>' . $appointment_date . '</td>';
    echo '<td>' . $appointment_time . '</td>';
    echo '<td>' . $consultant_name . '</td>';
    echo '<td>' . $venue . '</td>';
    echo '<td>' . $apply_date . '</td>';
    echo '<td>' . $status . '</td>';
    echo '<td>' . $remark . '</td>';
    echo '</tr>';
}

mysqli_stmt_close($stmt);






?>















