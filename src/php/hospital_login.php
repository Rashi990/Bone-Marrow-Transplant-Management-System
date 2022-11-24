<?php 
session_start(); 
require_once('../../config/connection.php');

if(isset($_POST['submit'])){
    if(isset($_POST['username']) && isset($_POST['password'])){
         
        function validation($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripcslashes($data);
            return $data;
        }

    $username = validation($_POST['username']);
    $password = validation($_POST['password']);

    if(empty($username)){
         echo "<script type='text/javascript'>alert('Username is required!');</script>";
    }
    else if(empty($password)){
        echo "<script type='text/javascript'>alert('Password is required!');</script>";
    }

    else{

    $query = "SELECT * FROM hospital WHERE user_name='$username' && password='$password' ";
    $result = mysqli_query($connection, $query);

    if($result === FALSE){
        die(mysqli_error($connection));
    }
   
    else
    {
      $row = mysqli_fetch_assoc($result);{

      if (($row['user_name'] === $username && $row['password'] === $password))
        {
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['hospital_id'] = $row['hospital_id'];
            $_SESSION['hospital_name'] = $row['hospital_name'];
            header("Location:hospital_dashboard.php");
            exit();
        }
        else{
            echo "<script type='text/javascript'>alert('Invalid Username or Password !');</script>";
        }
    }
    }
    }
}

    else{
        header("Location:hospital_login.php");
        //exit();
    }
}

?>

<?php include('../../public/html/hospital_login.html'); ?>
