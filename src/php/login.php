<?php
session_start();
require_once('../../config/connection.php');

if(isset($_POST['submit']))
    if(isset($_POST['username']) && isset($_POST['password'])){

        $username=$_POST['username'];
        $password=$_POST['password'];

        //check if username or password is empty
        if(empty($username)){
            echo "<script> alert('Username is required ! ') </script>";
        }else if(empty($password)){
            echo "<script> alert('Password is required ! ') </script>";
        }else{

            $sql="SELECT * FROM account WHERE username='$username'";
            $result=mysqli_query($connection,$sql);

            if($result){
                if(mysqli_num_rows($result)==1){
                    $user=mysqli_fetch_assoc($result);
                    $_SESSION['username']=$user['username'];
                    $_SESSION['password']=$user['password'];
                    $_SESSION['aid']=$user['aid'];
                    $_SESSION['uid']=$user['uid'];

                
                    if($user['userlevel']==0){
                        $_SESSION['userlevel']=0;
                        header("Location:admin_dashboard.php");
                    }else if($user['userlevel']==1){
                        $_SESSION['userlevel']=1;
                        header("Location:consultant_dashboard.php");
                    }else if($user['userlevel']==2){
                        $_SESSION['userlevel']=2;
                        header("Location:clinician_dashboard.php");
                    }else if($user['userlevel']==3){
                        $_SESSION['userlevel']=3;
                        header("Location:hospital_dashboard.php");
                    }else{
                        echo "<script> alert('Error ! ') </script>";
                    }




                    $sql1="SELECT * FROM hospital WHERE username='$username'";
                    $result1=mysqli_query($connection,$sql1);
            
                        if($result1){
                            if(mysqli_num_rows($result1)==1){
                                $hospital=mysqli_fetch_assoc($result1);
                                $_SESSION['hospital_id']=$hospital['hospital_id'];
                                $_SESSION['hospital_name']=$hospital['hospital_name'];
                            }
            
                        }


            }else{
                echo "<script> alert('Invalid Username or Password ! ') </script>";
            }

         }else{
            echo "<script> alert('Error ! ') </script>";
        }

       
}


    }
?>


<?php include('../../public/html/login.html')?>