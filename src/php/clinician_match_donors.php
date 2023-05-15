
<?php

//$uid=$_SESSION['uid'];
$username=$_SESSION['username'];
//$hospital_id=$_SESSION['hospital_id'];
//$hid=$_GET['pa_id'];
$match_id=$_GET['donor_id'];








$hospital_id=$_SESSION['hospital_id'];

$sql="SELECT patient_hla_details.* ,patient.patient_id, patient.patient_name, patient.patient_name, patient.blood_group
      FROM patient_hla_details
      JOIN patient ON patient_hla_details.patient_id = patient.patient_id
      WHERE hospital_id=$hospital_id AND ph_id=$hlaid
      ORDER BY ph_id";
//echo $sql;

$result=mysqli_query($connection,$sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        //$hid='HLAID'.str_pad($row['ph_id'],3,'0',STR_PAD_LEFT);
        $patient_id=$row['patient_id'];
        $pid='PID'.str_pad($row['patient_id'],3,'0',STR_PAD_LEFT);
        $patient_name=$row['patient_name'];
        $patient_blood_group=$row['blood_group'];


        $p_hla_A_ag=$row['HLA-A_allele_group'];
        $p_hla_A_pro=$row['HLA-A_protein'];
        $p_hla_A_exo=$row['HLA-A_syn_exons'];
        $p_hla_A_intro=$row['HLA-A_syn_introns'];
        $p_hla_A_lvl=$row['HLA-A_ex_level'];

        $p_hla_B_ag=$row['HLA-B_allele_group'];
        $p_hla_B_pro=$row['HLA-B_protein'];
        $p_hla_B_exo=$row['HLA-B_syn_exons'];
        $p_hla_B_intro=$row['HLA-B_syn_introns'];
        $p_hla_B_lvl=$row['HLA-B_ex_level'];

        $p_hla_C_ag=$row['HLA-C_allele_group'];
        $p_hla_C_pro=$row['HLA-C_protein'];
        $p_hla_C_exo=$row['HLA-C_syn_exons'];
        $p_hla_C_intro=$row['HLA-C_syn_introns'];
        $p_hla_C_lvl=$row['HLA-C_ex_level'];

        $p_hla_DRB1_ag=$row['HLA-DRB1_allele_group'];
        $p_hla_DRB1_pro=$row['HLA-DRB1_protein'];
        $p_hla_DRB1_exo=$row['HLA-DRB1_syn_exons'];
        $p_hla_DRB1_intro=$row['HLA-DRB1_syn_introns'];
        $p_hla_DRB1_lvl=$row['HLA-DRB1_ex_level'];

        $p_hla_DRB3_ag=$row['HLA-DRB3,4,5_allele_group'];
        $p_hla_DRB3_pro=$row['HLA-DRB3,4,5_protein'];
        $p_hla_DRB3_exo=$row['HLA-DRB3,4,5_syn_exons'];
        $p_hla_DRB3_intro=$row['HLA-DRB3,4,5_syn_introns'];
        $p_hla_DRB3_lvl=$row['HLA-DRB3,4,5_ex_level'];

        $p_hla_DQB1_ag=$row['HLA-DQB1_allele_group'];
        $p_hla_DQB1_pro=$row['HLA-DQB1_protein'];
        $p_hla_DQB1_exo=$row['HLA-DQB1_syn_exons'];
        $p_hla_DQB1_intro=$row['HLA-DQB1_syn_introns'];
        $p_hla_DQB1_lvl=$row['HLA-DQB1_ex_level'];


    }
}

$sql="SELECT donor_hla_details.* ,donor.donor_id, donor.donor_name, donor.blood_group
FROM donor_hla_details
JOIN donor ON donor_hla_details.donor_id = donor.donor_id
ORDER BY dh_id";
//echo $sql;

$result=mysqli_query($connection,$sql);

