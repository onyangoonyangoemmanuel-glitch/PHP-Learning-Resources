<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Great Leaders</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>

  <div class="signup-container">
    <h1>Create account</h1>
    <hr>

    <form action="signup_process.php" method="POST">

      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>
      <p class="hint">Your username is public and cannot be changed later.</p>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter a password" required>
      <p class="hint">Use a unique password that you’re not using elsewhere.</p>

      <label for="confirm">Confirm password</label>
      <input type="password" id="confirm" name="confirm_password" placeholder="Enter password again" required>

      <label for="email">Email address (recommended)</label>
      <input type="email" id="email" name="email" placeholder="Enter your email address" required>
      <p class="hint">Email is required to recover your account.</p>

      <button type="submit">Create your account</button>

    </form>

    <p class="login-link">Already have an account? <a href="login.php">Log in</a></p>
  </div>

</body>
</html>














