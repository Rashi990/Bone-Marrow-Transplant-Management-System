<?php require_once('config/connection.php');?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL BMTMS</title>
</head>

<body>
    <?php header("Location: src/php/home.php"); ?>
</body>
</html>

<?php mysqli_close($connection);?>
