<?php

 $hospital_id=$_SESSION['hospital_id'];

 $sql="SELECT patient_id,patient_name,age,blood_group,diagnosis,telephone_no,address FROM patient WHERE hospital_id=$hospital_id ORDER BY patient_id ";
 //echo $sql;

 $result=mysqli_query($connection,$sql);

 if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id='PID'.str_pad($row['patient_id'],3,'0',STR_PAD_LEFT);
        $name=$row['patient_name'];
        $age=$row['age'];
        $blood_group=$row['blood_group'];
        $diagnosis=$row['diagnosis'];
        $tele=$row['telephone_no'];
        $addr=$row['address'];

        echo "<tr>";

            echo "<td>".$id."</td>";
            echo "<td>".$name."</td>";
            echo "<td>".$age."</td>";
            echo "<td>".$blood_group."</td>";
            echo "<td>".$diagnosis."</td>";
            echo "<td>".$tele."</td>";
            echo "<td>".$addr."</td>";

            echo "<td><a href='hospital_view_patient.php?viewid=".$id."' class='view'><abbr title='View'><span class='material-icons'>visibility</span></abbr></a></td>";
            echo "<td><a href='hospital_update_patient.php?updateid=".$id."' class='edit'><abbr title='Edit'><span class='material-icons'>edit_square</span></abbr></a></td>";
            echo "<td><a href='hospital_delete_patient.php?deleteid=".$id."' class='delete'><abbr title='Delete'><span class='material-icons'>delete</span></abbr></a></td>";

        echo "</tr>";

    }
 }





?>