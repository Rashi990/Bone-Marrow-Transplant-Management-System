<?php

 $hospital_id=$_SESSION['hospital_id'];

 $sql="SELECT patient.patient_id, patient.patient_name
    FROM patient
    LEFT JOIN patient_hla_details ON patient.patient_id = patient_hla_details.patient_id
    WHERE patient_hla_details.ph_id IS NULL AND patient.hospital_id = $hospital_id
    ORDER BY patient.patient_id ";

 //echo $sql;

 $result=mysqli_query($connection,$sql);

 if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id='PID'.str_pad($row['patient_id'],3,'0',STR_PAD_LEFT);
        $name=$row['patient_name'];
        
        echo "<tr>";

            echo "<td>".$id."</td>";
            echo "<td>".$name."</td>";

            echo "<td><a href='hospital_add_patient_hla_details.php?add-id=".$id."'><button class='add'>Add</button></a></td>";
        

        echo "</tr>";

    }
 }


?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_check_hla.css?v=1">
    <title>Document</title>
 </head>
 <body>

 </body>
 </html>

 <?php?>