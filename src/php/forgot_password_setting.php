<?php
session_start();
include "../../config/connection.php";

if (isset($_POST['username']))
{

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $uname = validate($_POST['username']);

  if (empty($uname))
  {
    header("Location: forgot_password.php?error=User Name is Required");
    exit();
  }
  else
  {
    $sql = "SELECT * FROM consultant WHERE user_name='$uname'";
    $result = mysqli_query($connection,$sql);

    if($result === FALSE)
    {
      die(mysqli_error($connection));
    }
    else
    {
      $row = mysqli_fetch_assoc($result);

      if ($row['user_name'] === $uname)
      {
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['consultant_id'] = $row['consultant_id'];
        $_SESSION['consultant_name'] = $row['consultant_name'];
        $_SESSION['password'] = $row['password'];
        header("Location: reset_password.php");
        exit();
      }
      else
      {
        header("Location: forgot_password.php?error=Incorrect User Name");
        exit();
      }
    }
  }
}

else {
  header("Location: consultant_index.php");
  exit();
}
