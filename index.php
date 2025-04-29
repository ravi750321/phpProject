<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="./css/headerFooter.css">
</head>
<body>
  <div class="grid">

    <div id="navbar" class="item"><span><h4>Shop Management</h4></span>
    <span class="nav-bar">Don't Have a Account?<a class="nav-link" href="./register.php" style="display: inline;color:#fff">Register</a>
        </span>
    </div>

    <div id="section">
      <div class="login-box" style="margin:1rem 3rem;">
      <form id="loinForm" action="./index.php" method="post">
          <h2>User Login</h2>

          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" id="username" class="form-control" name="username" required>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
          </div>
         
        <div class="links">
          <button type="submit" class="btn btn-primary">Login</button>
          <p style="margin-top: 0.6rem;">If you are a new?<a href="./register.php">Register a shop</a></p>
        </div>
        </form>
      </div>
    </div>
  <div id="footer" class="item">@Copyright Shop Management</div>
  </div>
</body>

</html>