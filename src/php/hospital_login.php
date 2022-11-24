<?php require_once('../../config/connection.php'); ?>
<?php session_start(); ?>

<?php
if(isset($_POST["Login"])){
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $remember = $_POST["recheck"];

//Input validation
    if(inputEmptyLogin($email,$pwd)){
        header("Location:hospital_login.php?error=empty_inputs");
    }
    else if(emailInvalid($email)){
        header("Location:hospital_login.php?error=invalid_email");
    }
    else if(passwordInvalid($pwd)){
        header("Location:hospital_login.php?error=invalid_passowrd");
    }
    else{
       loginHospital($connection,$email,$pwd,$remember); 
    }
}
else{
    header("Location:hospital_login.php");
    exit();
}


//Functions
//Check email or password not entered
function inputEmptyLogin($email,$pwd){
    $value;
    if(empty($email) || empty($pwd)){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}

//Function for login
function loginHospital($connection,$email,$pwd,$remember){
    $sql = "SELECT * FROM "
} 

?>

<?php include('../../public/html/hospital_login.html'); ?>
<?php require_once('hospital_footer.php'); ?>