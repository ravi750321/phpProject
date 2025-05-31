<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Registration</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

  <style>
    .card {
      width: 35%;
      margin: auto;
      margin-top: 1rem;
      box-shadow: 0.1rem 0.1rem 0.1rem #949497;
    }

    form {
      padding: 0.7rem 1rem 0.5rem 1rem;
    }

    form h3 {
      text-align: center;
    }
  </style>

</head>

<body>
  <div class="card">

    <div class="card-header">
      <h5>Shop Registration Form</h5>
    </div>

    <form id="registerForm" action="./register.php" method="post">

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required>
    </div>

    <div class="mb-3">
      <label for="shopName" class="form-label">Shop Name</label>
      <input type="text" id="shopName" name="shopName" class="form-control" placeholder="Enter Shop Name" required>
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
    </div>

    <div class="mb-3">
      <label for="confirmPass" class="form-label">Confirm Password</label>
      <input type="password" id="confirmPass" name="confirmPass" class="form-control" placeholder="Repeat Password" required>
    </div>
  </form>
   <button class="btn btn-primary" style="margin: 0rem 1rem;" type="submit">Register</button>
    <p style="margin-top: 0.6rem; text-align:center;">Already have a account?<a href="./index.php"> Login</a></p>
  </div>
  
</body>

</html>