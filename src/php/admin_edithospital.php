<?php
session_start();
include "../../config/connection.php";
if (isset($_POST['cancel']))
{
    header("Location: admin_viewhospital.php");
}

if(isset($_POST['submit']) )
{


  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  $name = validate($_POST['hname']);
  $email =validate($_POST['email']); 
  $tel = validate($_POST['tel']); 
  $address = validate($_POST['address']); 
  $id=validate($_POST['id']);

  $sql= "update hospital SET hospital_name='$name',email='$email',telephone_no='$tel',address='$address' where hospital_id= $id";
  $result = mysqli_query($connection,$sql);

  if($result) {
    
    header("Location: admin_viewhospital.php");
   
  }
  else{
    die(mysqli_error($connection));
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
	<title>Edit Hospital</title>
  <link rel="stylesheet"  href="../../public/css/admin_addhospital.css">
</head>
<body>
<div class="container">
    <div class="form_content">

    <form action="" method="post">
    
    <section class="copy">
        <h2>Edit Hosppital Details</h2>
    </section> 
    <?php
    $id=$_GET['edithosid'];
  $sql="select * from `hospital`  where hospital_id= $id";
        $result=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_assoc($result)){
        ?>
                <label for="hname">Hospital Name</label>
                <input type="text" name="hname" value="<?php  echo $row['hospital_name'];?>">
                <label for="email">Hospital Email</label>
                <input type="email" name="email" value="<?php  echo $row['email'];?>" >
                <label for="telephone">Telephone No</label>
                <input type="tel" name="tel" value="<?php  echo $row['telephone_no'];?>">
                <label for="address">Hospital Address</label>
                <input type="text" name="address" value="<?php  echo $row['address'];?>">
                <input type="text" name="id" value="<?php  echo $id;?>" hidden>
 
            <?php 
}?>
            <table>
                <tr><td>
                    <button class="create-btn" name="submit" type="submit"> Update
                    </button>
                
                </td>
            <td>
                <button class="cancle-btn" name="cancel" type="cancel"> Cancel
                </button>
            </td></tr>
              </table>
       
</form> 
    </div>
       
                </div>
	
</body>
</html>
