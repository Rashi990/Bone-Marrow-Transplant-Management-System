<?php

// Check if login inputs are empty
/*function inputsEmptyLogin($email, $pass){
    if(empty($email) || empty($pass)){
        $value = true;
    }else{
        $value = false;
    }
    return $value;
}


//Check if login username is invalid

function usernameInvalid($user_name){
    
    if(!preg_match("/^.{4,}$/",$user_name)){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}*/


//--Functions to validate inputs--


//Check if register inputs are empty

function inputsEmptyRegister($fname,$lname,$email,$tel,$address,$city,$district,$dob,$nic,$marital,$gender){
    
    if(empty($fname)||empty($lname)||empty($email)||empty($tel)||empty($address)||empty($city)||empty($district)||empty($dob)||empty($nic)||empty($marital)||empty($gender)){
        $value = true;

    }
    else{
        $value = false;
    }
    return $value;
}



//Check if names are invalid
function nameInvalid($fname,$lname){

    if(!preg_match("/^[a-zA-Z\s]+$/",$fname)){ 
        $value = true;

    }
   elseif(!preg_match("/^[a-zA-Z]+$/",$lname)){
    
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}


//Check if email is invalid
function emailInvalid($email){
  
    if(!preg_match("/^[a-zA-Z\d\._-]+@[a-zA-Z\d_-]+\.[a-zA-Z\d\.]{2,}$/",$email)){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}


//Check if mobile is invalid
function mobileInvalid($tel){
   
    if(!preg_match("/^[0][\d]{9}$/",$tel)){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}
/*
//Check if password is invalid
function passwordInvalid($pass){
  
    if(!preg_match("/^.{2,}$/",$pass)){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}

//Check if pass and re_pass aren't simillar
function passNotMatch($pass, $re_pass){

    if($pass !== $re_pass){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}
*/

//Check if email or mobile available in the system
function emailAvailable($connection, $email){
   
    //Query
    $sql = "SELECT * FROM pending_donor WHERE email =? ;";
    //Initialize the prepared statement 
    $stmt = mysqli_stmt_init($connection);
    //Bind the statement with the query and check errors
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: donor_reg3_index.php?error=failedstmt");
        exit();
    } 
    else {
        //Bind data with the statement
        mysqli_stmt_bind_param($stmt, "s", $email);
        //Execute the statement
        mysqli_stmt_execute($stmt);
        //Save results if available
        $data = mysqli_stmt_get_result($stmt);
        //Check if there at least one result
        if (!mysqli_fetch_assoc($data)) {
            $value = false;
        } 
        else {
            $value = true;
        }
    }
        //Close the statement
    mysqli_stmt_close($stmt);
    
    return $value;
}

/*
function nicInvalid($nic){


  if(!preg_match("/^[\d]{12}$/",$nic)){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}


*/







?>