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
    header("Location: consultant_index.php?error=User Name is Required");
    exit();
  }
  else if (empty($pass))
  {
    header("Location: consultant_index.php?error=Password is Required");
    exit();
  }

  else
  {
    $sql = "SELECT * FROM consultant WHERE user_name='$uname' AND password='$pass'";
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
        header("Location: consultant_home.php");
        exit();
      }
      else
      {
        header("Location: consultant_index.php?error=Incorrect User Name or Password");
        exit();
      }
    }
  }
}

else {
  header("Location: consultant_index.php");
  exit();
}
