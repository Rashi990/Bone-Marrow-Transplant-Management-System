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
            header("Location:hospital_clinicians.php");
        }
        else{
            die(mysqli_error($connection));
        }
    }

 ?>

<?php include('../../public/html/hospital_add_clinicians.html'); ?>
<?php require_once('hospital_footer.php'); ?>