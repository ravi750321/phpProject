<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Registration</title>
  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="./css/headerFooter.css">

</head>
<body>
  <div class="grid">

    <div id="navbar" class="item"><span><h4>Shop Management</h4></span>
    <span class="nav-bar">Already Registered?<a class="nav-link" href="./index.php" style="display: inline;color:#fff;">login</a>
        </span>
    </div>

    <div id="section" style="height: auto;">
      <div class="login-box" style="margin:1rem 3rem;">
      <div class="register-container">
    <div class="register-box">
     
      <h2>Shop Registration Form</h2>

      <form id="registerForm" action="./register.php" method="post">

        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" id="username" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="shopName"  class="form-label">Shop Name</label>
          <input type="text" id="shopName" name="shopName" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" id="address" name="address" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="confirmPass" class="form-label">Confirm Password</label>
          <input type="password" id="confirmPass" name="confirmPass" class="form-control" required>
        </div>

        <button class="btn btn-primary" type="submit" style="margin-bottom: 1rem;">Register</button>
      </form>

      <div class="links">
        <p>Already have an account? <a href="./index.php">Login</a></p>
      </div>

    </div>
  </div>
      </div>
    </div>
  <div id="footer" class="item">@Copyright Shop Management</div>
  </div>
</body>

</html>