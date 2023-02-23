<?php
session_start();
include "../../config/connection.php";

if (isset($_POST['username']) && isset($_POST['password']))
{

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $uname = validate($_POST['username']);
  $pass = validate($_POST['password']);

  if (empty($uname))
  {
    header("Location: admin_index.php?error=User Name is Required");
    exit();
  }
  else if (empty($pass))
  {
    header("Location: admin_index.php?error=Password is Required");
    exit();
  }

  else
  {
    $sql = "SELECT * FROM login WHERE user_name='".$uname."' AND password='".$pass."'";
    $result = mysqli_query($connection,$sql);

    if($result === FALSE)
    {
      die(mysqli_error($connection));
    }
    else
    {
      $row = mysqli_fetch_array($result);

      if ( $row["user_type"] =="admin")
      {
         $_SESSION['user_name'] = $row['user_name'];
         $_SESSION['admin_id'] = $row['admin_id'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['profile_pic'] = $row['profile_pic'];
        header("Location:admin_dashboard.php");
    
      }
      else
      {
        header("Location: admin_index.php?error=Incorrect User Name or Password");
    
      }
    }
  }
}

else {
  header("Location: admin_index.php");
  exit();
}

$_SESSION['userLogin'] = "Loggedin";

