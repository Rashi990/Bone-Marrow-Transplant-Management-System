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
              

<?php //include('../../public/html/hospital_add_session.html'); ?>
<?/*
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
        <h1>Add New Session</h1>

      <!--
<form action="../../src/php/hospital_update_session.php" method="post" class="add_session_form">-->
    <input type="hidden" name="session_id" value="<?php echo $sessionId; ?>">
    <p>
        <label for="campaign">Select Campaign:</label>
        <select name="campaign" id="campaign" required>
            <?php
            // Retrieve the campaign list from the database
            $campaignsSql = "SELECT camp_id, camp_name FROM campaign";
            $result = $connection->query($campaignsSql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $campId = $row['camp_id'];
                    $campName = $row['camp_name'];
                    $selected = ($campId == $campaignId) ? "selected" : "";
                    echo "<option value='$campId' $selected>$campName</option>";
                }
            }
            ?>
        </select>
    </p>

    <p>
        <label for="session_name">Session Name:</label>
        <input type="text" name="session_name" value="<?php echo $sessionName; ?>" required>
    </p>

    <p>
        <label for="session_date">Date:</label>
        <input type="date" name="session_date" value="<?php echo $sessionDate; ?>" required>
    </p>

    <p>
        <label for="session_time">Time:</label>
        <input type="time" name="session_time" value="<?php echo $sessionTime; ?>" required>
    </p>


</form>

            <p class="buttons">
                <label>&nbsp;</label>
                <input type="submit" name="submit" value="Submit" class="btn">
                <a class="back_btn" href="../../src/php/hospital_session_list.php">Back</a>
            </p>
         
        </form>

    </div>

</body>
</html>