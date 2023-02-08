<?php
if (isset($_SESSION['user_name']) && isset($_SESSION['consultant_name']))
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/matching.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Clinician Dashboard</title>
</head>
<body>

  <div class="head">
    <h1>Matching Process</h1>
  </div>

  <div class="search">
  <div class="search-bar">
    <span class="material-icons">search</span>
    <input type="search" placeholder="search here">
  </div>
  </div>

  <div class="board">
    <div class="counts">

        <div class="box">
         1
        </div>

    </div>

    <div class="section">
      <div class="charts">
        2
      </div>
      <div class="cal">
        3
      </div>
    </div>
    </div>

</body>
</html>


<?php
}
?>
