<?php
require_once('admin_sidebar.php');
?>
<?php
require_once('../../config/connection.php');
session_start();
if($_SESSION['userlevel']!=0)
{
    header("Location:admin_login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>

    <link rel="stylesheet" type="text/css" href="../../public/css/admin_viewtesting.css">
    
</head>
<body>
   <!-- header  -->
   <div class="main-content">
        <header>
            <h2>
                View Test Details
            </h2>
            <div class="search-wrapper">
            <span class="material-icons">search</span>
                <input type="search" placeholder="search here">
            </div>
    
           
    

            <div class="box-icon">
                <div class="item">
                    <span class="material-icons">notifications</span>
                    <span class="not" id="notify">12</span>
                </div>
                




</script>
                <div class="item">
                    <span class="material-icons">chat_bubble</span>
                </div>
                
            </div>
            
            <div class="user-wrapper">
            <a href="../../src/php/admin_profile_page.php"> <img src="../../public/images/Xiao_Zhan.jpeg" alt="profile_pictire" width="50px" height="50px" ></a>
                <div> <h4>Welcome! </h4><?php echo $_SESSION['username'];?></div>
            </div>
</header>
</div>
<div class="right">
    <main>
<nav>
        <ul>
        <li><a class="active" href="#">Tested HLA Details</a> </li>
        <li><a href="admin_add_test_result.php">Add Testing Report Details</a></li>
        
      </ul>
    </nav>
    <div class="cards-2">
            <div class="card-single-2"> 
                <div class="title">
                    <h3>All Donor HLA Details</h3>
                </div>
                <table>
                    <tr>
                        <th>Hospital ID</th>
                        <th>Donor ID</th>
                        <th >HLA Details</th>
                    </tr>
                
                    <?php 
                     
                       
                       $sql="SELECT * FROM donor_hla_details
                             JOIN donor ON donor_hla_details.donor_id = donor.donor_id
                             ORDER BY dh_id";
                       //echo $sql;
                       
                       $result=mysqli_query($connection,$sql);
                       
                       if($result){
                           while($row=mysqli_fetch_assoc($result)){
                               $hid='HLAID'.str_pad($row['dh_id'],3,'0',STR_PAD_LEFT);
                               $donor_id=$row['donor_id'];
                               $pid='PID'.str_pad($row['donor_id'],3,'0',STR_PAD_LEFT);
                       
                               $hla_A_ag=$row['HLA-A_allele_group'];
                               $hla_A_pro=$row['HLA-A_protein'];
                               $hla_A_exo=$row['HLA-A_syn_exons'];
                               $hla_A_intro=$row['HLA-A_syn_introns'];
                               $hla_A_lvl=$row['HLA-A_ex_level'];
                       
                               $hla_B_ag=$row['HLA-B_allele_group'];
                               $hla_B_pro=$row['HLA-B_protein'];
                               $hla_B_exo=$row['HLA-B_syn_exons'];
                               $hla_B_intro=$row['HLA-B_syn_introns'];
                               $hla_B_lvl=$row['HLA-B_ex_level'];
                       
                               $hla_C_ag=$row['HLA-C_allele_group'];
                               $hla_C_pro=$row['HLA-C_protein'];
                               $hla_C_exo=$row['HLA-C_syn_exons'];
                               $hla_C_intro=$row['HLA-C_syn_introns'];
                               $hla_C_lvl=$row['HLA-C_ex_level'];
                       
                               $hla_DRB1_ag=$row['HLA-DRB1_allele_group'];
                               $hla_DRB1_pro=$row['HLA-DRB1_protein'];
                               $hla_DRB1_exo=$row['HLA-DRB1_syn_exons'];
                               $hla_DRB1_intro=$row['HLA-DRB1_syn_introns'];
                               $hla_DRB1_lvl=$row['HLA-DRB1_ex_level'];
                       
                               $hla_DRB3_ag=$row['HLA-DRB3,4,5_allele_group'];
                               $hla_DRB3_pro=$row['HLA-DRB3,4,5_protein'];
                               $hla_DRB3_exo=$row['HLA-DRB3,4,5_syn_exons'];
                               $hla_DRB3_intro=$row['HLA-DRB3,4,5_syn_introns'];
                               $hla_DRB3_lvl=$row['HLA-DRB3,4,5_ex_level'];
                       
                               $hla_DQB1_ag=$row['HLA-DQB1_allele_group'];
                               $hla_DQB1_pro=$row['HLA-DQB1_protein'];
                               $hla_DQB1_exo=$row['HLA-DQB1_syn_exons'];
                               $hla_DQB1_intro=$row['HLA-DQB1_syn_introns'];
                               $hla_DQB1_lvl=$row['HLA-DQB1_ex_level'];
                       
                       
                               echo "<tr>";
                       
                                   echo "<td>".$hid."</td>";
                                   echo "<td>".$pid."</td>";
                                   echo "<td>".$hla_A_ag.":".$hla_A_pro.":".$hla_A_exo.":".$hla_A_intro.":".$hla_A_lvl."</td>";
                                   echo "<td>".$hla_B_ag.":".$hla_B_pro.":".$hla_B_exo.":".$hla_B_intro.":".$hla_B_lvl."</td>";
                                   echo "<td>".$hla_C_ag.":".$hla_C_pro.":".$hla_C_exo.":".$hla_C_intro.":".$hla_C_lvl."</td>";
                                   echo "<td>".$hla_DRB1_ag.":".$hla_DRB1_pro.":".$hla_DRB1_exo.":".$hla_DRB1_intro.":".$hla_DRB1_lvl."</td>";
                                   echo "<td>".$hla_DRB3_ag.":".$hla_DRB3_pro.":".$hla_DRB3_exo.":".$hla_DRB3_intro.":".$hla_DRB3_lvl."</td>";
                                   echo "<td>".$hla_DQB1_ag.":".$hla_DQB1_pro.":".$hla_DQB1_exo.":".$hla_DQB1_intro.":".$hla_DQB1_lvl."</td>";
                       
                                //    echo "<td><a href='hospital_view_hla_patient.php?viewid=".$hid."' class='view'><abbr title='View'><span class='material-icons'>visibility</span></a></abbr></td>";
                                //    echo "<td><a href='hospital_update_hla_patient.php?updateid=".$hid."' class='edit'><abbr title='Edit'><span class='material-icons'>edit_square</span></abbr></a></td>";
                       
                               echo "</tr>";
                           }}
   ?>
                </table>
            </div>
            </main>
</div>

        
    
    
</body>
</html>