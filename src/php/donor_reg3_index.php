
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
             <form action="../../src/php/donor_signup.php" class="logfrm" method="post">
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
    
                            <input type="text" placeholder="Enter your Full Name here" name="fname" class="np">
                        <br>
                        <br>

                    <label class ="flp" >
                            Last Name
                    </label>
                        <br><br>
        
                            <input type="text" placeholder="Enter a Username here" name="username" class="np">
                          
                        <br>
                        <br>
                          

                    <label class ="flp" >
                            Email Address
                    </label>
                        <br><br>
        
                            <input type="email" placeholder="Enter your Email here" name="email" class="np">
                          
                        <br>
                        <br>
                        <label class ="flp" >
                            Telephone Number
                    </label>
                        <br><br>
        
                            <input type="tel"placeholder="Enter your Telephone Number here" name="tel" class="np">
                          
                        <br>
                        <br>
                        <label class ="flp" >
                            Address
                    </label>
                        <br><br>
        
                            <input type="text"placeholder="Enter your Address here" name="address" class="np">
                          
                        <br>
                        <br>
                        <label class ="flp" >
                           Nearest City
                    </label>
                        <br><br>
        
                            <input type="text" placeholder="Enter your Nearest City Name here" name="city" class="np">
                          
                        <br>
                        <br>
                        <label class ="flp" >
                            Gender
                    </label><br><br>
                <div class="mf">
                <input type="radio" id="male" name="male" value="Male"> <label for="male">Male</label><br>
                <input type="radio" id="female" name="female" value="Female"> <label for="female">Female</label>
                </div>
                        <br><br><br>
                        <label class ="flp" >
                        Weight
                    </label><br><br>
                        
        
                            <input type="number" step="any" min="1"name="wt" class="wt1">
                            <div class="measure1">kg</div>
                        <br>
                        
                        <br>
                        
                        <br>

<br>
                     
          
                 
                        <div class="btn">
    
    
                          <br> 
                         
    
                          
                          
                         <button class="request" name="request-btn" id="request-btn">
                              <span class="rt">Request</span>
                        </button>
                        
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
       
    </body>
    
    </html>
    