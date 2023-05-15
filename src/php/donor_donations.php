
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
    <link rel="stylesheet" type="text/css" href="../../public/css/donor_donations.css"> 
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
                <th>Donation RegNo.</th>
                <th>Donation Date</th>
                <th>Donation Venue</th>
                <th>Donation Time</th>  
            </tr>
            <?php 



$stmt =mysqli_prepare($connection,"SELECT * FROM `donations` 
        WHERE donor_id = ?");

$donor_id = $_SESSION['donor_id']; 

mysqli_stmt_bind_param($stmt, 'i', $donor_id);
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt, $donation_id,$donor_id, $donation_date, $donation_venue, $donation_time);

while (mysqli_stmt_fetch($stmt)) {
    // access the fields using the bound variables
    echo '<tr>';
    echo '<td>' . $donation_id . '</td>';
    echo '<td>' . $donation_date . '</td>';
    echo '<td>' . $donation_venue . '</td>';
    echo '<td>' . $donation_time . '</td>';
    echo '</tr>';
}

mysqli_stmt_close($stmt);






?>















