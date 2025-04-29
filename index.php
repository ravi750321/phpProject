<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  <style>
    .grid {
      display: grid;
     
      grid-gap: 0.5rem;
      grid-template-areas:
        'navbar navbar navbar navbar'
        'section section section section'
        'footer footer footer footer'
      ;
    }

    .item {
      background-color:rgb(248, 240, 244);
      box-shadow: 1px 1.2px 2.5px rgb(128, 125, 125);
      padding: 0.8rem;
    }

    #navbar {
      grid-area: navbar;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    #section {
      background-color:rgb(248, 252, 250);
      border: 0.1px solid rgb(233, 229, 229);
      height: 78vh;
      grid-area: section;
    }

    #footer {
      text-align: center;
      position: fixed;
      padding: 0.9rem;
      border-top: 1px solid rgb(128, 125, 125);
      bottom: 0;
      width:100%;
      grid-area: footer;
    }
  </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
  <div class="grid">

    <div id="navbar" class="item"><span><h4>Shop Management</h4></span>
    <span class="nav-bar">Don't Have a Account?<a class="nav-link" href="./register.php" style="display: inline;">Register</a>
        </span>
    </div>

    <div id="section">
      <div class="login-box" style="margin:1rem 3rem;">
      <form>
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