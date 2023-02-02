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
    header("Location: clinician_index.php?error=User Name is Required");
    exit();
  }
  else if (empty($pass))
  {
    header("Location: clinician_index.php?error=Password is Required");
    exit();
  }

  else
  {
    $sql = "SELECT * FROM clinician WHERE user_name='$uname' AND password='$pass'";
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
        $_SESSION['clinician_id'] = $row['clinician_id'];
        $_SESSION['clinician_name'] = $row['clinician_name'];
        $_SESSION['image'] = $row['image'];
        header("Location: clinician_dashboard.php");
        exit();
      }
      else
      {
        header("Location: clinician_index.php?error=Incorrect User Name or Password");
        exit();
      }
    }
  }
}

else {
  header("Location: clinician_index.php");
  exit();
}
