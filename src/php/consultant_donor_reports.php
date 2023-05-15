<?php require_once('consultant_navbar_reports.php'); ?>
<?php
require_once('../../config/connection.php');
session_start();
if (!(isset($_SESSION['username'])))
{
    header("Location:consultant_login.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_navbar.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_reports.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Top</title>
</head>
<body>

  <div class="top-nav">
    <div class="head">
        <h1>Reports</h1>
    </div>

    <div class="search">
        <div class="search-bar">
          <span class="material-icons">search</span>
          <input type="search" placeholder="search here">
        </div>
      </div>

    <div class="top">
      <span class="material-icons">notifications</span>
      <span class="material-icons">chat_bubble</span>
      <div class="Loggedin"> Welcome! <?php echo $_SESSION['username'];?></div>
      <span class="material-icons">account_circle</span>
    </div>
  </div>

  <div class="board">
    <div class="tabs">
      <div class="tab">
        <a href="consultant_reports.php">
          <button type="button" name="button">Patient</button>
        </a>
      </div>
      <div class="tab-selected">
        <a>
          <button type="button" name="button">Donor</button>
        </a>
      </div>
    </div>
    <div class="scroll">
      <div class="topic">
        <h2>Donor List</h2>
      </div>
      <div class="mid-bottom">
          <table align="center">
            <tr>
              <th class="th1">Donor ID</th>
              <th class="th2">Donor Name</th>
              <th class="th2">Date of Birth</th>
              <th class="th1">Blood Group</th>
              <th class="th2">email</th>
              <th class="th1"">Action</th>
            </tr>
            <?php
                $sql="SELECT * FROM donor";
                $result=mysqli_query($connection,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $donor_id=$row['donor_id'];
                        $donor_name=$row['donor_name'];
                        $date_of_birth=$row['date_of_birth'];
                        $blood_group=$row['blood_group'];
                        $email=$row['email'];
                        echo '
                          <td>'.$donor_id.'</td>
                          <td>'.$donor_name.'</td>
                          <td>'.$date_of_birth.'</td>
                          <td>'.$blood_group.'</td>
                          <td>'.$email.'</td>
                          <td>
                            <a class="report" href="consultant_reports_view.php?report-id='.$donor_id.'" class="text-light">
                              <abbr title="Report"><span class="material-icons">description</span></abbr>
                            </a>
                          </td>
                        </tr>
                        ';
                    }
                }
            ?>
          </table>
      </div>
    </div>
  </div>

</body>
</html>

<!--<?php require_once('consultant_footer.php'); ?>-->
