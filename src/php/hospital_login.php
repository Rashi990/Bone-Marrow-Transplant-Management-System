<?php 
session_start(); 
require_once('../../config/connection.php');

//$errors = array();

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

    //Check if username or password is empty
    if(empty($username)){
         echo "<script type='text/javascript'>alert('Username is required!');</script>";
         //$errors[] = ' Error! : Username is required !';
    }
    else if(empty($password)){
        echo "<script type='text/javascript'>alert('Password is required!');</script>";
        //$errors[] = ' Error! : Password is required !';
    }

    else{

    $query = "SELECT * FROM hospital WHERE user_name='$username' && password='$password' ";
    $result = mysqli_query($connection, $query);

    if($result){
        if(mysqli_num_rows($result) == 1 ){
            $hospital = mysqli_fetch_assoc($result);
            $_SESSION['user_name'] = $hospital['user_name'];
            $_SESSION['hospital_id'] = $hospital['hospital_id'];
            $_SESSION['hospital_name'] = $hospital['hospital_name'];
            header("Location:hospital_dashboard.php");
        }
        else{
           echo "<script type='text/javascript'>alert('Invalid Username or Password !');</script>";
           //$errors[] = ' Error! : Invalid Username or Passowrd !';
        }
    }
    else{
        echo "<script type='text/javascript'>alert('Invalid Username or Password !');</script>";
        //$errors[] = ' Error! : Invalid Username or Passowrd !';
        }
    }

    /*
    if(!empty($errors)){
        echo '<div class="errors">';
        echo '<a href="hospital_login.php">OK</a>';
        foreach($errors as $error){
            echo $error;
            echo '</br><br>';
        }
        echo '</div>';
    }
    */
}
}


?>
   <!--
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_login.css">
                    <title>Document</title>
                </head>
                <body>

                </body>
                </html>
    -->


<?php include('../../public/html/hospital_login.html'); ?>
