<?php
session_start();
include "../../config/connection.php";
 
if (isset($_POST['cancel']))
{
    header("Location: admin_view_donor.php");
}

if(isset($_POST['submit']) )
{

  $id=$_GET['editid'];
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

  $sql="update donor SET donor_name='$name',email='$email',telephone_no='$tel',address='$address'  where donor_id= $id";
  $result = mysqli_query($connection,$sql);

  if($result) {
    
    header("Location: admin_view_donor.php");
   
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
        <h2>Edit Donor Details</h2>
    </section> 
    <?php
    $id=$_GET['editid'];
  $sql="select * from `donor`  WHERE donor_id= $id";
        $result=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_assoc($result)){
        ?>
            <label for="hname">Donor Name</label>
            <input type="text" name="hname" value="<?php  echo $row['donor_name'];?>">
            <label for="email">Donor Email</label>
            <input type="email" name="email"  value="<?php  echo $row['email'];?>" >
            <label for="telephone">Telephone No</label>
            <input type="tel" name="tel"  value="<?php  echo $row['telephone_no'];?>">
            <label for="address"> Address</label>
            <input type="text" name="address"  value="<?php  echo $row['address'];?>">

 
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
