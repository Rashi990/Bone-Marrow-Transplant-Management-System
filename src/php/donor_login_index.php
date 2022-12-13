<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login As a Donor</title>
    <link rel="stylesheet" href="../../public/css/donor_login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

</head>
<body>
    <!--Container-->
    <div class ="container">
      
        <div class="left">

          <!--heading-->
          
        <div class="head">
            <h2>Welcome Back</h2>
            
            <h4>Welcome back! Please enter your details</h4>
        </div>
      
        <br>
        <br>
       
            <!-- Form Section-->
            <div class="frms">

                <!--Login In form-->
                <form action="../../src/php/donor_login.php" class="logfrm" method="post">
                <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo ($_GET['error']); ?></p>
            <?php } ?>
       


                 <div class="inpt">
 
                  <label class ="un" >
                    Username
                  </label>
                    <br>

                        <input type="text" placeholder="Enter your Username here" name="username" class="unm" required>
                  

                      <br>
                      <br>
                      <br>


                      <label class="un">
                        Password
                      </label>
                      <br>

                     
                        <input type="password" placeholder="Enter your Password here" name="pass" class="unm" required>
                        </div>

                        <div class="selct">


                      <br> 
                      <br>
                      <br>

                      <label for="re-check" class="remember">
                        
                        <input type="checkbox" class="rmb" name="re-check" id="re-check">
                        Remember me
                      </label>



                      <label for="" class="forgot">
                        <a href="Verify_email.html">Forgot Password?</a>
                      </label>


                      <br>
                      <br>
                      <br>
                      
                        <button class="login" name="login-btn" id="login-btn">
                          <span class="lg">Log In</span>
                      </button></a>
                    
                </form>
                <br>
                <br>
                <br><br>

                <div class="newacc">
                    <p>Don't have an account?<a href="donor_signup.php"> Create Account</a></p>
                </div>

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
      <img src="../../public/images/donor_login.png" alt="you give a smile for someone">
    </div>
</body>

</html>
