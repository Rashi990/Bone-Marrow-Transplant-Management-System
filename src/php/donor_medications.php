
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
    <link rel="stylesheet" type="text/css" href="../../public/css/donor_medications.css"> 
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

            
        <?php
// Retrieve data from database
$stmt = mysqli_prepare($connection, "SELECT cr.date, d.drug_name, d.dosage, dd.route 
                               FROM donor_clinical_reports cr 
                               INNER JOIN donor_drugs dd ON cr.donor_cr_id = dd.donor_cr_id 
                               INNER JOIN drugs d ON dd.drug_id = d.drug_id 
                               WHERE cr.donor_id = ?
                               ORDER BY cr.date DESC");

$donor_id = $_SESSION['donor_id'];                               

mysqli_stmt_bind_param($stmt, "i", $donor_id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $date, $drug_name, $dosage, $route);

// Initialize variables for rowspan
$prev_date = "";
$rowspan = 0;

// Display data in cards
echo "<div class='card-container'>";
while (mysqli_stmt_fetch($stmt)) {
    // Check if date has changed
    if ($prev_date != $date) {
        // If date has changed, close previous card and start new card
        if ($rowspan > 0) {
            echo "</ul></div>";
        }
        echo "<div class='card'><h3>$date</h3><ul>";
        $prev_date = $date;
        $rowspan = 0;
    }
    // Output medication information for current date
    echo "<li><strong>$drug_name:</strong> $dosage, $route</li>";
    $rowspan++;
}
// Close last card
if ($rowspan > 0) {
    echo "</ul></div>";
}
echo "</div>";

// Check if any data was found
if ($prev_date == "") {
    echo "<p>No data found</p>";
}

// Close statement and database connection
mysqli_stmt_close($stmt);
mysqli_close($connection);
?>
     </div>
    </div>
</body></html>