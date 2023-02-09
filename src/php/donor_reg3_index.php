
<?php  include('../../public/html/donor_reg_header.html'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="../../public/css/donor_reg3.css">
    <link rel="stylesheet" href="../../public/css/donor_reg_header.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">


</head>

    <body>
        <!--Container-->
        <div class ="container">
          
            <div class="left">
                <!--header-->
       
    
              <!--heading-->
              
            <div class="head">
                <h2>Personal Details</h2>
                
            </div>
          
            <br>
            
           
    
                <!-- Form Section-->
                <div class="frms">
    
                    <!--Login In form-->
             <form action="../../src/php/donor_reg3.php"name="regform" class="logfrm" method="post" onsubmit="return validateForm()" >
             <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo ($_GET['error']); ?></p>
            <?php } ?>
           
    
                <div class="inpt">
                    <br>
                    <br>
                    <br>
    
                    <label class ="flp" >
                        First Name
                    </label>
                        <br><br>
    
                            <input type="text" placeholder="Enter your Full Name here" name="fname" class="np" required>
                        <br>
                        <br>

                    <label class ="flp" >
                            Last Name
                    </label>
                        <br><br>
        
                            <input type="text" placeholder="Enter your Last Name here" name="lname" class="np" required>
                          
                        <br>
                        <br>
                          

                    <label class ="flp" >
                            Email Address
                    </label>
                        <br><br>
        
                            <input type="email" placeholder="Enter your Email here" name="email" class="np" required>
                          
                        <br>
                        <br>
                        <label class ="flp" >
                            Telephone Number
                    </label>
                        <br><br>
        
                            <input type="tel"placeholder="Enter your Telephone Number here" name="tel" class="np" required>
                          
                        <br>
                        <br>
                        <label class ="flp" >
                            Address
                    </label>
                        <br><br>
        
                            <input type="text"placeholder="Enter your Address here" name="address" class="np"required>
                          
                        <br>
                        <br>
                        <label class ="flp" >
                           Nearest City
                    </label>
                        <br><br>
        
                            <input type="text" placeholder="Enter your Nearest City Name here" name="city" class="np" required>
                          
                        <br>
                        <br>
                        <label class ="flp" >
                           District
                    </label>
                        <br><br>
        
                            <input type="text" placeholder="Enter your District Name here" name="district" class="np" required>
                          
                        <br>
                        <br>
                        
                        <label class ="flp" >
                           Date of Birth
                    </label>
                        <br><br>
        
                            <input type="date" placeholder="Enter your date of birth here" name="dob" class="np" required >
                          
                        <br>
                        <br>

        
                        <br>
                        


                        <label class ="flp" >
                           NIC Number
                    </label>
                        <br><br>
        
                            <input type="text" placeholder="Enter your NIC Number here" name="nic" class="np" required>
                          
                        <br>
                        <br>

                        
                        <label class ="flp" >
                            Marital Status
                    </label><br><br>
                <div class="mf">
                <input type="radio" id="amrd" name="marital" value="Married"> <label for="married">Married</label><br>
                <input type="radio" id="nmrd" name="marital" value="Unmarried"> <label for="unmarried">Unmarried</label>
                </div>
                        <br><br><br>

                   











                        <label class ="flp" >
                            Gender
                    </label><br><br>
                <div class="mf">
                <input type="radio" id="male" name="gender" value="Male"> <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="Female"> <label for="female">Female</label>
                </div>
                        <br><br><br>
                    
                        
                        <br>

<br>
                     
          
        
                 
                        <div class="btn">
    <!--
                        <div class="contr">-->
                          <br> 
                         
    
                          
                         <button type="submit" class="request" name="create-btn" id="create-btn" onclick="openPopup()">
                              <span class="rt">Request</span>
                        </button>

<!--
                        <div class="popup" id="popup">
        <img src="tick.png">
        <h2>Thank You!</h2>
        <p>Your Request has been successfully sent.Thank You for requesting to be a Donor.You will be notified soon with further details with your provided Mobile Number and email.</p>
        <button type="button" onclick="closePopup()">Ok</button>

    </div>
</div>
             -->      
                        </div>
                        
            </form>
                    <br>
                    <br>
                    <br>
        <br>

    <div class="bottom">
        <p>©2022 SLBMTMS &emsp;&emsp;&emsp;&emsp; All rights reserved.Terms and conditions</p>
    </div>
    

                
    
                   <!-- <footer>
                      <div class="bttm">
                        <p>&copy;2022 SLBMTMS.All rights reserved.</p>                                         
                  </div>
      
                    </footer>-->
    
                 
            </div>
            </div>
            </div>
            
            
    
         
        
        
    
        </div>



<!--
        <div class="contr">
    <button type="submit" class="rqt-btn" onclick="openPopup()">Request</button>
    <div class="popup" id="popup">
        <img src="tick.png">
        <h2>Thank You!</h2>
        <p>Your Request has been successfully sent.Thank You for requesting to be a Donor.You will be notified soon with further details with your provided Mobile Number and email.</p>
        <button type="button" onclick="closePopup()">Ok</button>

    </div>
</div>


             -->
    <script>





function validateForm() {
  let fn = document.forms["regform"]["fname"].value;
  if (fn == "") {
    /*alert("Name must be filled out");*/
    return false;
  }
  let ln = document.forms["regform"]["lname"].value;
  if (ln == "") {
    /*alert("Name must be filled out");*/
    return false;
  }
  let eml = document.forms["regform"]["email"].value;
  if (eml == "") {
    /*alert("Name must be filled out");*/
    return false;
  }
  let tel = document.forms["regform"]["tel"].value;
  if (tel == "") {
    /*alert("Name must be filled out");*/
    return false;
  }
  let addr = document.forms["regform"]["address"].value;
  if (addr == "") {
    /*alert("Name must be filled out");*/
    return false;
  }
  let ct = document.forms["regform"]["city"].value;
  if (ct == "") {
    /*alert("Name must be filled out");*/
    return false;
  }

  let dst = document.forms["regform"]["district"].value;
  if (dst == "") {
    /*alert("Name must be filled out");*/
    return false;
  }
  let dob = document.forms["regform"]["dob"].value;
  if (dob == "") {
    /*alert("Name must be filled out");*/
    return false;
  }

  let nic = document.forms["regform"]["nic"].value;
  if (nic == "") {
    /*alert("Name must be filled out");*/
    return false;
  }



}

















/*----popup functions---*/



function validatePopup(){

if(validateForm()=="true"){



        let popup =document.getElementById("popup");


        function openPopup(){
            popup.classList.add("open-popup")
        }

        function closePopup(){
            popup.classList.remove("open-popup")
        }


    }
}



    </script>





























       
    </body>
    
    </html>
    