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
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_reports.css" />
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_pd_reports.css">
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

    <div class="counts2">

      <div class="box">
        <a class="selected">Patient</a>
      </div>
        <div class="box">
          <a class="not-selected" href="consultant_donor_reports.php">Donor</a>
        </div>

    </div>

    <div class="section">

      <div class="counts2">

        <div class="box">
          <a class="selected">Clinical Details</a>
        </div>
          <div class="box">
            <a class="not-selected" href="consultant_patient_test_details.php">Test Details</a>
          </div>

      </div>

      <div class="counts1">
        <table align="center">
          <tr>
            <th class="th1">Patient ID</th>
            <th class="th2">Patient Name</th>
            <th class="th1">Age</th>
            <th class="th1">Blood Group</th>
            <th class="th1">Action</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Malki Nethusha</td>
            <td>23</td>
            <td>A+</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Malki Nethusha</td>
            <td>28</td>
            <td>O-</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Malki Nethusha</td>
            <td>38</td>
            <td>B+</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>Malki Nethusha</td>
            <td>40</td>
            <td>B-</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>Malki Nethusha</td>
            <td>35</td>
            <td>AB+</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>Malki Nethusha</td>
            <td>23</td>
            <td>A+</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>7</td>
            <td>Malki Nethusha</td>
            <td>28</td>
            <td>O-</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>8</td>
            <td>Malki Nethusha</td>
            <td>38</td>
            <td>B+</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td>Malki Nethusha</td>
            <td>40</td>
            <td>B-</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>10</td>
            <td>Malki Nethusha</td>
            <td>35</td>
            <td>AB+</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>11</td>
            <td>Malki Nethusha</td>
            <td>23</td>
            <td>A+</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>12</td>
            <td>Malki Nethusha</td>
            <td>28</td>
            <td>O-</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>13</td>
            <td>Malki Nethusha</td>
            <td>38</td>
            <td>B+</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>14</td>
            <td>Malki Nethusha</td>
            <td>40</td>
            <td>B-</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
          <tr>
            <td>15</td>
            <td>Malki Nethusha</td>
            <td>35</td>
            <td>AB+</td>
            <td>
              <a href="#" class="butt">Check</a>
              <a href="#" class="butt2">Download</a>
            </td>
          </tr>
        </table>
      </div>

    </div>

  </div>

</body>
</html>

<!--<?php require_once('consultant_footer.php'); ?>-->
