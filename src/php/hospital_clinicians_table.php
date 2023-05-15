<?php

  $hospital_id = $_SESSION['hospital_id'];

  $sql = "SELECT clinician_id, clinician_name, email, telephone_no, address FROM clinician WHERE hospital_id=$hospital_id ORDER BY clinician_id";
  //echo $sql;
  $result = mysqli_query($connection,$sql);

  if($result){
  while($row=mysqli_fetch_assoc($result)){
    $clinician_id = $row['clinician_id'];
    $id='CLID'.str_pad($row['clinician_id'],3,'0',STR_PAD_LEFT);
    $name=$row['clinician_name'];
    $email=$row['email'];
    $tele=$row['telephone_no'];
    $address=$row['address'];
  
  echo "<tr>";
    echo "<td>".$id."</td>";
    echo "<td>".$name."</td>";
    echo "<td>".$email."</td>";
    echo "<td>".$tele."</td>";
    echo "<td>".$address."</td>";

    echo "<td><a href='hospital_view_clinicians.php?viewid=".$id."' class='view'><abbr title='View'><span class='material-icons'>visibility</span></abbr></a></td>";
    echo "<td><a href='hospital_update_clinicians.php?updateid=".$id."' class='edit'><abbr title='Edit'><span class='material-icons'>edit_square</span></abbr></a></td>";
    echo "<td><a href='hospital_delete_clinicians.php?deleteid=".$clinician_id."' class='delete'><abbr title='Delete'><span class='material-icons'>delete</span></abbr></td>";


  echo "</tr>";
}
  }

?>
