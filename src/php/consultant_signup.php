<?php
session_start();
include "../../config/connection.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tele_no']) && isset($_POST['address']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repass']))
{
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $name = validate($_POST['name']);
  $email = validate($_POST['email']);
  $tele_no = validate($_POST['tele_no']);
  $address = validate($_POST['address']);

  $uname = validate($_POST['username']);
  $password = validate($_POST['password']);
  $re_pass = validate($_POST['repass']);

  $user_data = 'uname='. $uname. '$name='. $name;

  if (empty($name))
  {
    header("Location: consultant_create_account.php?error=Please Fill Your Name");
    exit();
  }
  else if (empty($email))
  {
    header("Location: consultant_create_account.php?error=Please Fill Your Email&$user_data");
    exit();
  }
  else if (empty($tele_no))
  {
    header("Location: consultant_create_account.php?error=Please Fill Your Telephone Number&$user_data");
    exit();
  }
  else if (empty($address))
  {
    header("Location: consultant_create_account.php?error=Please Fill Your Address&$user_data");
    exit();
  }
  else if (empty($uname))
  {
    header("Location: consultant_create_account.php?error=Please Give User Name&$user_data");
    exit();
  }
  else if (empty($password))
  {
    header("Location: consultant_create_account.php?error=Please Give a Password&$user_data");
    exit();
  }
  else if (empty($re_pass))
  {
    header("Location: consultant_create_account.php?error=Please Re-enter Password&$user_data");
    exit();
  }
  else if($password !== $re_pass){
        header("Location: consultant_create_account.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

  else
  {
    // hashing the password
      $password = md5($password);

	    $sql = "SELECT * FROM consultant WHERE user_name='$uname' ";
		  $result = mysqli_query($connection, $sql);

		  if (mysqli_num_rows($result) > 0)
      {
			    header("Location: consultant_create_account.php?error=The username is taken try another&$user_data");
	        exit();
	    }
      else
      {
           $sql2 = "INSERT INTO consultant(name,email,telephone_no,address,user_name,password) VALUES('$name', '$email', '$tele_no', '$address', '$uname', '$password')";
           $result2 = mysqli_query($connection, $sql2);
           if ($result2)
           {
           	 header("Location: consultant_create_account?success=Your account has been created successfully");
	         exit();
           }
           else
           {
	           	header("Location: consultant_create_account.php?error=unknown error occurred&$user_data");
		          exit();
           }
		   }
    /*$sql = "SELECT * FROM consultant WHERE user_name='$uname' AND password='$pass'";
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
        $_SESSION['consultant_id'] = $row['consultant_id'];
        $_SESSION['consultant_name'] = $row['consultant_name'];
        header("Location: ../../public/html/consultant_home.html");
        exit();
      }
      else
      {
        header("Location: consultant_create_account.php?error=Incorrect User Name or Password");
        exit();
      }
    }*/
  }
}

else {
  header("Location: consultant_create_account.php");
  exit();
}
