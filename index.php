<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <style>
    .card {
      width: 33%;
      margin: auto;
      margin-top: 5rem;
      box-shadow: 0.1rem 0.1rem 0.1rem #949497;
    }

    form {
      padding: 0.5rem 1rem;
    }

    form h4 {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="card">



    <form id="loinForm" action="./index.php" method="post">
      <h4>Login</h4>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" class="form-control" name="username" placeholder="Enter Username" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Password" required>
      </div>

    </form>
          <button style="margin: 0rem 1rem;" type="submit" class="btn btn-primary">Login</button>
          <p style="margin-top: 0.6rem; text-align:center;">If you are a new?<a href="./register.php"> Register a shop</a></p>
  </div>
</body>

</html>