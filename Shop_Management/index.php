<?php
    include("./config/database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>

    <!-- <div class="">
        <span class="nav-bar">Don't Have a Account?
            <a class="nav-link" href="./register.php">Register</a>
        </span>
    </div> -->
    <div class="login-container">
        <div class="login-box">
            <?php include("./config/alert.php") ?>
            <h2>Login</h2>

            <form class="signin_box" id="loginForm" action="./index.php" method="post">

                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit">Login</button>
            </form>

            <div class="links">
            <p>If you are a new?<a href="./register.php">Register a shop</a></p>
            </div>

        </div>
    </div>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM shops WHERE username = '$username' AND password = '$password'";

    $result =  mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $_SESSION["is_user_loggedin"] = true;
        $_SESSION["user_data"] = mysqli_fetch_assoc($result);
        header("Location: dashboard.php");
    } else {
        $_SESSION["alert"] = "Invalid Username/Password!";
        header("Location: index.php");
    }
    exit;
}
?>
