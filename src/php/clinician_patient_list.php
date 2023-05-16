
<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=2)
{
    header("Location:login.php");
}

$uid=$_SESSION['uid'];
$username=$_SESSION['username'];
$hospital_id=$_SESSION['hospital_id'];

?>




<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/clinician_patient_list.css?v=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Clinician Patients</title>
 </head>
<body>

    
        <div class="match">

            <table class="patient_data">
                <tr class="theads">
                <th>Patient ID</th>
                <th>Patient Name</th>
                <th>Status</th>
                <th>Select</th>
                </tr>


                <?php


 $sql="SELECT patient_hla_details.ph_id, patient_hla_details.patient_id, patient.patient_id, patient.patient_name, patient.current_status
      FROM patient_hla_details
      JOIN patient ON patient_hla_details.patient_id = patient.patient_id
      WHERE hospital_id=$hospital_id
      ORDER BY ph_id";
//echo $sql;

$result=mysqli_query($connection,$sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $hlaid=$row['ph_id'];
        $hid='HLAID'.str_pad($row['ph_id'],3,'0',STR_PAD_LEFT);
        $patient_id=$row['patient_id'];
        $pid='PID'.str_pad($row['patient_id'],3,'0',STR_PAD_LEFT);
        $patient_name=$row['patient_name'];
        $patient_status=$row['current_status'];

        echo "<tr>";

            //echo "<td>".$hid."</td>";
            echo "<td>".$pid."</td>";
            echo "<td>".$patient_name."</td>";
            echo "<td>".$patient_status."</td>";
            echo "<td><a href='clinician_match_donor_table.php?pa_id=".$hlaid."' class='patient'><abbr title='Select'><span class='material-icons'>check_circle</span></a></abbr></td>";

            //echo "<td><a href='hospital_view_hla_patient.php?viewid=".$hid."' class='view'><abbr title='View'><span class='material-icons'>visibility</span></a></abbr></td>";
            //echo "<td><a href='hospital_update_hla_patient.php?updateid=".$hid."' class='edit'><abbr title='Edit'><span class='material-icons'>edit_square</span></abbr></a></td>";

      

        // echo "<td><a href='hospital_update_patient.php?acceptid=".$match_request_id."' class='accept'><abbr title='Confirm'><span class='material-icons'>person_add</span><abbr/></td>";
        // echo "<td><a href='hospital_delete_patient.php?deleteid=".$match_request_id."' class='delete'><abbr title='Delete'><span class='material-icons'>delete</span><abbr/></td>";
         
     echo "</tr>";


       
    }
  }
   



 

?>

    
            </table>
           
           </div>
    
        
    </body>
    </html>










 