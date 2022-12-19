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







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="../../public/css/donor_reg1.css">
    <link rel="stylesheet" href="../../public/css/donor_reg_header.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="../../public/js/donor_reg1_val.js"></script>


</head><body>
<div class="left">
<img class="reg-img" src="../../public/images/reg1_image.png" alt="Give a smile for a life">



</div>
<div class="description-card">
                <div class="details">
                    
                    <div class="paragraph">
                        <p>*For the safty of the patients, we are only accept members between 18 and 40 because blood stem cells from younger donors provide more suvival-rate.</p>
                    </div>
                </div>
</div>


<div class="description-card2">
                <div class="details">
                <div class="paragraph">
<p><h1 class="heading">Which describes You? *</h1></p>
<div class="age-left-btn">
                    <button class="age-between-btn" onclick="myFunction1()"><span class="age-fnt">Between 18 and 40</span></button>
                </div>
                <div class="age-right-btn">
                    <button class="age-above-btn" onclick="myFunction2()"><span class="age-fnt">41 or older</span></button>
                </div>
                
 <script>
    function myFunction1() {
  location.replace("donor_reg2_index.php");
}
function myFunction2() {
  location.replace("home.php");
}


 </script>               

                <div class="bottom">
        <p>©2022 SLBMTMS &emsp;&emsp;&emsp;&emsp; All rights reserved.Terms and conditions</p>
    </div>
    
</body>
</html>



