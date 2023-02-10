<?php

//--Add connection.php file---
require_once "../../config/connection.php";

//--Add donor_sign_validations.php
require_once "../../src/php/donor_reg_validations.php";


//If user clicks create button
if (isset($_POST["create-btn"])) {
    //Get form input data
    $fname = trim($_POST["fname"]);
    $lname =trim($_POST["lname"]);
    $email = trim($_POST["email"]);
    $tel = trim($_POST["tel"]);
    $address = trim($_POST["address"]);
    $city= trim($_POST["city"]);
    $district = trim($_POST["district"]);
    $dob = trim($_POST["dob"]);
    $nic = trim($_POST["nic"]);
    $marital = trim($_POST["marital"]);
    $gender = trim($_POST["gender"]);
   


    //Input validation
    if (inputsEmptyRegister($fname,$lname,$email,$tel,$address,$city,$district,$dob,$nic,$marital,$gender)) {
        header("location:donor_reg3_index.php?error=Please fill all the fields");
    } else if (nameInvalid($fname,$lname)) {
        header("location: donor_signup_index.php?error=Names are Invalid");
    } 
    
    
    else if (emailInvalid($email)) {
        header("location: donor_reg3_index.php?error=Invalid Email");
    }
     else if (mobileInvalid($tel)) {
        header("location: donor_reg3_index.php?err=invalid Telephone Number");
    }
    else if (emailAvailable($connection, $email,)) {
        header("location: donor_reg3_index.php?error=Email is already available");
    }
    
    else if (nicInvalid($nic)) {
        header("location: donor_reg3_index.php?error=Invalid NIC Number");
    }
    
     else {
        //If all inputs are error free
       registerNewUser($connection, $fname,$lname,$email,$tel,$address,$city,$district,$dob,$gender,$nic,$marital);
        
    }
}
else{
    header("Location: donor_reg3_index.php");
    exit();

}

//Function for register a new user
function registerNewUser($connection, $fname,$lname,$email,$tel,$address,$city,$district,$dob,$gender,$nic,$marital){
    //Query
    $sql = "INSERT INTO pending_donor (first_name,second_name,email,telephone_no,address,city,district,date_of_birth,gender,id_number,marital_state) VALUES (?,?,?,?,?,?,?,?,?,?,?); ";
       //Initialize the prepared statement 
       $stmt = mysqli_stmt_init($connection);
       //Bind the statement with the query and check errors
       if(!mysqli_stmt_prepare($stmt, $sql)){
           header("location: donor_reg3_index.php?error=failedstmt");
       
       } 
       else {
           //Bind data with the statement
           mysqli_stmt_bind_param($stmt, "sssdsssssds", $fname,$lname,$email,$tel,$address,$city,$district,$dob,$gender,$nic,$marital);
           //Execute the statement
           mysqli_stmt_execute($stmt);
           //close the statement
        mysqli_stmt_close($stmt);
        header("location: donor_reg3_index.php?error=successfully Added");
        
    }


}










?>