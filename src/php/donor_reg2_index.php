<?php  include('../../public/html/donor_reg_header.html'); ?>

<?php  include('../../public/html/donor_reg2_index.html'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="../../public/css/donor_reg2.css">
    <link rel="stylesheet" href="../../public/css/donor_reg_header.css">
     <script src="../../public/js/donor_reg1_val.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">


</head>
<body>
<div class="container">


<div class="checklist-card">
                <div class="details">
                <div class="selections">
<form name="checkform" action="../../src/php/donor_reg2_index.php" onclick="return validate()">
<p class="heading">Choose your health issues from above list. it will help us to<br> check your eligibility.</p> 


<div class="check1">   
    

<input type="radio" id="dis1" name="disease" value="Diabetes">
<label for="diabetes">Diabetes</label><br><br>
<input type="radio" id="dis2" name="disease" value="Blood cancer or disorder">
<label for="blood cancer or disorder">Blood cancer or disorder</label><br><br>
<input type="radio" id="dis3" name="disease" value="Brain injury, concussion or surgery" >
<label for="brain injury">Brain injury, concussion or surgery</label> <br><br>
<input type="radio" id="dis4" name="disease" value="Chronic neck, back, hip or spine pain" >
<label for="chronic neck">Chronic neck, back, hip or spine pain</label> <br><br>
<input type="radio" id="dis5" name="disease" value="Diagnosis of HIV" >
<label for="hiv">Diagnosis of HIV</label> <br><br>

<div class="check2">            
<input type="radio" id="dis6" name="disease" value="Organ, marrow or stem cell transplant recipient" checked="checked" >
<label for="cell transplant recipient">Organ, marrow or stem cell transplant recipient</label> <br>
<input type="radio" id="dis7" name="disease" value="Diagnosis of hepatitis B or C" >
<label for="hepatitis B or C">Diagnosis of hepatitis B or C</label> <br><br>
<input type="radio" id="dis8" name="disease" value="Cancer" >
<label for="cancer">Cancer</label> <br><br>
<input type="radio" id="dis9" name="disease" value="Heart diseases, heart attack or other heart-related issues" >
<label for="heart diseases">Heart diseases, heart attack or other heart-related issues</label> <br>
<input type="radio" id="frd" name="disease" value="None of the above" >
<label for="noneabove">None of the above</label> 




<br>
        


</div>



</div>
</form>








</div></div>
</div>




<div class="left-btn">
                   <a href="../../src/php/donor_reg1_index.php" ><button class="pre-btn"><span class="fnt">Previous</span></button></a>
                </div>

                <!--<div class="right-btn">
                    <button type="submit" value="Next"class="nxt-btn" id="nxt-btn" onclick="return validate()"><span class="fnt">Next</span></button>
                </div>
-->
</div>
<!--
                <div class="bottom">
        <p>©2022 SLBMTMS &emsp;&emsp;&emsp;&emsp; All rights reserved.Terms and conditions</p>
    </div>
    




-->
<?php include('../../public/html/footer.html'); ?>









    
</body>
</html>



