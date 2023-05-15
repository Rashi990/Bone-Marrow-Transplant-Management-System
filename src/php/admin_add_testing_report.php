<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=0)
{
    header("Location:admin_login.php");
}
include('../../public/html/admin_add_testing_report.html'); 

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

$hla1 = $_POST['HLA-A* Allele Group'];
$hla2 = $_POST['HLA-A* Proteins'];
$hla3 = $_POST['HLA-A* Exons']; 
$hla4 = $_POST['HLA-A* Introns']; 
$hla5 = $_POST['HLA-A* Level'];
$hla6 = $_POST['HLA-B* Allele Group'];
$hla7 = $_POST['HLA-B* Proteins'];
$hla8 = $_POST['HLA-B* Exons'];
$hla9 = $_POST['HLA-B* Introns'];
$hla10= $_POST['HLA-B* Level'];
$hla11= $_POST['HLA-C* Allele Group'];
$hla12= $_POST['HLA-C* Proteins'];
$hla13= $_POST['HLA-C* Exons'];
$hla14= $_POST['HLA-C* Introns'];
$hla15= $_POST['HLA-C* Level'];
$hla16= $_POST['HLA-DRB1* Allele Group'];
$hla17= $_POST['HLA-DRB1* Proteins'];
$hla18= $_POST['HLA-DRB1* Exons'];
$hla19= $_POST['HLA-DRB1* Introns'];
$hla20= $_POST['HLA-DRB1* Level'];
$hla21= $_POST['HLA-DRB3,4,5* Allele Group'];
$hla22= $_POST['HLA-DRB3,4,5* Proteins'];
$hla23= $_POST['HLA-DRB3,4,5* Exons'];
$hla24= $_POST['HLA-DRB3,4,5* Introns'];
$hla25= $_POST['HLA-DRB3,4,5* Level'];
$hla26= $_POST['HLA-DQB1* Allele Group'];
$hla27= $_POST['"HLA-DQB1* Proteins'];
$hla28= $_POST['HLA-DQB1* Exons'];
$hla29= $_POST['HLA-DQB1* Introns'];
$hla30= $_POST['HLA-DQB1* Level'];

$sql="INSERT INTO `donor_hla_details`(`HLA-A_allele_group`, `HLA-A_protein`, `HLA-A_syn_exons`, `HLA-A_syn_introns`, `HLA-A_ex_level`, `HLA-B_allele_group`, `HLA-B_protein`, `HLA-B_syn_exons`, `HLA-B_syn_introns`, `HLA-B_ex_level`, `HLA-C_allele_group`, `HLA-C_protein`, `HLA-C_syn_exons`, `HLA-C_syn_introns`, `HLA-C_ex_level`, `HLA-DRB1_allele_group`, `HLA-DRB1_protein`, `HLA-DRB1_syn_exons`, `HLA-DRB1_syn_introns`, `HLA-DRB1_ex_level`, `HLA-DRB3,4,5_allele_group`, `HLA-DRB3,4,5_protein`, `HLA-DRB3,4,5_syn_exons`, `HLA-DRB3,4,5_syn_introns`, `HLA-DRB3,4,5_ex_level`, `HLA-DQB1_allele_group`, `HLA-DQB1_protein`, `HLA-DQB1_syn_exons`, `HLA-DQB1_syn_introns`, `HLA-DQB1_ex_level`) VALUES ('$hla1','$hla2','$hla3','$hla4','$hla5','$hla6','$hla7','$hla8','$hla9','$hla10','$hla11','$hla12','$hla13','$hla14','$hla15','$hla16','$hla17','$hla18','$hla19','$hla20','$hla21','$hla22','$hla23','$hla24','$hla25','$hla26','$hla27','$hla28','$hla29','$hla30')";




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