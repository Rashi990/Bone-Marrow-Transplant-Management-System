<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultant Register</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_create_account.css">
  </head>
  <body>
    <div class="hero">
      <div class="form-box">
        <div class="heading">
          <h1 class="title">Register</h1>
        </div>
        <form class="login" class="input-group" action="consultant_signup.php" method="post">
          <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo ($_GET['error']); ?></p>
          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label class="input-label">Full Name</label>
            <input type="text"
                   class="input-field"
                   name="name"
                   placeholder="Enter Your Full Name">

          <label class="input-label">Email</label>
            <input type="email"
                   class="input-field"
                   name="email"
                   placeholder="Enter Your Email">

          <label class="input-label">Telephone Number</label>
          <input type="text" class="input-field" name="tele_no" placeholder="Enter Your Telephone Number">
          <label class="input-label">Address</label>
          <textarea type="text" rows="2" class="input-field" name="address" placeholder="Enter Your Address"></textarea>
          <label class="input-label">User Name</label>
          <input type="text" class="input-field" name="username" placeholder="Enter Your User Name">
          <label class="input-label">Password</label>
          <input type="password" class="input-field" name="password" placeholder="Enter Your Password">
          <label class="input-label">Re-entered Password</label>
          <input type="password" class="input-field" name="repass" placeholder="Re-enter Your Password">
          <button type="submit" class="submit-btn">Create</button>
          <span class="te">Already have an account? <a href="consultant_index.php">Login</a></span>
          <span class="cr">© 2022 SLBMTMS. All rights reserved.</span>
        </form>
      </div>
      <div class="image">
      </div>
    </div>
  </body>
</html>
