<?php

 $hospital_id=$_SESSION['hospital_id'];

 //$sql="SELECT * FROM hospital_stock WHERE hospital_id=$hospital_id";


 $sql="SELECT hospital_stock.*,testing.test_id,testing.donor_id 
        FROM hospital_stock
        JOIN testing ON hospital_stock.test_id=testing.test_id 
        WHERE hospital_stock.hospital_id=$hospital_id
        ORDER BY hospital_stock.sample_hid";
     
 //echo $sql;

 $result=mysqli_query($connection,$sql);

 if($result){
    while($row=mysqli_fetch_assoc($result)){
        $sid='S'.str_pad($row['sample_hid'],3,'0',STR_PAD_LEFT);
        $did='D'.str_pad($row['donor_id'],3,'0',STR_PAD_LEFT);
        //$name=$row['donor_name'];
        //$blood_group=$row['blood_group'];
        $date=$row['date'];
        $time=$row['time'];
        $departure_time=$row['departure_time'];

        echo "<tr>";

            echo "<td>".$sid."</td>";
            echo "<td>".$did."</td>";
            //echo "<td>".$name."</td>";
            //echo "<td>".$blood_group."</td>";
            echo "<td>".$date."</td>";
            echo "<td>".$time."</td>";
            echo "<td>".$departure_time."</td>";

            echo "<td><a href='hospital_view_patient.php?viewid=".$sid."' class='view'><abbr title='View'><span class='material-icons'>visibility</span></abbr></a></td>";
            echo "<td><a href='hospital_update_patient.php?senttid=".$sid."' class='accept'><abbr title='Send'><span class='material-icons'>check_circle</span></abbr></a></td>";
            echo "<td><a href='hospital_delete_patient.php?deleteid=".$sid."' class='delete'><abbr title='Delete'><span class='material-icons'>delete</span></abbr></td>";

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
