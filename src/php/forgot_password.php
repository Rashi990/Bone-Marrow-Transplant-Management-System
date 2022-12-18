<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forgot Password Page</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/forgot_password.css?v=1">
  </head>
  <body>
    <div class="form-div">
      <div class="image">
      </div>
      <div class="form-box">
        <div class="heading">
          <h1 class="title">FORGOT PASSWORD?</h1>
        </div>
        <form class="forgot_password" action="forgot_password_setting.php" method="post">
          <?php if (isset($_GET['error'])) {?>
          <p class="error"><?php echo ($_GET['error']); ?></p>
          <?php } ?>
          <label class="input-label">Enter the User Name of Your Account to Reset the Password</label>
          <input type="text" class="input-field" name="username" placeholder="Enter User Name">
          <div class="ss">
            <a href="recover_password.php">Try Another Way</a>
            <button type="submit" class="submit-btn">Next</button>
          </div>
        </form>
        <span class="cr">© 2022 SLBMTMS. All rights reserved.</span>
      </div>
    </div>
  </body>
</html>
