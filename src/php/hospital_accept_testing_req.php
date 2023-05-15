<?php

 $hospital_id=$_SESSION['hospital_id'];


 $sql="SELECT testing.*,hospital_stock.sample_hid
    FROM testing
    LEFT JOIN hospital_stock ON testing.test_id = hospital_stock.test_id
    WHERE testing.hospital_id = $hospital_id
    ORDER BY testing.test_id ";

    $result=mysqli_query($connection,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
         $test_id=$row['test_id'];
         $tid='TST'.str_pad($row['test_id'],3,'0',STR_PAD_LEFT);
         $donor_id=$row['donor_id'];
         $did='D'.str_pad($row['donor_id'],3,'0',STR_PAD_LEFT);

         $sample_hid=$row['sample_hid'];
         if($sample_hid==NULL){
            $status=0;
         }else{
            $status=1;
         }

         echo "<tr>";

         echo "<td>".$tid."</td>";
         echo "<td>".$did."</td>";
         //echo "<td>".$status."</td>";
         
         if($status == 1) {
            echo "<td>Sent</td>";
        } else {
            echo "<td><a href='hospital_add_stock.php?test-id=".$test_id."'><button class='add'>Pending</button></a></td>";
        }

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
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_check_stock.css?v=1">
    <title>Document</title>
 </head>
 <body>

 </body>
 </html>

 <?php?>