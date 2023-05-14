<?php

 $hospital_id=$_SESSION['hospital_id'];

 /*
 $sql="SELECT match_requests.*, patient.patient_id, patient.patient_name, patient.current_status
        FROM match_requests
        JOIN patient ON match_requests.patient_id=patient.patient_id 
        WHERE match_requests.hospital_id=$hospital_id
        ORDER BY match_requests.match_request_id ";
    */


    $sql1="SELECT * FROM match_details WHERE hospital_id=$hospital_id";   
    $result1=mysqli_query($connection,$sql1);

    if($result1){
      while($row=mysqli_fetch_assoc($result1)){

         $match_id=$row['match_id'];
         $maid='MID'.str_pad($row['match_id'],3,'0',STR_PAD_LEFT);
         $match_date=$row['match_date'];
         $match_time=$row['match_time'];
         $match_count=$row['match_count'];
         $patient_id=$row['patient_id'];
         $pid='PID'.str_pad($row['patient_id'],3,'0',STR_PAD_LEFT);
         $donor_id=$row['donor_id'];
         $did='D'.str_pad($row['donor_id'],3,'0',STR_PAD_LEFT);
         $clinician_id=$row['clinician_id'];
         $cid='CLID'.str_pad($row['clinician_id'],3,'0',STR_PAD_LEFT);

         

    $sql2="SELECT patient_id,patient_name FROM patient WHERE patient_id=$patient_id";
    $result2=mysqli_query($connection,$sql2);

    if($result2){
        while($row=mysqli_fetch_assoc($result2)){
            $patient_name=$row['patient_name'];



    $sql3="SELECT donor_id,donor_name FROM donor WHERE donor_id=$donor_id";
    $result3=mysqli_query($connection,$sql3);

    if($result3){
        while($row=mysqli_fetch_assoc($result3)){
            $donor_name=$row['donor_name'];

        
    $sql4="SELECT clinician_id,clinician_name FROM clinician WHERE clinician_id=$clinician_id";      
    $result4=mysqli_query($connection,$sql4);

    if($result4){
        while($row=mysqli_fetch_assoc($result4)){
            $clinician_name=$row['clinician_name'];
       


    echo "<tr>";

         echo "<td>".$maid."</td>";
         echo "<td>".$match_date."</td>";
         echo "<td>".$match_time."</td>";
         echo "<td>".$match_count.".%</td>";
         echo "<td>".$pid."</td>";
         echo "<td>".$patient_name."</td>";
         echo "<td>".$did."</td>";
         echo "<td>".$donor_name."</td>";
         echo "<td>".$cid."</td>";
         

         echo "<td><a href='hospital_update_patient.php?acceptid=".$match_id."' class='view'><abbr title='View'><span class='material-icons'>visibility</span><abbr/></td>";
         echo "<td><a href='hospital_delete_patient.php?deleteid=".$match_id."' class='delete'><abbr title='Delete'><span class='material-icons'>delete</span><abbr/></td>";
         
     echo "</tr>";

                        }
                    }

                }
            }

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
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_match_list.css?v=1">
    <title>Document</title>
 </head>
 <body>

 </body>
 </html>

 <?php?>