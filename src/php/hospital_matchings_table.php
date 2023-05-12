<?php

 $hospital_id=$_SESSION['hospital_id'];

 /*
 $sql="SELECT match_requests.*, patient.patient_id, patient.patient_name, patient.current_status
        FROM match_requests
        JOIN patient ON match_requests.patient_id=patient.patient_id 
        WHERE match_requests.hospital_id=$hospital_id
        ORDER BY match_requests.match_request_id ";
    */


    $sql1="SELECT * FROM match_requests WHERE hospital_id=$hospital_id";
        
    $result1=mysqli_query($connection,$sql1);

    if($result1){
      while($row=mysqli_fetch_assoc($result1)){

         $match_request_id=$row['match_request_id'];
         $mid='MR'.str_pad($row['match_request_id'],3,'0',STR_PAD_LEFT);
         $patient_id=$row['patient_id'];
         $pid='PID'.str_pad($row['patient_id'],3,'0',STR_PAD_LEFT);
         //$patient_name=$row['patient_name'];
         //$patient_status=$row['current_status'];



         $sql2="SELECT patient_id,patient_name,current_status FROM patient WHERE patient_id=$patient_id";

         $result2=mysqli_query($connection,$sql2);

         if($result2){
          while($row=mysqli_fetch_assoc($result2)){
            $patient_name=$row['patient_name'];
            $patient_status=$row['current_status'];
          

    echo "<tr>";

         echo "<td>".$mid."</td>";
         echo "<td>".$pid."</td>";
         echo "<td>".$patient_name."</td>";
         echo "<td>".$patient_status."</td>";

         echo "<td><a href='hospital_update_patient.php?acceptid=".$match_request_id."' class='accept'><span class='material-icons'>person_add</span></td>";
         echo "<td><a href='hospital_delete_patient.php?deleteid=".$match_request_id."' class='delete'><span class='material-icons'>delete</span></td>";
         
     echo "</tr>";


        }
      }

    }
  }
   

 

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_matchings.css?v=1">
    <title>Document</title>
 </head>
 <body>

 </body>
 </html>

 <?php?>