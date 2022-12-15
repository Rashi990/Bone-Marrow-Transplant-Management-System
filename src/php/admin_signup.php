<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href="../../public/css/admin_signup.css">
</head>
<body>
<div class="split-screen">
            <div class="left">
                <section class="copy">
                    <p>Create Your Account</p>
                </section>
            </div>
            <div class="right">
            <form action="../../src/php/admin_signupcheck.php" method="post">
                <section class="copy">
                <h2>SIGN UP</h2>
                </section>
                <br>
                <br>
                <div class="login-container"> 
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

                </div>
     	
     	<button class="signup-btn" type="submit"> Sign Up </button>
         <br>
                    <br>
          <a href="../../src/php/admin_login.php" class="ca">Already have an account?</a>
     </form>
            </div>
    
</body>
</html>