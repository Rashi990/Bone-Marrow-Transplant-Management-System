<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="../../public/css/donor_signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">


</head>

    <body>
        <!--Container-->
        <div class ="container">
          
            <div class="left">
    
              <!--heading-->
              
            <div class="head">
                <h2>Create Account</h2>
                
            </div>
          
            <br>
            
           
    
                <!-- Form Section-->
                <div class="frms">
    
                    <!--Login In form-->
             <form action="../../src/php/donor_signup.php" class="logfrm" method="post">
    
                <div class="inpt">
    
                    <label class ="flp" >
                        First Name
                    </label>
                        <br>
    
                            <input type="text" placeholder="Enter your First Name here" name="fname" class="np">
                        <br>
                        <br>

                    <label class ="flp" >
                            Last Name
                    </label>
                        <br>
        
                            <input type="text" placeholder="Enter your Last Name here" name="lname" class="np">
                          
                        <br>
                        <br>
                          

                    <label class ="flp" >
                            Email
                    </label>
                        <br>
        
                            <input type="email" placeholder="Enter your Email here" name="email" class="np">
                          
                        <br>
                        <br>
    
                    <label class="flp">
                            Password
                    </label>
                        <br>
    
                         
                           <input type="password" placeholder="Enter your Password" name="pass" class="np" >
                           <p>*At least 5 character with one uppercase letter</p>
                        <br>
                        <br>
                        <br>


        
    
                    <label class="flp">
                             Confirm Password
                    </label>
                        <br>
      
                           
                              <input type="password" placeholder="Re-Enter your Password" name="re_pass" class="np" >
                              
                </div>
    
                        <div class="btn">
    
    
                          <br> 
                         
    
                          
                          
                         <button class="create" name="create-btn" id="create-btn">
                              <span class="ct">Create</span>
                        </button>
                        
                        </div>
                        
            </form>
                    <br>
                    <br>
                    <br>
        <br>
                   
                
    
                    <footer>
                      <div class="bttm">
                        <p>&copy;2022 SLBMTMS.All rights reserved.</p>                                         
                  </div>
      
                    </footer>
    
                 
            </div>
            </div>
            </div>
            
            
    
         
        
        
    
        </div>
        <div class="right">
          <img src="../../public/images/donor_signup.png" alt="you give a smile for someone">
        </div>
    </body>
    
    </html>
    