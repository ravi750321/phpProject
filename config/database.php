<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login Form with Show Password</title>
<style>
  /* Reset some default styles */
  * {
    box-sizing: border-box;
  }

  body {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .login-container {
    background: white;
    padding: 2.5rem 3rem;
    border-radius: 12px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    width: 360px;
  }

  .login-container h2 {
    text-align: center;
    margin-bottom: 1.5rem;
    color: #333;
    font-weight: 700;
    font-size: 1.8rem;
  }

  form {
    display: flex;
    flex-direction: column;
  }

  label {
    font-weight: 600;
    margin-bottom: 0.4rem;
    color: #444;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"] {
    padding: 0.75rem 1rem;
    border-radius: 8px;
    border: 1.8px solid #ccc;
    margin-bottom: 1.3rem;
    font-size: 1rem;
    transition: border-color 0.3s ease;
  }

  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="password"]:focus {
    border-color: #667eea;
    outline: none;
  }

  .show-password-container {
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    user-select: none;
  }

  .show-password-container input {
    margin-right: 0.5rem;
    cursor: pointer;
  }

  button {
    background-color: #667eea;
    border: none;
    color: white;
    padding: 0.85rem;
    font-size: 1.1rem;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 700;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #5a67d8;
  }

  /* Responsive */
  @media (max-width: 400px) {
    .login-container {
      width: 90vw;
      padding: 2rem;
    }
  }
</style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form id="loginForm" onsubmit="return false;">
      <label for="username">Username or Email</label>
      <input type="text" id="username" name="username" placeholder="Enter username or email" required />

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required />

      <div class="show-password-container">
        <input type="checkbox" id="showPassword" />
        <label for="showPassword">Show Password</label>
      </div>

      <button type="submit">Log In</button>
    </form>
  </div>

  <script>
    const showPasswordCheckbox = document.getElementById('showPassword');
    const passwordInput = document.getElementById('password');

    showPasswordCheckbox.addEventListener('change', function () {
      if (this.checked) {
        passwordInput.type = 'text';
      } else {
        passwordInput.type = 'password';
      }
    });
  </script>
</body>
</html>

