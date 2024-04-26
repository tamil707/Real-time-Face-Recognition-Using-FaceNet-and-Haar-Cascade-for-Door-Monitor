<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>register page</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form method="post" action="#" class="login">
            <div class="field">
              <input type="text" name="Mail" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" name="Pass" placeholder="Password" required>
            </div>
            
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>
          <form method="post" action="#" class="signup">
            <div class="field">
              <input type="email" name="Email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="text" name="Number" placeholder="Mobile Number" required maxlength="10">
            </div>
            <div class="field">
              <input type="password" name="Password" placeholder="Password" required>
            </div>
            <div class="field">
              <input type="password" name="Cpassword" placeholder="Confirm password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>

  <script  src="./script.js"></script>

</body>
</html>