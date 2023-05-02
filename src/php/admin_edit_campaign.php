<?php
session_start();
include "../../config/connection.php";
 
if (isset($_POST['cancel']))
{
    header("Location: admin_viewsession.php");
}

if(isset($_POST['submit']) )
{

  $id=$_GET['editid'];
  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

 
  $cname = $_POST['cname'];
  $date = $_POST['date']; 
  $hname = $_POST['hname']; 
  $time = $_POST['time']; 

  $sql="update campaign SET camp_name='$cname',camp_date='$date',camp_time='$time',hospital_id='$hname'  where camp_id= $id";
  $result = mysqli_query($connection,$sql);

  if($result) {
    
    header("Location: admin_viewsession.php");
   
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
   
	<title>Add Hospital</title>
    <link rel="stylesheet"  href="../../public/css/admin_create_campaign.css">
</head>
<body>
<div class="container">
    <center>
    <div class="form_content">
    <form action="" method="post">
    
    <section class="copy">
        <h2>Edit Campaign Details</h2>
    </section> 

    <?php
    $id=$_GET['editid'];
  $sql="select * from `campaign`  WHERE camp_id= $id";
        $result=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $time1=$row['camp_time'];
            $formatted_time= date("H:i", strtotime($time1));
        ?>
        <table id="myTable"> 
            <tr>
                <td>
                <label for="cname">Campaign Name</label>
            <input type="text" name="cname" value="<?php  echo $row['camp_name'];?>">
                </td>
                <td>
                <label for="date">Date</label>
            <input  type="date" name="date"  value="<?php  echo $row['camp_date'];?>" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="hname">Hospital Name</label>
                <div id="hospital_options">

                    <?php
                    $sql="SELECT hospital_id, hospital_name FROM hospital";
                    $result=mysqli_query($connection,$sql);
                    ?>
                                <select name="hname">
                                    <?php
                                    while($row=mysqli_fetch_array($result)){
                                        
                                         echo '<option value="' . $row['hospital_id'] . '">' . $row['hospital_name'] . '</option>';
                                         ?>
                                        <?php
                                   }?>
                               </select>
                              
                              

                </div>
                </td>
                <td>
                <label for="time"> Time</label>
            <input type="time" name="time"  value="<?php  echo '.$formatted_time.';?>">
                </td>
            </tr>
        </table>
 
            <?php 
}?>
            <table>
                <tr><td>
                    <button class="create-btn" name="submit" type="submit"> Update
                    </button>
                </td>
            <td>
                <button class="cancle-btn" name="cancel" type="cancel"> Cancel
                </button>
            </td></tr>
              </table>
       
</form>   
    </div>

</center>         
                </div>
	
</body>
</html>
