
<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=3)
{
    header("Location:login.php");
}

$uid=$_SESSION['uid'];
$username=$_SESSION['username'];
$hospital_id=$_SESSION['hospital_id'];

$patient_id=$_GET['add-id'];
//$patient_id=intval(substr($id, 3));

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_add_patient_hla_details.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Condensed:wght@700&family=Roboto+Slab:wght@700;800&family=Roboto:wght@400;500&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../../public/js/hospital_form_validation.js"></script>
    <title>Add Patient HLA Details</title>
</head>
<body>
    
    <div class="add_patient_hla">
        <h1>Add Patient HLA Details</h1>

        <form action="../../src/php/hospital_add_patient_hla_details.php?add-id=<?php echo $patient_id; ?>" method="post" class="add_patient_hla_form">

<!--HLA class 1-->
        <!---HLA-A-->
        <h3>HLA-A*</h3>
        <fieldset>
            <div class="row">
                <div class="col-1">
                    <label>HLA-A* Allele Group</label>
                </div>
                <div class="col-2">

                    <input name="HLA-A_allele_group" id="HLA-A_allele_group" value="<?=(isset($hla_A_ag) ? $hla_A_ag : '')?>" type="text" onblur="required_name()" required >
                      <!--placeholder="Enter Allele Group"-->


                </div>
            </div>	

            <div class="row">
                <div class="col-1">
                    <label>HLA-A* Proteins</label>
                </div>
                <div class="col-2">

                    <input name="HLA-A_protein" id="HLA-A_protein" value="<?=(isset($hla_A_pro) ? $hla_A_pro : '')?>" type="text" onblur="required_name()" required >
                     <!--placeholder="Enter Number of Different Proteins"-->

                </div>
            </div>	

            <div class="row">
                <div class="col-1">
                    <label>HLA-A* Exons</label>
                </div>
                <div class="col-2">

                    <input name="HLA-A_syn_exons" id="HLA-A_syn_exons" value="<?=(isset($hla_A_exo) ? $hla_A_exo : '')?>" type="text" onblur="required_name()" required >
                    <!--placeholder="Enter Number of Synonymous mutations in Exons" -->

                </div>
            </div>	

            <div class="row">
                <div class="col-1">
                    <label>HLA-A* Introns</label>
                </div>
                <div class="col-2">

                    <input name="HLA-A_syn_introns" id="HLA-A_syn_introns" value="<?=(isset($hla_A_intro) ? $hla_A_intro : '')?>" type="text" onblur="required_name()" required >
                    <!--placeholder="Enter Number of Synonymous mutations in Introns" -->

                </div>
            </div>	

            <div class="row">
                <div class="col-1">
                    <label>HLA-A* Level</label>
                </div>
                <div class="col-2">
                    <select name="HLA-A_ex_level" id="HLA-A_ex_level">
                        <option value="N">N</option>
                        <option value="L">L</option>
                        <option value="S">S</option>
                        <option value="A">A</option>
                        <option value="Q">Q</option>
                    </select>
                </div>
            </div>	

        </fieldset>

         <!---HLA-B-->
        <h3>HLA-B*</h3>
        <fieldset>
        <div class="row">
            <div class="col-1">
                <label>HLA-B* Allele Group</label>
            </div>
            <div class="col-2">

                <input name="HLA-B_allele_group" id="HLA-B_allele_group" value="<?=(isset($hla_B_ag) ? $hla_B_ag : '')?>" type="text" onblur="required_name()" required >
                 <!-- placeholder="Enter Allele Group" -->

            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-B* Proteins</label>
            </div>
            <div class="col-2">

                <input name="HLA-B_protein" id="HLA-B_protein" value="<?=(isset($hla_B_pro) ? $hla_B_pro : '')?>" type="text" onblur="required_name()" required >
                   <!-- placeholder="Enter Number of Different Proteins"-->

            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-B* Exons</label>
            </div>
            <div class="col-2">

                <input name="HLA-B_syn_exons" id="HLA-B_syn_exons" value="<?=(isset($hla_B_exo) ? $hla_B_exo : '')?>" type="text" onblur="required_name()" required >
                 <!-- placeholder="Enter Number of Synonymous mutations in Exons"-->

            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-B* Introns</label>
            </div>
            <div class="col-2">
                <input name="HLA-B_syn_introns" id="HLA-B_syn_introns" value="<?=(isset($hla_B_intro) ? $hla_B_intro : '')?>" type="text" onblur="required_name()" required >
                 <!-- placeholder="Enter Number of Synonymous mutations in Introns"-->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-B* Level</label>
            </div>
            <div class="col-2">
                <select name="HLA-B_ex_level" id="HLA-B_ex_level">
                    <option value="N">N</option>
                    <option value="L">L</option>
                    <option value="S">S</option>
                    <option value="A">A</option>
                    <option value="Q">Q</option>
                </select>
            </div>
        </div>	

    </fieldset>

           <!---HLA-C-->
           <h3>HLA-C*</h3>
           <fieldset>  
        <div class="row">
            <div class="col-1">
                <label>HLA-C* Allele Group</label>
            </div>
            <div class="col-2">
                <input name="HLA-C_allele_group" id="HLA-C_allele_group" value="<?=(isset($hla_C_ag) ? $hla_C_ag : '')?>" type="text" onblur="required_name()" required >
                <!-- placeholder="Enter Allele Group" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-C* Proteins</label>
            </div>
            <div class="col-2">
                <input name="HLA-C_protein" id="HLA-C_protein" value="<?=(isset($hla_C_pro) ? $hla_C_pro : '')?>" type="text" onblur="required_name()" required >
                <!--placeholder="Enter Number of Different Proteins" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-C* Exons</label>
            </div>
            <div class="col-2">
                <input name="HLA-C_syn_exons" id="HLA-C_syn_exons" value="<?=(isset($hla_C_exo) ? $hla_C_exo : '')?>" type="text" onblur="required_name()" required >
                <!-- placeholder="Enter Number of Synonymous mutations in Exons"-->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-C* Introns</label>
            </div>
            <div class="col-2">
                <input name="HLA-C_syn_introns" id="HLA-C_syn_introns" value="<?=(isset($hla_C_intro) ? $hla_C_intro : '')?>" type="text" onblur="required_name()" required >
                 <!--placeholder="Enter Number of Synonymous mutations in Introns" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-C* Level</label>
            </div>
            <div class="col-2">
                <select name="HLA-C_ex_level" id="HLA-C_ex_level">
                    <option value="N">N</option>
                    <option value="L">L</option>
                    <option value="S">S</option>
                    <option value="A">A</option>
                    <option value="Q">Q</option>
                </select>
            </div>
        </div>	

    </fieldset>

    <!--HLA Class 2-->
           <!---HLA-DRB1-->
           <h3>HLA-DRB1*</h3>
           <fieldset>
        <div class="row">
            <div class="col-1">
                <label>HLA-DRB1* Allele Group</label>
            </div>
            <div class="col-2">
                <input name="HLA-DRB1_allele_group" id="HLA-DRB1_allele_group" value="<?=(isset($hla_DRB1_ag) ? $hla_DRB1_ag : '')?>" type="text" onblur="required_name()" required >
                 <!--placeholder="Enter Allele Group" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DRB1* Proteins</label>
            </div>
            <div class="col-2">
                <input name="HLA-DRB1_protein" id="HLA-DRB1_protein" value="<?=(isset($hla_DRB1_pro) ? $hla_DRB1_pro : '')?>" type="text" onblur="required_name()" required >
                  <!--placeholder="Enter Number of Different Proteins" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DRB1* Exons</label>
            </div>
            <div class="col-2">
                <input name="HLA-DRB1_syn_exons" id="HLA-DRB1_syn_exons" value="<?=(isset($hla_DRB1_exo) ? $hla_DRB1_exo : '')?>" type="text" onblur="required_name()" required >
                <!--placeholder="Enter Number of Synonymous mutations in Exons" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DRB1* Introns</label>
            </div>
            <div class="col-2">
                <input name="HLA-DRB1_syn_introns" id="HLA-DRB1_syn_introns" value="<?=(isset($hla_DRB1_intro) ? $hla_DRB1_intro : '')?>" type="text" onblur="required_name()" required >
                 <!--placeholder="Enter Number of Synonymous mutations in Introns" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DRB1* Level</label>
            </div>
            <div class="col-2">
                <select name="HLA-DRB1_ex_level" id="HLA-DRB1_ex_level">
                    <option value="N">N</option>
                    <option value="L">L</option>
                    <option value="S">S</option>
                    <option value="A">A</option>
                    <option value="Q">Q</option>
                </select>
            </div>
        </div>	

    </fieldset>

         <!---HLA-DRB3,4,5*-->
         <h3>HLA-DRB3,4,5*</h3>
         <fieldset>
        <div class="row">
            <div class="col-1">
                <label>HLA-DRB3,4,5* Allele Group</label>
            </div>
            <div class="col-2">
                <input name="HLA-DRB3,4,5_allele_group" id="HLA-DRB3,4,5_allele_group" value="<?=(isset($hla_DRB3_ag) ? $hla_DRB3_ag : '')?>" type="text" onblur="required_name()" required >
                 <!--placeholder="Enter Allele Group" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DRB3,4,5* Proteins</label>
            </div>
            <div class="col-2">
                <input name="HLA-DRB3,4,5_protein" id="HLA-DRB3,4,5_protein" value="<?=(isset($hla_DRB3_pro) ? $hla_DRB3_pro : '')?>" type="text" onblur="required_name()" required >
                <!--placeholder="Enter Number of Different Proteins" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DRB3,4,5* Exons</label>
            </div>
            <div class="col-2">
                <input name="HLA-DRB3,4,5_syn_exons" id="HLA-DRB3,4,5_syn_exons" value="<?=(isset($hla_DRB3_exo) ? $hla_DRB3_exo : '')?>" type="text" onblur="required_name()" required >
                 <!--placeholder="Enter Number of Synonymous mutations in Exons" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DRB3,4,5* Introns</label>
            </div>
            <div class="col-2">
                <input name="HLA-DRB3,4,5_syn_introns" id="HLA-DRB3,4,5_syn_introns" value="<?=(isset($hla_DRB3_intro) ? $hla_DRB3_intro : '')?>" type="text" onblur="required_name()" required >
                 <!--placeholder="Enter Number of Synonymous mutations in Introns" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DRB3,4,5* Level</label>
            </div>
            <div class="col-2">
                <select name="HLA-DRB3,4,5_ex_level" id="HLA-DRB3,4,5_ex_level">
                    <option value="N">N</option>
                    <option value="L">L</option>
                    <option value="S">S</option>
                    <option value="A">A</option>
                    <option value="Q">Q</option>
                </select>
            </div>
        </div>	

    </fieldset>

         <!---HLA-DQB1*-->
         <h3>HLA-DQB1*</h3>
         <fieldset>
        <div class="row">
            <div class="col-1">
                <label>HLA-DQB1* Allele Group</label>
            </div>
            <div class="col-2">
                <input name="HLA-DQB1_allele_group" id="HLA-DQB1_allele_group" value="<?=(isset($hla_DQB1_ag) ? $hla_DQB1_ag : '')?>" type="text" onblur="required_name()" required >
                 <!--placeholder="Enter Allele Group" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DQB1* Proteins</label>
            </div>
            <div class="col-2">
                <input name="HLA-DQB1_protein" id="HLA-DQB1_protein" value="<?=(isset($hla_DQB1_pro) ? $hla_DQB1_pro : '')?>" type="text" onblur="required_name()" required >
                 <!--placeholder="Enter Number of Different Proteins" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DQB1* Exons</label>
            </div>
            <div class="col-2">
                <input name="HLA-DQB1_syn_exons" id="HLA-DQB1_syn_exons" value="<?=(isset($hla_DQB1_exo) ? $hla_DQB1_exo : '')?>" type="text" onblur="required_name()" required >
                  <!--placeholder="Enter Number of Synonymous mutations in Exons" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DQB1* Introns</label>
            </div>
            <div class="col-2">
                <input name="HLA-DQB1_syn_introns" id="HLA-DQB1_syn_introns" value="<?=(isset($hla_DQB1_intro) ? $hla_DQB1_intro : '')?>" type="text" onblur="required_name()" required >
                 <!--placeholder="Enter Number of Synonymous mutations in Introns" -->
            </div>
        </div>	

        <div class="row">
            <div class="col-1">
                <label>HLA-DQB1* Level</label>
            </div>
            <div class="col-2">
                <select name="HLA-DQB1_ex_level" id="HLA-DQB1_ex_level">
                    <option value="N">N</option>
                    <option value="L">L</option>
                    <option value="S">S</option>
                    <option value="A">A</option>
                    <option value="Q">Q</option>
                </select>
            </div>
        </div>	

    </fieldset>

         
            <div class="row">
                <label>&nbsp;</label>
                <a class="back_btn" href="../../src/php/hospital_add_patients.php">Back</a>
                <input type="submit" name="submit" value="submit" class="btn">
            </div>
         
        </form>

    </div>

