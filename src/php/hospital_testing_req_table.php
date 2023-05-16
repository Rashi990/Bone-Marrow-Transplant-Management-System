<?php

 $hospital_id=$_SESSION['hospital_id'];

 $sql="SELECT testing.*, donor.donor_id, donor.donor_name, donor.blood_group 
 FROM testing
 INNER JOIN donor ON testing.donor_id = donor.donor_id
 LEFT JOIN hospital_stock ON testing.test_id = hospital_stock.test_id
 WHERE hospital_stock.test_id IS NULL AND testing.hospital_id = $hospital_id
 ORDER BY testing.test_id;
 
 ";
 //echo $sql;

 $result=mysqli_query($connection,$sql);

 if($result){
    while($row=mysqli_fetch_assoc($result)){
        $test_id=$row['test_id'];
        $id='TST'.str_pad($row['test_id'],3,'0',STR_PAD_LEFT);
        $did='D'.str_pad($row['donor_id'],3,'0',STR_PAD_LEFT);
        $name=$row['donor_name'];
        $blood_group=$row['blood_group'];
        $date=$row['test_date'];
        $time=$row['test_time'];

        echo "<tr>";

            echo "<td>".$id."</td>";
            echo "<td>".$did."</td>";
            echo "<td>".$name."</td>";
            echo "<td>".$blood_group."</td>";
            echo "<td>".$date."</td>";
            echo "<td>".$time."</td>";

            //echo "<td><a href='hospital_view_patient.php?viewid=".$id."' class='view'><span class='material-icons'>visibility</span></a></td>";
            echo "<td><a href='hospital_accept_testing_req.php?acceptid=".$id."' class='accept'><abbr title='Confirm'><span class='material-icons'>person_add</span></abbr></a></td>";
            echo "<td><a href='hospital_delete_testing_req.php?deleteid=".$id."' class='delete'><abbr title='Delete'><span class='material-icons'>delete</span></abbr></a></td>";

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
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_navbar.css?v=1">
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_testing_req.css?v=1">
    <title>Document</title>
 </head>
 <body>

</body>
 </html>
