
<?php
session_start();
include "../../config/connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../public/js/admin_create_campaign.js"></script>
	<title>Add Hospital</title>
    <link rel="stylesheet"  href="../../public/css/admin_create_campaign.css">
</head>
<body>
   
<div class="container">
 <div class="form_content">
    <form class="form_form" action="../../src/php/admin_create_campaign.php" method="post">
    
        <section class="copy">
            <h2>Create Campaign</h2>
        </section> 
      <table id="myTable">
        <tr>
            <td>
                <label for="cname">Campaign Name</label>
                    <input type="text" name="cname"  placeholder="Enter Campaign Name" >
            </td>
            <td>
                <label for="date">Date</label>
                    <input  type="date" id="date" name="date" placeholder="Enter Date" >
                     
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
                <!-- <div class="controls">
                    <a href="#" id="add_more_fields">Add More</a>
                    <a href="#" id="remove_fields">Remove Field</a>
                  </div> -->
            </td>
            <td>
                <label for="time" >Time</label>
                <input type="time" id="time" name="time" placeholder="Entert Time">
            </td>
        </tr>       
      </table>
      <table>
        <tr><td>
            <button class="create-btn" name="submit" type="submit"> Create
            </button>
        </td>
    <td>
        <button class="cancle-btn" name="cancel" type="cancel"> Cancel
        </button>
    </td></tr>
      </table>
           
    </form>  
 </div>
         
                </div>
                
</body>
</html>


<?php
if (isset($_POST['cancel']))
{
    header("Location: admin_viewsession.php");
}


if(isset($_POST['submit']) )
{

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $cname = validate($_POST['cname']);
  $date = validate($_POST['date']);
  $hname = validate($_POST['hname']); 
  $time = validate($_POST['time']); 

  if (empty($cname))
  {
    
    echo "<script type='text/javascript'>alert('Campaign name is required!');</script>";
    exit();
  }
  if (empty($date))
  {
    
    echo "<script type='text/javascript'>alert('Date is required!');</script>";
    exit();
  }if (empty($hname))
  {
    
    echo "<script type='text/javascript'>alert('Hospital name is required!');</script>";
    exit();
  }if (empty($time))
  {
    
    echo "<script type='text/javascript'>alert('Time is required!');</script>";
    exit();
  }
//  add form submitting date in to database
$date = date('Y-m-d H:i:s');
  $sql="INSERT INTO `campaign`(camp_name, camp_date, camp_time,hospital_id) VALUES ('$cname','$date',' $time',' $hname')";

  
  $result = mysqli_query($connection,$sql);

  if($result) {
    
    header("Location: admin_viewsession.php");
   
  }
  else{
    die(mysqli_error($connection));
  }

}
?>


