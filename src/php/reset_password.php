<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset Password Page</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/reset_password.css">
  </head>
  <body>
    <div class="main">
      <div class="top-des">
        <h1>Reset Password</h1>
        <h3>You Have Successfully Been Identified.</h3>
        <h3>You May Now Reset Your New Password. Your Account Will Be Enabled With This New Password.</h3>
      </div>
      <div class="form-div">
        <div class="image">
        </div>
        <div class="form-box">
          <div class="heading">
            <h1 class="title">Set Your New Password</h1>
          </div>
          <form class="reset_password" action="reset_password_setting.php" method="post">
            <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo ($_GET['error']); ?></p>
            <?php } ?>
            <label class="input-label">Enter the New Password</label>
            <input type="password" class="input-field" name="password" placeholder="Enter New Password">
            <label class="input-label">Re-enter the New Password</label>
            <input type="re-password" class="input-field" name="re-password" placeholder="Re-enter New Password">
            <div class="ss">
              <a href="forgot_password.php">Go Back</a>
              <button type="submit" class="submit-btn">Reset Password</button>
            </div>
          </form>
          <span class="cr">© 2022 SLBMTMS. All rights reserved.</span>
        </div>
      </div>
    </div>
  </body>
</html>
