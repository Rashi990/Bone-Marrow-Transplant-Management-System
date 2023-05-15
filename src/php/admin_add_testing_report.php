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



  if(isset($_POST['submit']) && isset($_GET['id'])){
    $id=$_GET['id'];
    // exit('<pre>'.json_encode($_POST).'</pre>');

    $hla_A_ag=$_POST['HLA-A_allele_group'];
    $hla_A_pro=$_POST['HLA-A_protein'];
    $hla_A_exo=$_POST['HLA-A_syn_exons'];
    $hla_A_intro=$_POST['HLA-A_syn_introns'];
    $hla_A_lvl=$_POST['HLA-A_ex_level'];

    $hla_B_ag=$_POST['HLA-B_allele_group'];
    $hla_B_pro=$_POST['HLA-B_protein'];
    $hla_B_exo=$_POST['HLA-B_syn_exons'];
    $hla_B_intro=$_POST['HLA-B_syn_introns'];
    $hla_B_lvl=$_POST['HLA-B_ex_level'];

    $hla_C_ag=$_POST['HLA-C_allele_group'];
    $hla_C_pro=$_POST['HLA-C_protein'];
    $hla_C_exo=$_POST['HLA-C_syn_exons'];
    $hla_C_intro=$_POST['HLA-C_syn_introns'];
    $hla_C_lvl=$_POST['HLA-C_ex_level'];

    $hla_DRB1_ag=$_POST['HLA-DRB1_allele_group'];
    $hla_DRB1_pro=$_POST['HLA-DRB1_protein'];
    $hla_DRB1_exo=$_POST['HLA-DRB1_syn_exons'];
    $hla_DRB1_intro=$_POST['HLA-DRB1_syn_introns'];
    $hla_DRB1_lvl=$_POST['HLA-DRB1_ex_level'];

    $hla_DRB3_ag=$_POST['HLA-DRB3_allele_group'];
    $hla_DRB3_pro=$_POST['HLA-DRB3_protein'];
    $hla_DRB3_exo=$_POST['HLA-DRB3_syn_exons'];
    $hla_DRB3_intro=$_POST['HLA-DRB3_syn_introns'];
    $hla_DRB3_lvl=$_POST['HLA-DRB3_ex_level'];

    $hla_DQB1_ag=$_POST['HLA-DQB1_allele_group'];
    $hla_DQB1_pro=$_POST['HLA-DQB1_protein'];
    $hla_DQB1_exo=$_POST['HLA-DQB1_syn_exons'];
    $hla_DQB1_intro=$_POST['HLA-DQB1_syn_introns'];
    $hla_DQB1_lvl=$_POST['HLA-DQB1_ex_level'];

    $sql = "INSERT INTO `donor_hla_details`
        (
        `donor_id`,
        `HLA-A_allele_group`, `HLA-A_protein`, `HLA-A_syn_exons`, `HLA-A_syn_introns`, `HLA-A_ex_level`, 
        `HLA-B_allele_group`, `HLA-B_protein`, `HLA-B_syn_exons`, `HLA-B_syn_introns`, `HLA-B_ex_level`, 
        `HLA-C_allele_group`, `HLA-C_protein`, `HLA-C_syn_exons`, `HLA-C_syn_introns`, `HLA-C_ex_level`, 
        `HLA-DRB1_allele_group`, `HLA-DRB1_protein`, `HLA-DRB1_syn_exons`, `HLA-DRB1_syn_introns`, `HLA-DRB1_ex_level`, 
        `HLA-DRB3_allele_group`, `HLA-DRB3_protein`, `HLA-DRB3_syn_exons`, `HLA-DRB3_syn_introns`, `HLA-DRB3_ex_level`, 
        `HLA-DQB1_allele_group`, `HLA-DQB1_protein`, `HLA-DQB1_syn_exons`, `HLA-DQB1_syn_introns`, `HLA-DQB1_ex_level`
        )
         VALUES 
        (
            '$id',
            '$hla_A_ag', '$hla_A_pro', '$hla_A_exo', '$hla_A_intro', '$hla_A_lvl',
            '$hla_B_ag', '$hla_B_pro', '$hla_B_exo', '$hla_B_intro', '$hla_B_lvl',
            '$hla_C_ag', '$hla_C_pro', '$hla_C_exo', '$hla_C_intro', '$hla_C_lvl',
            '$hla_DRB1_ag', '$hla_DRB1_pro', '$hla_DRB1_exo', '$hla_DRB1_intro', '$hla_DRB1_lvl',
            '$hla_DRB3_ag', '$hla_DRB3_pro', '$hla_DRB3_exo', '$hla_DRB3_intro', '$hla_DRB3_lvl',
            '$hla_DQB1_ag', '$hla_DQB1_pro', '$hla_DQB1_exo', '$hla_DQB1_intro', '$hla_DQB1_lvl'
        ) 
";


    $result=mysqli_query($connection,$sql);

    if($result){
      echo "<script> alert('Patient HLA details are successfully added !') </script>";
	  header("Location: admin_viewtesting.php");
    }else{
      echo "<script> alert('Patient HLA details adding failed !') </script>";
    }

  }

?>