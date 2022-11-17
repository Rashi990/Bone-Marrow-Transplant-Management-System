<?php
session_start();
include "../../config/connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: ../../public/html/admin_login.html?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../../../../public/html/admin_login.html?error=Password is required");
	    exit();
	}else{
		
        $sql = "SELECT * FROM blood_bank WHERE user_name='$uname' AND password='$pass'";
        $result = mysqli_query($connection,$sql);
    
        if($result === FALSE)
        {
          die(mysqli_error($connection));
        }
        else
        {
          $row = mysqli_fetch_assoc($result);
    
          if ($row['user_name'] === $uname && $row['password'] === $pass)
          {
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['admin_id'] = $row['admin_id'];
            header("Location: consultant_home.php");
            exit();
          }
          else
          {
            header("Location: ../../src/php/Admin_dashboard.php?error=Incorrect User Name or Password");
            exit();
          }
        }
      }
    }
    
    else {
      header("Location: ../../public/html/admin_login.html");
      exit();
    }
    