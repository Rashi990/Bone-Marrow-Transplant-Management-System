<?php
require_once('../../config/connection.php');
require_once("../../public/html/admin_addhospital.html"); 
session_start();

    $sql1="select max(hospital_id) from `hospital`";
    $result1=mysqli_query($connection,$sql1);
    $max=mysqli_fetch_assoc($result1);
    $maxid=$max['max(hospital_id)'];
    $nexthospitalid=$maxid+1;
?>

<?php

if (isset($_POST['cancel']))
{
    header("Location: admin_viewhospital.php");
}
    if(isset($_POST['submit'])){
        
      // function validate($data)
      // {
      //   $data = trim($data);
      //   $data = stripslashes($data);
      //   $data = htmlspecialchars($data);
      //   return $data;
      // }

        $_GLOBAL['accountdone']=0;
        $_GLOBAL['hospitaldone']=0;

        //$filename=$nextconsultantid;
        //$cID = $_POST['consultant_id'];
        // $hID = validate($_POST['ID']);
  $hname = ($_POST['hname']);
  $email = ($_POST['email']); 
  $tel = ($_POST['tel']); 
  $address = ($_POST['address']); 
  $username = ($_POST['username']); 
  $password = ($_POST['password']); 
        


        $checked = checkusername($username,$connection);
		$checkedpassword = checkpassword($password,$connection);

    

        if(($checked==1) && ($checkedpassword==1)){
        $inserthospital = "INSERT INTO `hospital`(hospital_name, email, telephone_no, address,username,password) VALUES ('$hname',' $email',' $tel','$address','$username','$password')";
        $result2=$connection->query( $inserthospital);

        if($result2){
            $_GLOBAL['hospitaldone']=1;
        }else{
            $_GLOBAL['hospitaldone']=0;
			echo "<script> alert('Registration is Failled  hospitaldone') </script>";
        }

					//insert in to account table
          $sql3="select max(hospital_id) from `hospital`";
		$result3=mysqli_query($connection,$sql3);
		$max=mysqli_fetch_assoc($result3);
		$maxhospitalid=$max['max(hospital_id)'];
					$insertaccount = "INSERT INTO `account`(uid,username,password,userlevel) values ('$maxhospitalid','$username',' $password',3)";
					$result4=$connection->query($insertaccount);
					if($result4){
						$_GLOBAL['accountdone']=1;
						
					}else{
						$_GLOBAL['accountdone']=0;
						echo "<script> alert('Registration is Failled accountdone not') </script>";
					}

					
					if( ($_GLOBAL['accountdone']==1) && ($_GLOBAL['hospitaldone']==1) ){
				
						echo "<script> alert('Registration is Sucessfull') </script>";
						header("Location: admin_viewhospital.php");
					}else{
						echo "<script> alert('Registration is Failled') </script>";
					}
				}else if($checked==0){
					echo 'username failed';
					//header("Location: account_page.php");
					$username="";
					echo "<script> alert('Username already used..') </script>";
				}else if($checkedpassword==0){
					echo 'Password failed';
					//header("Location: account_page.php");
					$password="";
					echo "<script> alert('Password already used..') </script>";
				}else{
					
				}
        }            
 ?>

<?php
	function checkusername($username,$connection){
		$sql5="select * from account where username='".$username."'";
		$result5=mysqli_query($connection,$sql5);
		if($row5=$result5->fetch_assoc()){
			return 0;
		}else{
			return 1;
		} 
	}
?>

<?php
	function checkpassword($password,$connection){
		$sql6="select * from hospital where password='".$password."'";
		
		$result6=mysqli_query($connection,$sql6);
		if($row6=$result6->fetch_assoc()){
			return 0;
		}else{
			return 1;
  
		} 
	}
?>      
