<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['user_name']) && isset($_SESSION['hospital_name']) ))
{
    header("Location:hospital_login.php");
}

$errors = array();
/*
$clinician_name = '' ;
$c_email = '';
$tele = '';
$address = '';
$c_username = '';
$c_password = '';
*/

    if(isset($_GET['clinician_id'])){
        $clinician_id = mysqli_real_escape_string($connection, $_GET['clinician_id']);
        $sql2 = "SELECT * FROM clinician WHERE clinician_id = {$clinician_id} LIMIT 1";

        $result_set = mysqli_query($connection, $sql2);

        if($result_set){
            if(mysqli_num_rows($result_set) == 1 ){
                //user found
                $result1 = mysqli_fetch_assoc($result_set);
                $clinician_id = $result1['clinician_id'];
                $clinician_name = $result1['clinician_name'];
                $c_email = $result1['email'];
                $tele = $result1['telephone_no'];
                $address = $result1['address'];
                $c_username = $result1['user_name'];
                $c_password = $result1['password'];
            }
            else{
                //user not found
                header("Location: hospital_clinician_list.php") ;
            }
        }
        else{
            //query unsuccessful
            header("Location: hospital_clinician_list.php") ;   
        }
    }





   
    if(isset($_POST['submit'])){
    
        $clinician_id = $_POST['clinician_id'];
        $clinician_name = $_POST['clinician_name'];
        $c_email = $_POST['email'];
        $tele = $_POST['telephone_no'];
        $address = $_POST['address'];
        $c_username = $_POST['user_name'];
        $c_password = $_POST['password'];

        $hospital_id = $_SESSION['hospital_id'];

        //Checking length
        $max_len_fields = array('clinician_name' =>255, 'email' =>100, 'telephone_no' =>10, 'address' =>255, 'user_name' =>20, 'password' =>20 );

        foreach($max_len_fields as $field => $max_len){
            if(strlen(trim($_POST[$field])) > $max_len ){
                $errors[] = ' Error! : '.$field . ' must be less than ' . $max_len . ' characters';
            }
        }

        //Checking if email already exists
        $c_email = mysqli_real_escape_string($connection, $_POST['email']);
        $check_email = "SELECT * FROM clinician WHERE email = '{$c_email}' ";

        $check_email_result = mysqli_query($connection, $check_email);

        if($check_email_result){
            if(mysqli_num_rows($check_email_result) == 1 ){
                $errors[] = ' Error! : Email address already exists !';
            }
        }

        //Checking if username already exists
        $c_username = mysqli_real_escape_string($connection, $_POST['user_name']);
        $check_uname = "SELECT * FROM clinician WHERE user_name = '{$c_username}' ";

        $check_uname_result = mysqli_query($connection, $check_uname);

        if($check_uname_result){
            if(mysqli_num_rows($check_uname_result) == 1 ){
                $errors[] = ' Error! : Username already exists !';
            }
        }

        if(!empty($errors)){
            echo '<div class="err">';
            echo '<a href="hospital_add_clinicians.php">OK</a>';
            foreach($errors as $error){
                $error = str_replace("_", " ", $error);
                echo $error;
                echo '</br><br>';
            }
            echo '</div>';
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
                    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_update_clinicians.css">
                    <title>Document</title>
                </head>
                <body>

                </body>
                </html>



?>
<?php include('../../public/html/hospital_update_clinicians.html'); ?>