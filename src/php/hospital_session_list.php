<?php require_once('hospital_navbar.php'); ?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_session_list.css?v=1"> 
    <title>Session List</title>
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

        <a class="new" href="../../src/php/hospital_add_session.php">+Add</a>
            
        <table class="list">
            <tr>
                <th>Session ID</th>
                <th>Session Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Participation Count</th>
                <th colspan="2"></th>
            </tr>
            <?php
    
            
            // Check connection
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }
            
            // Perform the query
            $query = "SELECT s.session_id, s.session_name, s.session_date, s.session_time, COUNT(d.session_id) AS donor_count
                      FROM session s
                      LEFT JOIN donor_sessions_register d ON s.session_id = d.session_id
                      GROUP BY s.session_id, s.session_name, s.session_date, s.session_time";
            $result = mysqli_query($connection, $query);
            
            // Check if query execution was successful
            if ($result) {
                // Fetch and display the data
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['session_id'] . "</td>";
                    echo "<td>" . $row['session_name'] . "</td>";
                    echo "<td>" . $row['session_date'] . "</td>";
                    echo "<td>" . $row['session_time'] . "</td>";
                    echo "<td>" . $row['donor_count'] . "</td>";
                    echo "<td><a href='hospital_update_session.php?session_id=" . $row['session_id'] . "'>Edit</a></td>";
                    echo "<td><a href='hospital_delete_session.php?session_id=" . $row['session_id'] . "'>Delete</a></td>";
                    echo "</tr>";
                }
            
                // Free the result set
                mysqli_free_result($result);
            } else {
                echo "Error executing the query: " . mysqli_error($connection);
            }
            
            // Close the database connection
            mysqli_close($connection);
            ?>
        </table>
    </div>

    
</body>
</html>
