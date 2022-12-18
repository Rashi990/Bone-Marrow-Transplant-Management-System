<?php

//--Functions to validate inputs--


//Check if register inputs are empty

function inputsEmpty($donor_id,$hla_antigen,$hla_allele_family,$hla_2nd,$hla_3rd,$hla_4th,$hla_5th){
    
    if(empty($donor_id)||empty($hla_antigen)||empty($hla_allele_family)||empty($hla_2nd)||empty($hla_3rd)||empty($hla_4th)||empty($hla_5th)){
        $value = true;

    }
    else{
        $value = false;
    }
    return $value;
}

function invalidDonorID($donor_id){
    
    if(!preg_match("/^[\d]{1,}$/",$donor_id)){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}



//Check if names are invalid
function hlaInvalid($hla_antigen,$hla_allele_family,$hla_2nd,$hla_3rd,$hla_4th,$hla_5th){

    if (!preg_match("/^[a-zA-Z]+$/", $hla_antigen)) {

        $value = true;
    }
    elseif (!preg_match("/^[a-zA-Z]+$/", $hla_allele_family)) {

        $value = true;
    }
    elseif (!preg_match("/^[a-zA-Z]+$/", $hla_2nd)) {

        $value = true;
    }
    elseif (!preg_match("/^[a-zA-Z]+$/", $hla_3rd)) {

        $value = true;
    }
    elseif (!preg_match("/^[a-zA-Z]+$/", $hla_4th)) {

        $value = true;
    }
    elseif (!preg_match("/^[a-zA-Z]+$/", $hla_5th)) {

        $value = true;
    }
    
    else{
        $value = false;
    }
    return $value;
}

?>