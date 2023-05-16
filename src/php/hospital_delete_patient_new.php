<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=3)
{
    header("Location:login.php");
}

$hospital_id = $_SESSION['hospital_id'];


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $patient_id=intval(substr($id, 3));

    //$sql="DELETE FROM patient WHERE patient_id='$patient_id'";

    $sql1="UPDATE patient SET level=1 WHERE patient_id=$patient_id";
    $result1=mysqli_query($connection,$sql1);
    if($result1){
        
       
    $sql="SELECT patient_id,patient_name,age,blood_group,diagnosis,telephone_no,address,level 
    FROM patient WHERE level!=1
    ORDER BY patient_id ";
    echo $sql;

    $result=mysqli_query($connection,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $patient_id=$row['patient_id'];
            $patient_name=$row['patient_name'];
            $age=$row['$age'];
            $blood_group=$row['blood_group'];
            $diagnosis=$row['diagnosis'];
            $telephone_no=$row['telephone_no'];
            $address=$row['address'];
            $level =$row['level '];


            echo "<tr>";

            echo "<td>".$patient_id."</td>";
            echo "<td>".$name."</td>";
            echo "<td>".$age."</td>";
            echo "<td>".$blood_group."</td>";
            echo "<td>".$diagnosis."</td>";
            echo "<td>".$tele."</td>";
            echo "<td>".$addr."</td>";

            //echo "<td><a href='hospital_delete_patient.php?deleteid=".$id."' class='delete'><abbr title='Delete'><span class='material-icons'>delete</span></abbr></a></td>";

        echo "</tr>";

    }
 }

        }
    }






?>
    
    
    



