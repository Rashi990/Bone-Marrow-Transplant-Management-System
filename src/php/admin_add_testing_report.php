<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=0)
{
    header("Location:admin_login.php");
}
 ?>
<!-- <?php require_once('admin_footer.php'); ?>    -->
<?php include('../../public/html/admin_add_testing_report.html'); ?>
<?php
if (isset($_POST['cancel']))
{
    header("Location: admin_viewtesting.php");
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

$ID = $_POST['ID'];
$did = $_POST['DID'];
$hid = $_POST['HID']; 
$hla = $_POST['HLA']; 
$hlaf = $_POST['HLAF'];
$hla2 = $_POST['HLA2'];
$hla3 = $_POST['HLA3'];
$hla4 = $_POST['HLA4'];
$hla5 = $_POST['HLA5'];
$status= $_POST['status'];

$sql="INSERT INTO `pending_donor_hla` (sample_bid, pending_donor_id,hospital_id, hla_antigen, hla_allele_family,hla_2nd_type, hla_3th_type, hla_4th_type, hla_5th_type) VALUES ('$ID','$did',' $hid',' $hla','$hlaf',' $hla2',' $hla3',' $hla4',' $hla5')";
$sql1="UPDATE `pending_donor` SET `status`='$status' WHERE pending_donor_id='$did'";



$result = mysqli_query($connection,$sql);
$result1 = mysqli_query($connection,$sql1);

if($result) {
  if($result1) {

  
  header("Location: admin_viewstock.php");
 
}
}
else{

  die(mysqli_error($connection));
}

}
?>