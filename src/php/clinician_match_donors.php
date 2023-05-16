
<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=2)
{
    header("Location:login.php");
}

$uid=$_SESSION['uid'];
$username=$_SESSION['username'];
//$hlaid=$_GET['pa_id'];

//$uid=$_SESSION['uid'];
//$username=$_SESSION['username'];
//$hospital_id=$_SESSION['hospital_id'];
//$hid=$_GET['pa_id'];

//Get donor details
$did=$_GET['match_id'];
$donor_name=$_GET['donor_name'];
$donor_blood_group=$_GET['donor_blood_group'];

$d_hla_A_ag=$_GET['d_hla_A_ag'];
$d_hla_A_pro=$_GET['d_hla_A_pro'];
$d_hla_A_exo=$_GET['d_hla_A_exo'];
$d_hla_A_intro=$_GET['d_hla_A_intro'];
$d_hla_A_lvl=$_GET['d_hla_A_lvl'];

$d_hla_B_ag=$_GET['d_hla_B_ag'];
$d_hla_B_pro=$_GET['d_hla_B_pro'];
$d_hla_B_exo=$_GET['d_hla_B_exo'];
$d_hla_B_intro=$_GET['d_hla_B_intro'];
$d_hla_B_lvl=$_GET['d_hla_B_lvl'];

$d_hla_C_ag=$_GET['d_hla_C_ag'];
$d_hla_C_pro=$_GET['d_hla_C_pro'];
$d_hla_C_exo=$_GET['d_hla_C_exo'];
$d_hla_C_intro=$_GET['d_hla_C_intro'];
$d_hla_C_lvl=$_GET['d_hla_C_lvl'];

$d_hla_DRB1_ag=$_GET['d_hla_DRB1_ag'];
$d_hla_DRB1_pro=$_GET['d_hla_DRB1_pro'];
$d_hla_DRB1_exo=$_GET['d_hla_DRB1_exo'];
$d_hla_DRB1_intro=$_GET['d_hla_DRB1_intro'];
$d_hla_DRB1_lvl=$_GET['d_hla_DRB1_lvl'];

$d_hla_DRB3_ag=$_GET['d_hla_DRB3_ag'];
$d_hla_DRB3_pro=$_GET['d_hla_DRB3_pro'];
$d_hla_DRB3_exo=$_GET['d_hla_DRB3_exo'];
$d_hla_DRB3_intro=$_GET['d_hla_DRB3_intro'];
$d_hla_DRB3_lvl=$_GET['d_hla_DRB3_lvl'];

$d_hla_DQB1_ag=$_GET['d_hla_DQB1_ag'];
$d_hla_DQB1_pro=$_GET['d_hla_DQB1_pro'];
$d_hla_DQB1_exo=$_GET['d_hla_DQB1_exo'];
$d_hla_DQB1_intro=$_GET['d_hla_DQB1_intro'];
$d_hla_DQB1_lvl=$_GET['d_hla_DQB1_lvl'];


//Get patient details
$pid=$_GET['patient_match_id'];
$patient_name=$_GET['patient_name'];
$patient_blood_group=$_GET['patient_blood_group'];

$p_hla_A_ag=$_GET['p_hla_A_ag'];
$p_hla_A_pro=$_GET['p_hla_A_pro'];
$p_hla_A_exo=$_GET['p_hla_A_exo'];
$p_hla_A_intro=$_GET['p_hla_A_intro'];
$p_hla_A_lvl=$_GET['p_hla_A_lvl'];

$p_hla_B_ag=$_GET['p_hla_B_ag'];
$p_hla_B_pro=$_GET['p_hla_B_pro'];
$p_hla_B_exo=$_GET['p_hla_B_exo'];
$p_hla_B_intro=$_GET['p_hla_B_intro'];
$p_hla_B_lvl=$_GET['p_hla_B_lvl'];

$p_hla_C_ag=$_GET['p_hla_C_ag'];
$p_hla_C_pro=$_GET['p_hla_C_pro'];
$p_hla_C_exo=$_GET['p_hla_C_exo'];
$p_hla_C_intro=$_GET['p_hla_C_intro'];
$p_hla_C_lvl=$_GET['p_hla_C_lvl'];

$p_hla_DRB1_ag=$_GET['p_hla_DRB1_ag'];
$p_hla_DRB1_pro=$_GET['p_hla_DRB1_pro'];
$p_hla_DRB1_exo=$_GET['p_hla_DRB1_exo'];
$p_hla_DRB1_intro=$_GET['p_hla_DRB1_intro'];
$p_hla_DRB1_lvl=$_GET['p_hla_DRB1_lvl'];

$p_hla_DRB3_ag=$_GET['p_hla_DRB3_ag'];
$p_hla_DRB3_pro=$_GET['p_hla_DRB3_pro'];
$p_hla_DRB3_exo=$_GET['p_hla_DRB3_exo'];
$p_hla_DRB3_intro=$_GET['p_hla_DRB3_intro'];
$p_hla_DRB3_lvl=$_GET['p_hla_DRB3_lvl'];

