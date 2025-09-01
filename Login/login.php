<?php
// Initialize variables
$username = $password = "";
$usernameErr = $passwordErr = "";
$success = false;

// Run validation when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // --- Validate Username ---
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z]+$/", $username)) {
      $usernameErr = "Username Muste Be letter";
    }
  }

  // --- Validate Password ---
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
    if (!preg_match("/^[0-9]+$/", $password)) {
      $passwordErr = "Password Must Be 8 Digit ";
    }
  }

  // --- If no errors ---
  if (empty($usernameErr) && empty($passwordErr)) {
    $success = true;
  }
}

// Function to sanitize inputs
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="../CSS/login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <?php if ($success): ?>
    <script>
      alert('Login Successful!');
    </script>
  <?php endif; ?>

  <div class="container">
    <div class="login-box">
      <h2>Login</h2>
      <p>Sign In to your account</p>

      <form method="post" action="">
        <div class="input-box">
          <label for="username"><i class="bi bi-person"></i></label>
          <input type="text" name="username" id="username" placeholder="Username" value="<?php echo  $username; ?>">
        </div>
        <span class="error"><?php echo $usernameErr; ?></span>

        <div class="input-box">
          <label for="password"><i class="bi bi-key"></i></label>
          <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>">
        </div>
        <span class="error"><?php echo $passwordErr; ?></span>

        <button type="submit" class="btn">Login</button>
        <a href="#" class="forgot">Forgot password?</a>
      </form>
    </div>

    <div class="admin-box">
      <h2>Contact Admin</h2>
      <p>Hello Welcome To Registration. Hello Welcome To Registration. Hello Welcome To Registration. Hello Welcome To Registration.
        Hello Welcome To Registration.Hello Welcome To Registration.Hello Welcome To Registration.Hello Welcome To Registration.
      </p>
      <a href="registration.php"> <button class="btn">Register Now!</button></a>

    </div>
  </div>
</body>

</html>