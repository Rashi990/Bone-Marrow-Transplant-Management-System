<?php 
require_once('../../config/connection.php');
//include('../../public/html/camp.html');





?>



<?php require_once('donor_sidebar.php');

require_once ('../../config/connection.php');

?>
<?php // include('../../public/html/donor_session.html'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/donor_sidebar.css">
    <link rel="stylesheet" href="../../public/css/camps.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,500;1,700&display=swap" rel="stylesheet">
    <title>SLBTMS</title>
</head>
</head>
<body>
 


<div class="container">
    <div class="backboard">
        <div class="intro">
        <h2>Join the latest Campaigns Organized by  National Blood Transfusion Service and  Be more aware </h2>
        </div>
        <div class="card-set">
        <?php
$sql = "SELECT camp_name , camp_id FROM campaign";
$result = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    // start a new camp-card for each row
    echo '<div class="camp-card">';
    
    // output the image and card background
    echo '<div class="image"><img class="img" src="../../public/images/img1.jpeg" alt="aware_picture"></div>';
    echo '<div class="card-background"><a href="donor_session.php?camp_id='.$row["camp_id"].'"><div class="topic">';
    
    // output the camp_name value
    echo $row["camp_name"];
    
    // close the HTML tags for the card background and link
    echo '</div></a></div>';
    
    // close the camp-card
    echo '</div>';
}
?>

         
       







        </div>

        </div>
</div>
</body>






<?php



/*
$stmt = mysqli_prepare($connection, "SELECT c.camp_name, s.session_name, h.hospital_name, h.city, s.session_date, s.session_time
FROM session s
INNER JOIN campaign c ON s.camp_id = c.camp_id
INNER JOIN hospital h ON c.hospital_id = h.hospital_id
WHERE h.city = ?");
    
$city =$_SESSION['city']; 
    
mysqli_stmt_bind_param($stmt, 's', $city);
mysqli_stmt_execute($stmt);
    
mysqli_stmt_bind_result($stmt, $camp_name, $session_name, $hospital_name, $city, $session_date, $session_time);
    
while (mysqli_stmt_fetch($stmt)) {
    // access the fields using the bound variables
    echo $camp_name . ', ' . $session_name . ', ' . $hospital_name . ', ' . $city . ', ' . $session_date . ', ' . $session_time . '<br>';
}
    
mysqli_stmt_close($stmt);
?>
*/