$p_hla_DQB1_ag=$_GET['p_hla_DQB1_ag'];
$p_hla_DQB1_pro=$_GET['p_hla_DQB1_pro'];
$p_hla_DQB1_exo=$_GET['p_hla_DQB1_exo'];
$p_hla_DQB1_intro=$_GET['p_hla_DQB1_intro'];
$p_hla_DQB1_lvl=$_GET['p_hla_DQB1_lvl'];

//$donor_count=$_GET['donor_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/clinician_match.css" />
    <title>Clinician - Match</title>
</head>
<body>

    
        <div class="match">

            <!--Patient table-->
            <table class="patient_data">
                <tr class="theads">
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <!--<th>Blood Group</th>-->
                    <th>HLA-A*</th>
                    <th>HLA-B*</th>
                    <th>HLA-C*</th>
                    <th>HLA-DRB1*</th>
                    <th>HLA-DRB3*</th>
                    <th>HLA-DRQB1*</th>
                </tr>
    <?php

     echo "<tr>";
            
            echo "<td>".$pid."</td>";
            echo "<td>".$patient_name."</td>";
            //echo "<td>".$patient_blood_group."</td>";
            echo "<td>".$p_hla_A_ag.":".$p_hla_A_pro.":".$p_hla_A_exo.":".$p_hla_A_intro.":".$p_hla_A_lvl."</td>";
            echo "<td>".$p_hla_B_ag.":".$p_hla_B_pro.":".$p_hla_B_exo.":".$p_hla_B_intro.":".$p_hla_B_lvl."</td>";
            echo "<td>".$p_hla_C_ag.":".$p_hla_C_pro.":".$p_hla_C_exo.":".$p_hla_C_intro.":".$p_hla_C_lvl."</td>";
            echo "<td>".$p_hla_DRB1_ag.":".$p_hla_DRB1_pro.":".$p_hla_DRB1_exo.":".$p_hla_DRB1_intro.":".$p_hla_DRB1_lvl."</td>";
            echo "<td>".$p_hla_DRB3_ag.":".$p_hla_DRB3_pro.":".$p_hla_DRB3_exo.":".$p_hla_DRB3_intro.":".$p_hla_DRB3_lvl."</td>";
            echo "<td>".$p_hla_DQB1_ag.":".$p_hla_DQB1_pro.":".$p_hla_DQB1_exo.":".$p_hla_DQB1_intro.":".$p_hla_DQB1_lvl."</td>";   
            
    echo "<tr>"."<br>";

    

    ?>

    </table>


    <!--Matching Donor table-->
    <table class="donors_data">
                <tr class="theads">
                    <th>Donor ID</th>
                    <th>Donor Name</th>
                    <!--<th>Blood Group</th>-->
                    <th>HLA-A*</th>
                    <th>HLA-B*</th>
                    <th>HLA-C*</th>
                    <th>HLA-DRB1*</th>
                    <th>HLA-DRB3*</th>
                    <th>HLA-DRQB1*</th>
                </tr>

                <?php

    echo "<tr>";
            
            echo "<td>".$did."</td>";
            echo "<td>".$donor_name."</td>";
            //echo "<td>".$donor_blood_group."</td>";
            echo "<td>".$d_hla_A_ag.":".$d_hla_A_pro.":".$d_hla_A_exo.":".$d_hla_A_intro.":".$d_hla_A_lvl."</td>";
            echo "<td>".$d_hla_B_ag.":".$d_hla_B_pro.":".$d_hla_B_exo.":".$d_hla_B_intro.":".$d_hla_B_lvl."</td>";
            echo "<td>".$d_hla_C_ag.":".$d_hla_C_pro.":".$d_hla_C_exo.":".$d_hla_C_intro.":".$d_hla_C_lvl."</td>";
            echo "<td>".$d_hla_DRB1_ag.":".$d_hla_DRB1_pro.":".$d_hla_DRB1_exo.":".$d_hla_DRB1_intro.":".$d_hla_DRB1_lvl."</td>";
            echo "<td>".$d_hla_DRB3_ag.":".$d_hla_DRB3_pro.":".$d_hla_DRB3_exo.":".$d_hla_DRB3_intro.":".$d_hla_DRB3_lvl."</td>";
            echo "<td>".$d_hla_DQB1_ag.":".$d_hla_DQB1_pro.":".$d_hla_DQB1_exo.":".$d_hla_DQB1_intro.":".$d_hla_DQB1_lvl."</td>";   
            
    echo "<tr>";

    ?>
    </table>


    <table class="results">

