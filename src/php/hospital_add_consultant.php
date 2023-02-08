<?php
require_once('../../config/connection.php');
session_start();


    if(isset($_POST['submit'])){
        
        function validation($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripcslashes($data);
            return $data;
        }

        $cID = $_POST['consultant_id'];
        $consultant_name = $_POST['consultant_name'];
        $c_email = $_POST['email'];
        $tele = $_POST['telephone_no'];
        $address = $_POST['address'];
        $c_username = $_POST['user_name'];
        $c_password = $_POST['password'];
        //$hospital_id = $_POST['hospital_id']

        //$hospital_id = $_SESSION['hospital_id'];

        $sql = "INSERT INTO `consultant`(`consultant_id`, `consultant_name`, `email`, `telephone_no`, `address`, `user_name`, `password`) VALUES ('$cID','$consultant_name','$c_email','$tele','$address','$c_username','$c_password')";
        $result = mysqli_query($connection,$sql);

        if($result){
            header("Location:hospital_consultant.php");
        }
        else{
            die(mysqli_error($connection));
        }
    }

 ?>


                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" type="text/css" href="../../public/css/hospital_add_consultant.css">
                    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Condensed:wght@700&family=Roboto+Slab:wght@700;800&family=Roboto:wght@400;500&family=Source+Sans+Pro:wght@700&display=swap" rel="stylesheet">
                    <title>Document</title>
                </head>
                <body>

                </body>
                </html>         

<?php include('../../public/html/hospital_add_consultant.html'); ?>
