<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link rel="stylesheet" href="signup_style.css">
</head>
<body>

  <header>
    <h1>Create account</h1>
    <hr>
  </header>

  <main class="signup-container">
    <section class="form-section">
      <form action="signup_process.php" method="POST">

        <label for="fullname">Username</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your username" required>
        <p class="hint">Your username is public and cannot be made private later.</p>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter a password" required>
        <p class="hint">It is recommended to use a unique password that you are not using elsewhere.</p>

        <label for="confirm_password">Confirm password</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter password again" required>

        <label for="email">Email address (recommended)</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
        <p class="hint">Email is required to recover your account if you lose your password.</p>

        <button type="submit">Create your account</button>

        <p class="note">Already have an account? <a href="login.php">Log in</a></p>
      </form>
    </section>

    <aside class="info-section">
      <h2>Wikipedia is made by people like you.</h2>
      <ul>
        <li><strong>1,315,631,389</strong> edits</li>
        <li><strong>7,085,154</strong> pages</li>
        <li><strong>115,920</strong> recent contributors</li>
      </ul>
    </aside>
  </main>

</body>
</html>