if($result){
while($row=mysqli_fetch_assoc($result)){
  if ($row['blood_group'] == $patient_blood_group) {
      $donor_count++;
  
  //$dhid='HLAID'.str_pad($row['ph_id'],3,'0',STR_PAD_LEFT);
  $donor_id=$row['donor_id'];
  $did='D'.str_pad($row['donor_id'],3,'0',STR_PAD_LEFT);
  $donor_name=$row['donor_name'];
  $donor_blood_group=$row['blood_group'];


  $d_hla_A_ag=$row['HLA-A_allele_group'];
  $d_hla_A_pro=$row['HLA-A_protein'];
  $d_hla_A_exo=$row['HLA-A_syn_exons'];
  $d_hla_A_intro=$row['HLA-A_syn_introns'];
  $d_hla_A_lvl=$row['HLA-A_ex_level'];

  $d_hla_B_ag=$row['HLA-B_allele_group'];
  $d_hla_B_pro=$row['HLA-B_protein'];
  $d_hla_B_exo=$row['HLA-B_syn_exons'];
  $d_hla_B_intro=$row['HLA-B_syn_introns'];
  $d_hla_B_lvl=$row['HLA-B_ex_level'];

  $d_hla_C_ag=$row['HLA-C_allele_group'];
  $d_hla_C_pro=$row['HLA-C_protein'];
  $d_hla_C_exo=$row['HLA-C_syn_exons'];
  $d_hla_C_intro=$row['HLA-C_syn_introns'];
  $d_hla_C_lvl=$row['HLA-C_ex_level'];

  $d_hla_DRB1_ag=$row['HLA-DRB1_allele_group'];
  $d_hla_DRB1_pro=$row['HLA-DRB1_protein'];
  $d_hla_DRB1_exo=$row['HLA-DRB1_syn_exons'];
  $d_hla_DRB1_intro=$row['HLA-DRB1_syn_introns'];
  $d_hla_DRB1_lvl=$row['HLA-DRB1_ex_level'];

  $d_hla_DRB3_ag=$row['HLA-DRB3,4,5_allele_group'];
  $d_hla_DRB3_pro=$row['HLA-DRB3,4,5_protein'];
  $d_hla_DRB3_exo=$row['HLA-DRB3,4,5_syn_exons'];
  $d_hla_DRB3_intro=$row['HLA-DRB3,4,5_syn_introns'];
  $d_hla_DRB3_lvl=$row['HLA-DRB3,4,5_ex_level'];

  $d_hla_DQB1_ag=$row['HLA-DQB1_allele_group'];
  $d_hla_DQB1_pro=$row['HLA-DQB1_protein'];
  $d_hla_DQB1_exo=$row['HLA-DQB1_syn_exons'];
  $d_hla_DQB1_intro=$row['HLA-DQB1_syn_introns'];
  $d_hla_DQB1_lvl=$row['HLA-DQB1_ex_level'];


  echo "<tr>";
            
            echo "<td>".$match_id."</td>";
            echo "<td>".$donor_name."</td>";
            echo "<td>".$donor_blood_group."</td>";
            echo "<td>".$d_hla_A_ag.":".$d_hla_A_pro.":".$d_hla_A_exo.":".$d_hla_A_intro.":".$d_hla_A_lvl."</td>";
            echo "<td>".$d_hla_B_ag.":".$d_hla_B_pro.":".$d_hla_B_exo.":".$d_hla_B_intro.":".$d_hla_B_lvl."</td>";
            echo "<td>".$d_hla_C_ag.":".$d_hla_C_pro.":".$d_hla_C_exo.":".$d_hla_C_intro.":".$d_hla_C_lvl."</td>";
            echo "<td>".$d_hla_DRB1_ag.":".$d_hla_DRB1_pro.":".$d_hla_DRB1_exo.":".$d_hla_DRB1_intro.":".$d_hla_DRB1_lvl."</td>";
            echo "<td>".$d_hla_DRB3_ag.":".$d_hla_DRB3_pro.":".$d_hla_DRB3_exo.":".$d_hla_DRB3_intro.":".$d_hla_DRB3_lvl."</td>";
            echo "<td>".$d_hla_DQB1_ag.":".$d_hla_DQB1_pro.":".$d_hla_DQB1_exo.":".$d_hla_DQB1_intro.":".$d_hla_DQB1_lvl."</td>";
          
            
            echo "<tr>";


  }
}
}








        ?>