</body>
</html>




<?php

  if(isset($_POST['submit'])){

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

    $hla_DRB3_ag=$_POST['HLA-DRB3,4,5_allele_group'];
    $hla_DRB3_pro=$_POST['HLA-DRB3,4,5_protein'];
    $hla_DRB3_exo=$_POST['HLA-DRB3,4,5_syn_exons'];
    $hla_DRB3_intro=$_POST['HLA-DRB3,4,5_syn_introns'];
    $hla_DRB3_lvl=$_POST['HLA-DRB3,4,5_ex_level'];

    $hla_DQB1_ag=$_POST['HLA-DQB1_allele_group'];
    $hla_DQB1_pro=$_POST['HLA-DQB1_protein'];
    $hla_DQB1_exo=$_POST['HLA-DQB1_syn_exons'];
    $hla_DQB1_intro=$_POST['HLA-DQB1_syn_introns'];
    $hla_DQB1_lvl=$_POST['HLA-DQB1_ex_level'];

    $sql="INSERT INTO `patient_hla_details`
        (
        `patient_id`,
        `HLA-A_allele_group`, `HLA-A_protein`, `HLA-A_syn_exons`, `HLA-A_syn_introns`, `HLA-A_ex_level`, 
        `HLA-B_allele_group`, `HLA-B_protein`, `HLA-B_syn_exons`, `HLA-B_syn_introns`, `HLA-B_ex_level`, 
        `HLA-C_allele_group`, `HLA-C_protein`, `HLA-C_syn_exons`, `HLA-C_syn_introns`, `HLA-C_ex_level`, 
        `HLA-DRB1_allele_group`, `HLA-DRB1_protein`, `HLA-DRB1_syn_exons`, `HLA-DRB1_syn_introns`, `HLA-DRB1_ex_level`, 
        `HLA-DRB3,4,5_allele_group`, `HLA-DRB3,4,5_protein`, `HLA-DRB3,4,5_syn_exons`, `HLA-DRB3,4,5_syn_introns`, `HLA-DRB3,4,5_ex_level`, 
        `HLA-DQB1_allele_group`, `HLA-DQB1_protein`, `HLA-DQB1_syn_exons`, `HLA-DQB1_syn_introns`, `HLA-DQB1_ex_level`
        )
         VALUES 
        (
            '$patient_id'
          `$hla_A_ag`, `$hla_A_pro`, `$hla_A_exo`, `$hla_A_intro`, `$hla_A_lvl`,
          `$hla_B_ag`, `$hla_B_pro`, `$hla_B_exo`, $hla_B_intro`, `$hla_B_lvl`,
          `$hla_C_ag`, `$hla_C_pro`, `$hla_C_exo`,`$hla_C_intro`, `$hla_C_lvl`,
          `$hla_DRB1_ag`, `$hla_DRB1_pro`, `$hla_DRB1_exo`, `$hla_DRB1_intro`, `$hla_DRB1_lvl`,
          `$hla_DRB3_ag`, `$hla_DRB3_pro`, `$hla_DRB3_exo`, `$hla_DRB3_intro`, `$hla_DRB3_lvl`,
          `$hla_DQB1_ag`, `$hla_DQB1_pro`, `$hla_DQB1_exo`, `$hla_DQB1_intro`, `$hla_DQB1_lvl`
        ) 
          ";

    $result=mysqli_query($connection,$sql);

    if($result){
      echo "<script> alert('Patient HLA details are successfully added !') </script>";
	  header("Location: hospital_hla_patient.php");
    }else{
      echo "<script> alert('Patient HLA details adding failed !') </script>";
    }

  }

?>






