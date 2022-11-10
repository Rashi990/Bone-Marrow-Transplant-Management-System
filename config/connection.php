
<?php

    $dbhost = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'bone_marrow_transplant_management_system'; 

    $connection = mysqli_connect('localhost','root','','bone_marrow_transplant_management_system');

    if(mysqli_connect_errno()){
        die('Database connection failed!'.mysqli_connect_error());
    }

?>