<?php
require_once('../../config/connection.php');
session_start();

if($_SESSION['userlevel']!=3)
{
    header("Location:login.php");
}

$uid=$_SESSION['uid'];
$username=$_SESSION['username'];
$hospital_id=$_SESSION['hospital_id'];

    $sql1="select max(consultant_id) from consultant";
    $result1=mysqli_query($connection,$sql1);
    $max=mysqli_fetch_assoc($result1);
    $maxid=$max['max(consultant_id)'];
    $nextconsultantid=$maxid+1;
?>

<?php
    if(isset($_POST['submit'])){
        
		/*
        function validation($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripcslashes($data);
            return $data;
        }
*/

        $_GLOBAL['accountdone']=0;
        $_GLOBAL['consultantdone']=0;

        //$filename=$nextconsultantid;
        //$cID = $_POST['consultant_id'];
        $consultant_name = $_POST['consultant_name'];
        $c_email = $_POST['email'];
        $tele = $_POST['telephone_no'];
        $address = $_POST['address'];
        $c_username = $_POST['username'];
        $c_password = $_POST['password'];
		$conpassword=$_POST['conpassword'];
        //$hospital_id = $_POST['hospital_id']

        $checked = checkusername($c_username,$connection);
		$checkedemail = checkemail($c_email,$connection);


        if(($checked==1) && ($checkedemail==1)){

        $insertconsultant = "INSERT INTO consultant(`consultant_name`, `email`, `telephone_no`, `address`, `hospital_id`) VALUES ('$consultant_name','$c_email','$tele','$address','$hospital_id')";
        $result2=$connection->query($insertconsultant);

        if($result2){
            $_GLOBAL['consultantdone']=1;
        }else{
            $_GLOBAL['consultantdone']=0;
			echo "<script> alert('Registration is Failled consultantdone not') </script>";
        }


        $sql3="select max(consultant_id) from consultant";
		$result3=mysqli_query($connection,$sql3);
		$max=mysqli_fetch_assoc($result3);
		$maxconsultantid=$max['max(consultant_id)'];
		//echo $maxconsultantid;

					//insert in to account table
					$insertaccount = "INSERT INTO `account`(uid,username,password,userlevel) values ('$maxconsultantid','$c_username','$conpassword',1)";
					$result4=$connection->query($insertaccount);
					if($result4){
						$_GLOBAL['accountdone']=1;
						
					}else{
						$_GLOBAL['accountdone']=0;
						echo "<script> alert('Registration is Failled accountdone not') </script>";
					}

					
					if( ($_GLOBAL['accountdone']==1) && ($_GLOBAL['consultantdone']==1) ){
						//echo $_GLOBAL['accountdone'];
						//echo $_GLOBAL['consultantdone'];
						echo "<script> alert('Registration is Sucessfull') </script>";
						header("Location: hospital_consultants.php");
					}else{
						echo "<script> alert('Registration is Failled') </script>";
					}
				}else if($checked==0){
					echo 'uname failed';
					//header("Location: account_page.php");
					$c_username="";
					echo "<script> alert('Username already used..') </script>";
				}else if($checkedemail==0){
					echo 'mail failed';
					//header("Location: account_page.php");
					$c_email="";
					echo "<script> alert('Email already used..') </script>";
				}else{
					
				}
        }            
 ?>

<?php
	function checkusername($c_username,$connection){
		$sql5="select * from account where username='".$c_username."'";
		//echo $sql5;
		$result5=mysqli_query($connection,$sql5);
		if($row5=$result5->fetch_assoc()){
			return 0;
		}else{
			return 1;
		} 
	}
?>

<?php
	function checkemail($c_email,$connection){
		$sql6="select * from consultant where email='".$c_email."'";
		//echo $sql6;
		$result6=mysqli_query($connection,$sql6);
		if($row6=$result6->fetch_assoc()){
			return 0;
		}else{
			return 1;
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