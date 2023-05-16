<?php

//--Add connection.php file---
require_once "../../config/connection.php";

//--Add donor_sign_validations.php
require_once "../../src/php/donor_reg_validations.php";



//If user clicks create button
//if (isset($_POST["next-btn"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Get form input data
   
    $fullname = trim($_POST["fullname"]);
   // $lname =trim($_POST["lname"]);
    $email = trim($_POST["email"]);
    $tel = trim($_POST["tel"]);
    $address = trim($_POST["address"]);
    $city= trim($_POST["city"]);
    $district = trim($_POST["district"]);
    $dob = trim($_POST["dob"]);
    $nic = trim($_POST["nic"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $conf_password = trim($_POST["nic"]);
    $marital = trim($_POST["marital"]);
    $gender = trim($_POST["gender"]);
    $blood_group=trim($_POST["blood_group"]);
   
    

    //Input validation
    
    if (inputsEmptyRegister($fullname,$email,$tel,$address,$city,$district,$dob,$nic,$marital,$gender,$username,$password,$conf_password, $blood_group)) {
        header("location:donor_reg3_index.php?error=Please fill all the fields");
    } else if (nameInvalid($fullname)) {
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
    registerNewUser($connection, $fullname,$email,$tel,$address,$city,$district,$dob,$nic,$marital,$gender,$username,$password,$conf_password, $blood_group);
      


        
    }
}
else{
    header("Location: donor_reg3_index.php");
    exit();

}


// //Function for register a new user
// function registerNewUser($connection, $fullname,$email,$tel,$address,$city,$district,$dob,$gender,$nic,$marital,$blood_group,$username,$password,$conf_password){
//     //Query
//     $sql = "INSERT INTO donor (donor_name,email,telephone_no,address,city,district,date_of_birth,gender,id_number,marital_state,blood_group,user_name,password,conf_password) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?); ";
//        //Initialize the prepared statement 
//        $stmt = mysqli_stmt_init($connection);
//        //Bind the statement with the query and check errors
//        if(!mysqli_stmt_prepare($stmt, $sql)){
//            header("location: donor_reg3_index.php?err=failedstmt");
       
//        } 
//        else {
//            //Bind data with the statement
//            mysqli_stmt_bind_param($stmt, "ssssssssssss", $fullname, $email, $tel, $address, $city, $district, $dob, $gender, $nic, $marital, $blood_group, $username, $password, $conf_password);
           
//            //Execute the statement
//            mysqli_stmt_execute($stmt);
//            //close the statement
//         mysqli_stmt_close($stmt);
//         header("location: donor_reg3_index.php?err=successfully Added");
        
//     }


// } 

// 


//Function for registering a new user
function registerNewUser($connection, $fullname, $email, $tel, $address, $city, $district, $dob, $gender, $nic, $marital, $blood_group, $username, $password, $conf_password){
    // Escape the variables to prevent SQL injection (optional but recommended)
    $fullname = mysqli_real_escape_string($connection, $fullname);
    $email = mysqli_real_escape_string($connection, $email);
    $tel = mysqli_real_escape_string($connection, $tel);
    $address = mysqli_real_escape_string($connection, $address);
    $city = mysqli_real_escape_string($connection, $city);
    $district = mysqli_real_escape_string($connection, $district);
    $dob = mysqli_real_escape_string($connection, $dob);
    $gender = mysqli_real_escape_string($connection, $gender);
    $nic = mysqli_real_escape_string($connection, $nic);
    $marital = mysqli_real_escape_string($connection, $marital);
    $blood_group = mysqli_real_escape_string($connection, $blood_group);
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    $conf_password = mysqli_real_escape_string($connection, $conf_password);

    //Query with concatenated values
    $sql = "INSERT INTO donor (donor_name,email,telephone_no,address,city,district,date_of_birth,gender,id_number,marital_state,blood_group,user_name,password,conf_password) VALUES ('$fullname', '$email', '$tel', '$address', '$city', '$district', '$dob', '$gender', '$nic', '$marital', '$blood_group', '$username', '$password', '$conf_password')";

    //Execute the query and check for errors
    if (mysqli_query($connection, $sql)) {
        header("location: donor_reg3_index.php?err=successfully Added");
    } else {
        header("location: donor_reg3_index.php?err=failedstmt");
    }
}






















?>