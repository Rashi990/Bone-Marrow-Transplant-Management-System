
<?php
session_start();
include "../../config/connection.php";

require_once("../../public/html/admin_create_campaign.html"); 
if (isset($_POST['cancel']))
{
    header("Location: admin_viewsession.php");
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

  $cname = validate($_POST['cname']);
  $date = validate($_POST['date']);
  $hname = validate($_POST['hname']); 
  $time = validate($_POST['time']); 

  if (empty($cname))
  {
    
    echo "<script type='text/javascript'>alert('Campaign name is required!');</script>";
    exit();
  }
  if (empty($date))
  {
    
    echo "<script type='text/javascript'>alert('Date is required!');</script>";
    exit();
  }if (empty($hname))
  {
    
    echo "<script type='text/javascript'>alert('Hospital name is required!');</script>";
    exit();
  }if (empty($time))
  {
    
    echo "<script type='text/javascript'>alert('Time is required!');</script>";
    exit();
  }
//  add form submitting date in to database
$date = date('Y-m-d H:i:s');
  $sql="INSERT INTO `campaign`(camp_name, camp_date, hospital_name, camp_time) VALUES ('$cname','$date',' $hname',' $time')";

  
  $result = mysqli_query($connection,$sql);

  if($result) {
    
    header("Location: admin_viewsession.php");
   
  }
  else{
    die(mysqli_error($connection));
  }

}
?>