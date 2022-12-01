<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) && isset($_SESSION['hospital_name']) ))
{
    header("Location:hospital_login.php");
}

    $errors = array();

    if(isset($_POST['submit'])){
    
        $cID = $_POST['clinician_id'];
        $clinician_name = $_POST['clinician_name'];
        $c_email = $_POST['email'];
        $tele = $_POST['telephone_no'];
        $address = $_POST['address'];
        $c_username = $_POST['user_name'];
        $c_password = $_POST['password'];
        //$hospital_id = validation($_POST['hospital_id']);

        $hospital_id = $_SESSION['hospital_id'];

        $max_len_fields = array('clinician_name' =>255, 'email' =>100, 'telephone_no' =>10, 'address' =>255, 'user_name' =>40, 'password' =>40 );

        foreach($max_len_fields as $field => $max_len){
            if(strlen(trim($_POST[$field])) > $max_len ){
                $errors[] = ' Error! : '.$field . ' must be less than ' . $max_len . ' characters';
            }
        }

        if(!empty($errors)){
            foreach($errors as $error){
                echo '<div class="err">';
                echo $error;
                echo '</br>';
                echo '</div>';
            }
            echo '<a href="../../src/php/hospital_add_clinicians.php">Back</a>';	
        }else{

        $sql = "INSERT INTO `clinician`(`clinician_id`, `clinician_name`, `email`, `telephone_no`, `address`, `user_name`, `password`, `hospital_id`) VALUES ('$cID', '$clinician_name', '$c_email', '$tele', '$address', '$c_username', '$c_password', '$hospital_id')";
        $result = mysqli_query($connection,$sql);

        if($result){
            header("Location:hospital_clinicians.php");
            echo "<script type='text/javascript'> alert('Insert is Successful') </script>";	
        }
        else{
            die(mysqli_error($connection));
            echo "<script type='text/javascript'> alert('Insert is Fail') </script>";	
        }
    }

}

 ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_add_clinicians.css?">
                    <title>Document</title>
                </head>
                <body>

                </body>
                </html>

<?php include('../../public/html/hospital_add_clinicians.html'); ?>
