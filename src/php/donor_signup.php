<?php

//--Add connection.php file---
require_once "../../config/connection.php";

//--Add donor_sign_validations.php
require_once "../../src/php/donor_sign_validations.php";


//If user clicks create button
if (isset($_POST["create-btn"])) {
    //Get form input data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $pass = $_POST["pass"];
    $re_pass = $_POST["re_pass"];





    //Input validation
    if (inputsEmptyRegister($fname, $lname, $email, $mobile,$pass, $re_pass)) {
        header("location:donor_signup_index.php?err=empty_inputs");
    } else if (nameInvalid($fname, $lname)) {
        header("location: donor_signup_index.php?err=invalid_name");
    } else if (emailInvalid($email)) {
        header("location: donor_signup_index.php?err=invalid_email");
    } else if (mobileInvalid($mobile)) {
        header("location: donor_signup_index.php?err=invalid_mobile");
    } else if (passwordInvalid($pass)) {
        header("location: donor_signup_index.php?err=invalid_password");
    } else if (passNotMatch($pass, $re_pass)) {
        header("location: donor_signup_index.php?err=different_password");
    } else if (emailOrMobileAvailable($connection, $email, $mobile)) {
        header("location: donor_signup_index.php?err=available_emailormobile");
    } else {
        //If all inputs are error free
        registerNewUser($connection, $fname, $lname, $email, $mobile, $pass, $re_pass);
    }
}
else{
    header("Location: donor_signup_index.php");
    exit();

}

//Function for register a new user
function registerNewUser($connection, $fname, $lname, $email,$mobile, $pass, $re_pass){
    //Query
    $sql = "INSERT INTO donor (first_name,last_name,email,telephone_no,password) VALUES (?,?,?,?,?); ";
       //Initialize the prepared statement 
       $stmt = mysqli_stmt_init($connection);
       //Bind the statement with the query and check errors
       if(!mysqli_stmt_prepare($stmt, $sql)){
           header("location: donor_signup_index.php?err=failedstmt");
       
       } 
       else {
           //Bind data with the statement
           mysqli_stmt_bind_param($stmt, "sssis", $fname,$lname,$email, $mobile,$pass);
           //Execute the statement
           mysqli_stmt_execute($stmt);
           //close the statement
        mysqli_stmt_close($stmt);
        header("location: donor_signup_index.php?err=noerrors");
        
    }

}










?>