<?php
        
        $match=0;
        $mismatch=0;

        //Matching HLA-A
        echo "<tr>";
            //A-Match1
            if($p_hla_A_ag.":".$p_hla_A_pro==$d_hla_A_ag.":".$d_hla_A_pro){
                echo "<td>"."HLA Typing 1: HLA-A allele groups : One matched"."</td>";
                $match++;

            }else{
                echo "<td style='color: red;'>HLA Typing 1: HLA-A allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";

            //A-Match2
        echo "<tr>";
            if($p_hla_A_exo.":".$p_hla_A_intro==$d_hla_A_exo.":".$d_hla_A_intro){
                echo "<td>"."HLA Typing 2: HLA-A allele groups : One matched"."</td>";
                $match++;

            }else{
                echo "<td style='color:red'>HLA Typing 2: HLA-A allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";


        //Matching HLA-B
            //B-Match1
        echo "<tr>";
            if($p_hla_B_ag.":".$p_hla_B_pro==$d_hla_B_ag.":".$d_hla_B_pro){
                echo "<td>"."HLA Typing 3: HLA-B allele groups : One matched"."</td>";
                $match++;

            }else{
                echo "<td style='color: red;'>HLA Typing 3: HLA-B allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";

            //B-Match2
        echo "<tr>";
            if($p_hla_B_exo.":".$p_hla_B_intro==$d_hla_B_exo.":".$d_hla_B_intro){
                echo "<td>"."HLA Typing 4: HLA-B allele groups : One matched"."</td>";
                $match++;

            }else{
                echo "<td style='color: red;'>HLA Typing 4: HLA-B allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";


        //Matching HLA-C
            //C-Match1
        echo "<tr>";
            if($p_hla_C_ag.":".$p_hla_C_pro==$d_hla_C_ag.":".$d_hla_C_pro){
                echo "<td>"."HLA Typing 5: HLA-C allele groups : One matched"."</td>";
                $match++;

            }else{
                echo "<td style='color: red;'>HLA Typing 5: HLA-C allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";

            //C-Match2
        echo "<tr>";
            if($p_hla_C_exo.":".$p_hla_C_intro==$d_hla_C_exo.":".$d_hla_C_intro){
                echo "<td>"."HLA Typing 6: HLA-C allele groups : One mismatch"."</td>";
                $match++;

            }else{
                echo "<td style='color: red;'>HLA Typing 5: HLA-C allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";


        //Matching HLA-DRB1
            //DRB1-Match1
        echo "<tr>";
            if($p_hla_C_ag.":".$p_hla_C_pro==$d_hla_C_ag.":".$d_hla_C_pro){
                echo "<td>"."HLA Typing 7: HLA-DRB1 allele groups : One matched"."</td>";
                $match++;

            }else{
                echo "<td style='color: red;'>HLA Typing 7: HLA-DRB1 allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";

            //DRB1-Match2
        echo "<tr>";
            if($p_hla_DRB1_exo.":".$p_hla_DRB1_intro==$d_hla_DRB1_exo.":".$d_hla_DRB1_intro){
                echo "<td>"."HLA Typing 8: HLA-DRB1 allele groups : One matched"."</td>";
                $match++;

            }else{
                echo "<td style='color: red;'>HLA Typing 8: HLA-DRB1 allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";


        //Matching HLA-DRB3
            //DRB3,4,5-Match1
        echo "<tr>";
            if($p_hla_DRB1_ag.":".$p_hla_DRB1_pro==$d_hla_DRB1_ag.":".$d_hla_DRB1_pro){
                echo "<td>"."HLA Typing 9: HLA-DRB3 allele groups : One matched"."</td>";
                $match++;

            }else{
                echo "<td style='color: red;'>HLA Typing 9: HLA-DRB3 allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";

            //DRB3,4,5-Match2
        echo "<tr>";
            if($p_hla_DRB3_exo.":".$p_hla_DRB3_intro==$d_hla_DRB3_exo.":".$d_hla_DRB3_intro){
                echo "<td>"."HLA Typing 10: HLA-DRB3 allele groups : One matched"."</td>";
                $match++;

            }else{
                echo "<td style='color: red;'>HLA Typing 10: HLA-DRB3 allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";


        //Matching HLA-DQB1
            //DQB1-Match1
        echo "<tr>";
            if($p_hla_DQB1_ag.":".$p_hla_DQB1_pro==$d_hla_DQB1_ag.":".$d_hla_DQB1_pro){
                echo "<td>"."HLA Typing 11: HLA-DQB1 allele groups : One matched"."</td>";
                $match++;

            }else{
                echo "<td style='color: red;'>HLA Typing 11: HLA-DQB1 allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";

            //DQB1-Match2
        echo "<tr>";
            if($p_hla_DQB1_exo.":".$p_hla_DQB1_intro==$d_hla_DQB1_exo.":".$d_hla_DQB1_intro){
                echo "<td>HLA Typing 12: HLA-DQB1 allele groups : One matched</td>";
                $match++;

            }else{
                echo "<td style='color: red;'>HLA Typing 12: HLA-DQB1 allele groups : One mismatch</td>";
                $mismatch++;
            }

                //echo "<br>".$match;
                //echo "<br>".$mismatch."<br>";
        echo "</tr>";
        echo "</br>";


            //Total Matches & Mismatches Count
        echo "<tr>";
            echo "<br>"."<td style='color:white ;background-color:#308C83;'>Total Matches Count =".$match."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<br>"."<td style='color:white ;background-color:#308C83;'>Total Mismatches Count =".$mismatch."</td>";
        echo "</tr>";


        ?>

</table>


<?php



?>


          

