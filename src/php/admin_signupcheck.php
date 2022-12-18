
<?php 
session_start(); 
include ('../../config/connection.php');

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['email']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$email = validate($_POST['email']);

	$user_data = 'uname='. $uname. '&email='. $email;


	if (empty($uname)) {
		header("Location: admin_signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: admin_signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: admin_signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($email)){
        header("Location: admin_signup.php?error=Email is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: admin_signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        // $pass = md5($pass);

	    $sql = "SELECT * FROM blood_bank WHERE user_name='$uname' ";
		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: admin_signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO blood_bank(user_name, password, email) VALUES('$uname', '$pass', '$email')";
           $result2 = mysqli_query($connection, $sql2);
           if ($result2) {
           	 header("Location: admin_signup.php?success=Your account has been created successfully");
				header("Location: admin_dashboard.php?");
	         exit();
           }else {
	           	header("Location: admin_signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: admin_signup.php");
	exit();
}