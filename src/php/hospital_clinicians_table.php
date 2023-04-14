<?php

  $hospital_id = $_SESSION['hospital_id'];

  $sql = "SELECT clinician_id, clinician_name, email, telephone_no, address FROM clinician ORDER BY clinician_id ";
  //echo $sql;
  $result = $connection->query($sql);

  if($result){
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['clinician_id'];
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

    echo "<td><a href='hospital_view_clinicians.php?viewid=".$id."' class='view'><span class='material-icons'>visibility</span></a></td>";
    echo "<td><a href='hospital_update_clinicians.php?updateid=".$id."' class='edit'><span class='material-icons'>edit_square</span></a></td>";
    echo "<td><a href='hospital_delete_clinicians.php?deleteid=".$id."' class='delete'><span class='material-icons'>delete</span></td>";


  echo "</tr>";
}
  }

?>
