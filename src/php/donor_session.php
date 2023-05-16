

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
    <link rel="stylesheet" href="../../public/css/donor_session.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,500;1,700&display=swap" rel="stylesheet">
<script defer src="../../public/js/session_register.js"></script>
    <title>SLBTMS</title>
</head>
</head>
<body>
    <!-- home section -->
   <div class="container">
    <div class="backboard">
    <div class="intro">
        <?php 
        $camp_id = isset($_GET['camp_id']) ? $_GET['camp_id'] : null;

        // Retrieve the camp name
        $camp_name_query = mysqli_query($connection, "SELECT camp_name FROM campaign WHERE camp_id = $camp_id");
        $camp_name = mysqli_fetch_assoc($camp_name_query)['camp_name'];
        
         echo "<h2>Join the session series held under $camp_name </h2>";
        

      
  echo  "</div>";


require_once ('../../config/connection.php');

// replace with the actual value


// Prepare the query with placeholders
$sql = "SELECT s.session_id ,s.session_name, h.hospital_name, s.session_date, s.session_time, h.address
          FROM session s
          INNER JOIN hospital h ON s.hospital_id = h.hospital_id
          INNER JOIN camp_session cs ON s.session_id = cs.session_id
          WHERE cs.camp_id = ?";


// Create a prepared statement
$stmt = mysqli_prepare($connection, $sql);

// Bind the parameter value to the placeholder
mysqli_stmt_bind_param($stmt, "i", $camp_id);

// Execute the prepared statement and get the result set
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Loop through the result set and retrieve the data
while ($row = mysqli_fetch_assoc($result)) {
    // Retrieve data from the current row
    $session_id = $row['session_id'];
    $session_name = $row['session_name'];
    $hospital_name = $row['hospital_name'];
    $session_date = $row['session_date'];
    $session_time = $row['session_time'];
    $address = $row['address'];
    
   
    ?>
    <div class="session-card">


        <div class="donor-session-img">
            <img class="donor-img" src="../../public/images/session2.png">
        </div>
        <div class="donor-session-details">
            <div class="donor-session-question">
                <?php echo $session_name; ?>
            </div>
            <div class="details-background-card1">
                <div class="donor-session-address">
                    <div class="session-intro">
                        An Awareness session conducted by <?php echo $hospital_name; ?>
                    </div>
                    <table class="session-venue-details">
                        <tbody>
                            <tr>
                                <td>Location:</td>
                                <td><?php echo $address; ?></td>
                            </tr>
                            <tr>
                                <td>Date:</td>
                                <td><?php echo $session_date; ?></td>
                            </tr>
                            <tr>
                                <td>Time:</td>
                                <td><?php echo $session_time; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="donor-join-now-btn">
                <?php 
$donor_id = $_SESSION['donor_id'];
$session_id = $row['session_id'];

?>
                  <button onclick="confirmRegistration(<?php echo $_SESSION['donor_id']; ?>, <?php echo $row['session_id']; ?>)">Register now </button>
                </div>
               



            </div>
        </div>
    </div>
    <?php
}






// Close the prepared statement and free the result set
mysqli_stmt_close($stmt);
mysqli_free_result($result);
?>





<!-- HTML for the custom popup message -->
<div id="confirm-registration-popup">
  <div class="popup-content">
    <h3>Please confirm your registration</h3>
    <p>Are you sure you want to register?</p>
    <div class="popup-buttons">
      <button id="confirm-button">Confirm</button>
      <button id="cancel-button">Cancel</button>
    </div>
  </div>
</div>

<!-- HTML for the success message -->
<div id="registration-success" style="display: none;">
  <p>Registered!</p>
</div>
