<?php  include('../../public/html/donor_reg_header.html'); ?>


<?php
    // --Add dbh file--
    require_once "../../config/connection.php";
    // --Add validation file--
    require_once "../php/donor_reg_validations.php";
    

    



//If user clicks create button
/*if (isset($_POST["age-between-btn"])) {
    header("Location:donor_reg2.php");
}
elseif(isset($_POST["age-above-btn"])){
    header("Location: home.php");
    exit();
}*/

?>

<?php  include('../../public/html/donor_reg1_index.html'); ?>



<?php include('../../public/html/footer.html'); ?>


