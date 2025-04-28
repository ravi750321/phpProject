<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
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
      
      background-color:rgb(225, 235, 229);
      border: 1px solid black;
      padding: 1.2rem;
    }

    #navbar {
      grid-area: navbar;

    }

    #section {
      height: 76vh;
      grid-area: section;
    }

    #footer {
      position: fixed;
      bottom: 0;
      width:100%;
      grid-area: footer;
    }
  </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
  <div class="grid">
    <div id="navbar" class="item">Home About Section</div>
    <div id="section" class="item">
      <div class="login-box" style="margin:1rem 3rem;">
      <form>
          <h2>Login</h2>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
          <div class="links">
          <p>If you are a new?<a href="./register.php">Register a shop</a></p>
        </div>
        </form>
      </div>
    </div>
  <div id="footer" class="item">@copyright</div>
  </div>
</body>

</html>