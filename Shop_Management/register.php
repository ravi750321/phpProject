<?php
include("./config/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Form</title>
  <link rel="stylesheet" href="./css/register.css">
</head>

<body>

  <div class="register-container">
    <div class="register-box">
      <?php include("./config/alert.php") ?>
      <h2>Register</h2>

      <form id="registerForm" action="./register.php" method="post">

        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required>
        </div>

        <div class="input-group">
          <label for="shopName">Shop Name</label>
          <input type="text" id="shopName" name="shopName" required>
        </div>

        <div class="input-group">
          <label for="address">Address</label>
          <input type="text" id="address" name="address" required>
        </div>

        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>

        <div class="input-group">
          <label for="confirmPass">Confirm Password</label>
          <input type="password" id="confirmPass" name="confirmPass" required>
        </div>

        <button type="submit">Register</button>
      </form>

      <div class="links">
        <p>Already have an account? <a href="./index.php">Login</a></p>
      </div>

    </div>
  </div>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // extract($_POST);
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

  $shopName = filter_input(INPUT_POST, "shopName", FILTER_SANITIZE_SPECIAL_CHARS);

  $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);

  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  $confirm_pass = filter_input(INPUT_POST, "confirmPass", FILTER_SANITIZE_SPECIAL_CHARS);

  $hash = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO shops (username,shop_name,address,password,confirm_password) values ('$username','$shopName','$address','$password','$confirm_pass')";

  if ($password !== $confirm_pass) {

    $_SESSION["alert"] = "Passwords do NOT match.";
    header("Location: register.php");
    return;
  } else {

    try {
      mysqli_query($conn, $sql);
      $_SESSION["success"] = "Shop Registration Successful!";
      header("Location: index.php");

    } catch (mysqli_sql_exception) {
      $_SESSION["alert"] = "Username already exist!";
      header("Location: register.php");
    }
  }
}
?>