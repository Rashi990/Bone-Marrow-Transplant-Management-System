
<?php
session_start();
include "../../config/connection.php";

require_once("../../public/html/admin_addhospital.html"); 
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

  $hID = validate($_POST['ID']);
  $hname = validate($_POST['hname']);
  $email = validate($_POST['email']); 
  $tel = validate($_POST['tel']); 
  $address = validate($_POST['address']); 
  $username = validate($_POST['username']); 
  $password = validate($_POST['password']); 

  if (empty($hID))
  {
    
    echo "<script type='text/javascript'>alert('Hospital ID is required!');</script>";
    exit();
  }
  if (empty($hname))
  {
    
    echo "<script type='text/javascript'>alert('Hospital Name is required!');</script>";
    exit();
  }if (empty($email))
  {
    
    echo "<script type='text/javascript'>alert('Hospital Email is required!');</script>";
    exit();
  }if (empty($tel))
  {
    
    echo "<script type='text/javascript'>alert('Telephone Number is required!');</script>";
    exit();
  }if (empty($address))
  {
    
    echo "<script type='text/javascript'>alert('Address is required!');</script>";
    exit();
  

}if (empty($username))
{
  
  echo "<script type='text/javascript'>alert('Username is required!');</script>";
  exit();

}if (empty($password))
{
  
  echo "<script type='text/javascript'>alert('Password is required!');</script>";
  exit();
}
//  add form submitting date in to database
$date = date('Y-m-d H:i:s');
  $sql="INSERT INTO `hospital`(hospital_id, hospital_name, email, telephone_no, address,user_name,password,date) VALUES ('$hID','$hname',' $email',' $tel','$address','$username','$password','$date')";

  
  $result = mysqli_query($connection,$sql);

  if($result) {
    
    header("Location: admin_viewhospital.php");
   
  }
  else{
    die(mysqli_error($connection));
  }

}
?>