<?php
        
        $match=0;
        $mismatch=0;

        if($donor_count!=0){

        //Matching HLA-A
            //A-Match1
            if($p_hla_A_ag.":".$p_hla_A_pro==$d_hla_A_ag.":".$d_hla_A_pro){
                echo "HLA Typing 1: HLA-A allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 1: HLA-A allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";

            //A-Match2
            if($p_hla_A_exo.":".$p_hla_A_intro==$d_hla_A_exo.":".$d_hla_A_intro){
                echo "HLA Typing 2: HLA-A allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 2: HLA-A allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";


        //Matching HLA-B
            //B-Match1
            if($p_hla_B_ag.":".$p_hla_B_pro==$d_hla_B_ag.":".$d_hla_B_pro){
                echo "HLA Typing 3: HLA-B allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 3: HLA-A allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";

            //B-Match2
            if($p_hla_B_exo.":".$p_hla_B_intro==$d_hla_B_exo.":".$d_hla_B_intro){
                echo "HLA Typing 4: HLA-B allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 4: HLA-A allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";


        //Matching HLA-C
            //C-Match1
            if($p_hla_C_ag.":".$p_hla_C_pro==$d_hla_C_ag.":".$d_hla_C_pro){
                echo "HLA Typing 5: HLA-C allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 5: HLA-C allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";

            //C-Match2
            if($p_hla_C_exo.":".$p_hla_C_intro==$d_hla_C_exo.":".$d_hla_C_intro){
                echo "HLA Typing 6: HLA-C allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 6: HLA-C allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";


        //Matching HLA-DRB1
            //DRB1-Match1
            if($p_hla_C_ag.":".$p_hla_C_pro==$d_hla_C_ag.":".$d_hla_C_pro){
                echo "HLA Typing 7: HLA-DRB1 allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 7: HLA-DRB1 allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";

            //DRB1-Match2
            if($p_hla_DRB1_exo.":".$p_hla_DRB1_intro==$d_hla_DRB1_exo.":".$d_hla_DRB1_intro){
                echo "HLA Typing 8: HLA-DRB1 allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 8: HLA-DRB1 allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";


        //Matching HLA-DRB3,4,5
            //DRB3,4,5-Match1
            if($p_hla_DRB1_ag.":".$p_hla_DRB1_pro==$d_hla_DRB1_ag.":".$d_hla_DRB1_pro){
                echo "HLA Typing 9: HLA-DRB3,4,5 allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 9: HLA-DRB3,4,5 allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";

            //DRB3,4,5-Match2
            if($p_hla_DRB3_exo.":".$p_hla_DRB3_intro==$d_hla_DRB3_exo.":".$d_hla_DRB3_intro){
                echo "HLA Typing 10: HLA-DRB3,4,5 allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 10: HLA-DRB3,4,5 allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";


        //Matching HLA-DQB1
            //DQB1-Match1
            if($p_hla_DQB1_ag.":".$p_hla_DQB1_pro==$d_hla_DQB1_ag.":".$d_hla_DQB1_pro){
                echo "HLA Typing 11: HLA-DQB1 allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 11: HLA-DQB1 allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";

            //DQB1-Match2
            if($p_hla_DQB1_exo.":".$p_hla_DQB1_intro==$d_hla_DQB1_exo.":".$d_hla_DQB1_intro){
                echo "HLA Typing 12: HLA-DQB1 allele groups : One matched";
                $match++;

            }else{
                echo "HLA Typing 12: HLA-DQB1 allele groups : One mismatch";
                $mismatch++;
            }

                echo "<br>".$match;
                echo "<br>".$mismatch."<br>";


            //Total Matches & Mismatches Count
            echo "<br>"."Total Matches Count =".$match;
            echo "<br>"."Total Mismatches Count =".$mismatch;
                
        }else{
            echo "No matching donors";
        }


        ?>



           </div>
    
        
    </body>
    </html>


