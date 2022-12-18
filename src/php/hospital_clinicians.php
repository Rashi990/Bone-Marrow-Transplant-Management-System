<?php require_once('hospital_navbar.php'); ?>
<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) && isset($_SESSION['hospital_name']) ))
{
    header("Location:hospital_login.php");
}

$clinician_list = '';

$hospital_id = $_SESSION['hospital_id'];

$query = "SELECT clinician_id, clinician_name, telephone_no, address FROM clinician WHERE hospital_id = $hospital_id ";
$clinicians = mysqli_query($connection,$query);

if($clinicians){
    while($clinician = mysqli_fetch_assoc($clinicians)){
        $clinician_list .= "<tr>";
        $clinician_list .= "<td>{$clinician['clinician_id']}</td>";
        $clinician_list .= "<td>{$clinician['clinician_name']}</td>";
        $clinician_list .= "<td>{$clinician['telephone_no']}</td>";
        $clinician_list .= "<td>{$clinician['address']}</td>";
        $clinician_list .= "<td><a href=\"hospital_view_clinicians.php?clinician_id = {$clinician['clinician_id']}\">View</a></td>";
        $clinician_list .= "<td><a href=\"hospital_update_clinicians.php?clinician_id = {$clinician['clinician_id']}\">Edit</a></td>";
        $clinician_list .= "<td><a href=\"hospital_delete_clinicians.php\">Delete</a></td>";
        $clinician_list .= "</tr>";
    }
}
else{
    echo "Database query failed!";
}

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_navbar.css?v=1">
    <title>Document</title>
 </head>
 <body>
 <div class="top">
        <span class="material-icons">notifications</span>
        <span class="material-icons">chat_bubble</span>
        <div class="Loggedin"> Welcome! <?php echo $_SESSION['hospital_name'];?></div>
        <span class="material-icons">account_circle</span>
      </div>
 </body>
 </html>

<?php include('../../public/html/hospital_clinicians.html'); ?>
<!--<?php require_once('hospital_footer.php'); ?>-->