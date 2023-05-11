<?php

//--Add connection.php file---
require_once "../../config/connection.php";

//--Add donor_sign_validations.php
require_once "../../src/php/clinician_donor_hla_validations.php";







//If user clicks create button
if (isset($_POST["create-btn"])) {
    //Get form input data
    $donor_id = trim($_POST["donor_id"]);
    $hla_antigen =trim($_POST["hla_antigen"]);
    $hla_allele_family = trim($_POST["hla_allele_family"]);
    $hla_2nd = trim($_POST["hla_2nd"]);
    $hla_3rd = trim($_POST["hla_3rd"]);
    $hla_4th = trim($_POST["hla_4th"]);
    $hla_5th = trim($_POST["hla_5th"]);







    //Input validation
    if (inputsEmpty($donor_id,$hla_antigen,$hla_allele_family,$hla_2nd,$hla_3rd,$hla_4th,$hla_5th)) {
        header("location:clinician_donor_hla_index.php?error=Please fill all the fields");
   } 
   elseif(invalidDonorID($donor_id)){
        header("location:clinician_donor_hla_index.php?error=Invalid donor ID");

   }
    
    
    else if (hlaInvalid($hla_antigen,$hla_allele_family,$hla_2nd,$hla_3rd,$hla_4th,$hla_5th)) {
        header("location: clinician_donor_hla_index.php?error=Invalid HLA detail entries");
    }

    else {
        //If all inputs are error free
       addHLA($connection,$donor_id,$hla_antigen,$hla_allele_family,$hla_2nd,$hla_3rd,$hla_4th,$hla_5th);
        
    }
}
else{
    header("Location: clinician_donor_hla_index.php");
    exit();

}

//Function for register a new user
function addHLA($connection,$donor_id,$hla_antigen,$hla_allele_family,$hla_2nd,$hla_3rd,$hla_4th,$hla_5th){
    //Query
    $sql = "INSERT INTO donor_hla_details (donor_id,hla_antigen,hla_allele_family,hla_2nd_type,hla_3rd_type,hla_4th_type,hla_5th_type) VALUES (?,?,?,?,?,?,?); ";
       //Initialize the prepared statement 
       $stmt = mysqli_stmt_init($connection);
       //Bind the statement with the query and check errors
       if(!mysqli_stmt_prepare($stmt, $sql)){
           header("location: clinician_donor_hla_index.php?error=failedstmt");
       
       } 
       else {
           //Bind data with the statement
           mysqli_stmt_bind_param($stmt, "sssssss",$donor_id,$hla_antigen,$hla_allele_family,$hla_2nd,$hla_3rd,$hla_4th,$hla_5th);
           //Execute the statement
           mysqli_stmt_execute($stmt);
           //close the statement
        mysqli_stmt_close($stmt);
        header("location: clinician_view_donor_hla.php");
        
    }


}










?>