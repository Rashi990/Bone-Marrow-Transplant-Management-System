
<?php require_once('donor_sidebar.php');?>

<?php require_once("../../config/connection.php")?>
<?php // include('../../public/html/donor_clinical_history.html'); ?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/donor_sidebar.css">
    <link rel="stylesheet" href="../../public/css/donor_clinical_history.css">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,500;1,700&display=swap" rel="stylesheet">
    <title>SLBTMS</title>
</head>
<body>
    <!---
   <div class="header">
    <div class="top">
        <h1>Clinical History</h1>
    </div>
    </div>-->
    


    <!-- home section -->
    <div class="container">

<div class="backboard">
        <div class="appointment-details">
            <div class="current-medication">
                <h2>Latest Medication</h2><br>
                <div class="medi-card1">
                   
                <?php

// Retrieve data from database
$stmt = mysqli_prepare($connection, "SELECT cr.date, d.drug_name, d.dosage, dd.route 
                               FROM donor_clinical_reports cr 
                               INNER JOIN donor_drugs dd ON cr.donor_cr_id = dd.donor_cr_id 
                               INNER JOIN drugs d ON dd.drug_id = d.drug_id 
                               WHERE cr.donor_id = ?
                               AND cr.date = (SELECT MAX(date) FROM donor_clinical_reports WHERE donor_id = ?)
                               ORDER BY cr.date DESC");

$donor_id = $_SESSION['donor_id'];                               

mysqli_stmt_bind_param($stmt, "ii", $donor_id, $donor_id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $date, $drug_name, $dosage, $route);

// Initialize variables for rowspan
$prev_date = "";
$rowspan = 0;

// Display date and medication information
if (mysqli_stmt_fetch($stmt)) {
    echo "<h3>$date</h3>";
    echo "<div class='list'><ul>";
    echo "<li><strong>$drug_name:</strong> $dosage, $route</li>";
    $rowspan++;
    // Output medication information for current date
    while (mysqli_stmt_fetch($stmt)) {
        echo "<li><strong>$drug_name:</strong> $dosage, $route</li>";
        $rowspan++;
    }
}

// Close list if medication data was found
if ($rowspan > 0) {
    echo "</ul></div>";
} else {
    echo "<p>No data found</p>";
}


?>
 <div class="view_medications">
                    <a href="../../src/php/donor_medications.php">View More</a>
                </div>

<?php 
$stmt = mysqli_prepare($connection, "SELECT a.donor_appointment_id, a.appointment_date, a.appointment_time, c.consultant_name, a.venue
    FROM appointments_donor a
    INNER JOIN consultant c ON a.consultant_id = c.consultant_id
    WHERE a.donor_id = ? AND a.appointment_date >= CURDATE() ORDER BY a.appointment_date, a.appointment_time LIMIT 1");

$donor_id = $_SESSION['donor_id']; 

mysqli_stmt_bind_param($stmt, 'i', $donor_id);
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt, $donor_appointment_id, $appointment_date, $appointment_time, $consultant_name, $venue);

if (mysqli_stmt_fetch($stmt)) {
    // access the fields using the bound variables
    echo '<div class="next-appointment">';
    echo '<h2>Next Appointment</h2><br>';
    echo '<div class="medi-card2">';
    echo '<h3>' . date('l, d F', strtotime($appointment_date)) . '</h3>';
    echo '<div class="list">';
    echo '<ul>';
    echo '<li>' . date('h:i A', strtotime($appointment_time)) . ' - ' . date('h:i A', strtotime($appointment_time . ' + 30 minutes')) . ' - 30 mins</li>';
    echo '<li>' . $venue . '</li>';
    echo '<li>' . $consultant_name . '</li>';
    echo '</ul>'; 
    echo '</div>';
    echo '<div class="view_appointment">';
    echo '<a href="../../src/php/donor_appointments_view.php">View More</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

mysqli_stmt_close($stmt);
?>
<!--
            <div class="session-card">
                <img src="../../public/images/calender.png">
            </div>-->
        </div>
        
        <br><br>
        <div class="rpt">
    
        <div class="donor-reports">
            <div class="report">
                <h1>Latest Reports</h1>
                <div class="medi-card3">
                <table style="width:100%">
                    <tr>
                      <th><h3>Diagnostic Tests</h3></th>
                      <th><h3>Reports</h3></th>
                      <th></th>
                    </tr>
                    
                    <tr>
                      <td>FBS</td>
                      <td><button class="report-btn"><a href="../../src/php/donor_fbs.php">View</a></button></td>
                     <!--<td><img src="../../public/images/download.png"></td>-->
                    </tr>
                    <tr>
                      <td>BP</td>
                      <td><button class="report-btn"><a href="../../src/php/donor_bp.php">View</a></button></td>
                     <!-- <td><img src="../../public/images/download.png"></td>-->
                    </tr>
                    
                    
                </table>
                </div>
            </div>
<?php
            $stmt = mysqli_prepare($connection, "SELECT * FROM `donations`
    WHERE donor_id = ?
    ORDER BY donation_date DESC
    LIMIT 1");

$donor_id = $_SESSION['donor_id'];
mysqli_stmt_bind_param($stmt, 'i', $donor_id);
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt, $donation_id, $donor_id, $donation_date, $donation_venue, $donation_time);

if (mysqli_stmt_fetch($stmt)) {
    // access the fields using the bound variables
    echo '<div class="post-donations">';
    echo '<h2>Post Donations</h2>';
    echo '<div class="medi-card4">';
    echo '<p>Donated Date &nbsp;: ' . $donation_date . '<br>Venue &nbsp;: ' . $donation_venue . '</p>';
    echo '<hr>';
    echo '<div class="view_donations">';
    echo '<a href="../../src/php/donor_donations.php">View More</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

mysqli_stmt_close($stmt);
?>
        </div>
          </div>
</div>
    </div>
</body>
</html>