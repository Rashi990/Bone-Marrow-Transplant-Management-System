<?php

$hospital_id=$_SESSION['hospital_id'];

$sql="SELECT consultant_id, consultant_name, email, telephone_no, address FROM consultant WHERE hospital_id='$hospital_id'";
$result=mysqli_query($connection,$sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $consultant_id=$row['consultant_id'];
        $id='CID'.str_pad($row['consultant_id'],3,'0',STR_PAD_LEFT)  ;
        $name=$row['consultant_name'];
        $email=$row['email'];
        $tele=$row['telephone_no'];
        $address=$row['address'];

        echo "<tr>";

            echo "<td>".$id."</td>";
            echo "<td>".$name."</td>";
            echo "<td>".$email."</td>";
            echo "<td>".$tele."</td>";
            echo "<td>".$address."</td>";

            //echo "<td><a href='hospital_view_concultants.php?viewid=".$id."' class='view'><abbr title='View'><span class='material-icons'>visibility</span></abbr></a></td>";
            echo "<td><a href='hospital_update_consultants.php?updateid=".$id."' class='edit'><abbr title='Edit'><span class='material-icons'>edit_square</span></abbr></a></td>";
            echo "<td><a href='hospital_delete_consultants.php?deleteid=".$consultant_id."' class='delete'><abbr title='Delete'><span class='material-icons'>delete</span></abbr></td>";

        echo "</tr>";


    }
}


?>