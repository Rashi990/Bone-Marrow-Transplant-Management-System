<?php
session_start();
include "../../config/connection.php";
 
if (isset($_POST['cancel']))
{
    header("Location: admin_view_donor.php");
}

if(isset($_POST['submit']) )
{

  $id=$_GET['edit'];
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 
  $name = $_POST['hname'];
  $email = $_POST['email']; 
  $tel = $_POST['tel']; 
  $address = $_POST['address']; 
  $id=($_POST['id']);

  $sql="update blood_bank SET admin_name='$name',email='$email',telephone='$tel',address='$address'  where admin_id= $id";
  $result = mysqli_query($connection,$sql);

  if($result) {
    
    header("Location: admin_profile_page.php");
   
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
   
	<title>Add Hospital</title>
    <link rel="stylesheet"  href="../../public/css/admin_adddonor.css">
</head>
<body>
<div class="container">
    <center>

<form action="" method="post">
    
    <section class="copy">
        <h2>Edit Profile Details</h2>
    </section> 
    
    <?php
    $id=$_GET['edit'];
  $sql="select * from `blood_bank` where admin_id= $id";
        $result=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_assoc($result)){
        ?>
            <label for="hname">Name</label>
            <input type="text" name="hname" value="<?php  echo $row['admin_name'];?>">
            <label for="email">Email Address</label>
            <input type="email" name="email"  value="<?php  echo $row['email'];?>" >
            <label for="telephone">Telephone No</label>
            <input type="tel" name="tel"  value="<?php  echo $row['telephone'];?>">
            <label for="address"> Address</label>
            <input type="text" name="address"  value="<?php  echo $row['address'];?>">
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
</center>         
                </div>
	
</body>
</html>
