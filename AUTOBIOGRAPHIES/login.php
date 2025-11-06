<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Great Leaders</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>

  <div class="login-container">
    <h1>Log in</h1>
    <hr>

    <p class="note">
      Login processing now uses our domain <code>auth.example.org</code>.
      If you are using blocking software, you may need to allow access to this domain.
      <a href="#">(technical details)</a>
    </p>

    <form action="login_process.php" method="POST">
      <label for="email">Username or Email</label>
      <input type="text" id="email" name="email" placeholder="Enter your username or email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

      <div class="checkbox">
        <input type="checkbox" id="keep" name="keep">
        <label for="keep">Keep me logged in (for up to one year)</label>
      </div>

      <button type="submit">Log in</button>
    </form>

    <div class="help-links">
      <a href="#">Help with logging in</a><br>
      <a href="#">Forgot your password?</a>
    </div>

    <div class="join-box">
      <div class="avatar-placeholder"></div>
      <p><strong>Don’t have an account?</strong></p>
      <a href="signup.php" class="join-btn">Join Autobiographipedia</a>
    </div>
  </div>

</body>
</html>
