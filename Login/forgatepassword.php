<?php
// Initialize variables
$username = $password = $cpassword = "";
$usernameErr = $passwordErr = $cpasswordErr = "";
$success = false;

// Run validation when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // --- Validate Username ---
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z]+$/", $username)) {
      $usernameErr = "Username must contain only letters";
    }
  }
}

  // --- Validate Password ---
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    if (strlen($password) < 6) {
      $passwordErr = "Password must be at least 6 characters";
    }
  }

  // --- Validate Confirm Password ---
  if (empty($_POST["cpassword"])) {
    $cpasswordErr = "Confirm password is required";
  } else {
    $cpassword = test_input($_POST["cpassword"]);
    if ($password !== $cpassword) {
      $cpasswordErr = "Passwords not match";
    }
  }

  // --- If no errors ---
  if (empty($usernameErr) && empty($passwordErr) && empty($cpasswordErr)) {
   // $success = true;
   $conn= new mysqli("localhost", "root","","webtechproject");
     if($conn->connect_error)
     {
      die("connection failed" . $coon->connect_error);
     }
     $usertype=$_POST["USERTYPE"];
     $sql="UPDATE $usertype SET password='$password'WHERE name= '$username'";
      



     var_dump($result);

     if($resultStudent && $resultStudent->num_rows> 0)  //Check if a student with the entered username and password exists
     {
       //  If match → Alert 
       echo "<script>
       alert('Login Successful!');
       window.location.href='../student/student.php';
       </script>";
       exit;

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
  <link rel="stylesheet" href="../Css/forgatepassword.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <?php if ($success): ?>
    <script>
      alert('Password Change Successful!');
      window.location.href="../Login/login.php";
      
    </script>
  <?php endif; ?>

  <div class="container">
    <div class="login-box">
      <h2>Forgate Password </h2>
      <p>Forgate your account Password</p>

      <form method="post" action="">
        <div class="input-box">
          <label for="username"><i class="bi bi-person"></i></label>
          <input type="text" name="username" id="username" placeholder="Username" value="<?php echo  $username; ?>">
        </div>
        <span class="error"><?php echo $usernameErr; ?></span>


        <div class="input-box">
          <label for="password"><i class="bi bi-key"></i></label>
          <input type="password" name="password" id="password" placeholder="Enter New Password" value="<?php echo $password; ?>">
        </div>
        <span class="error"><?php echo $passwordErr; ?></span>
        

        <div class="input-box">
          <label for="cpassword"><i class="bi bi-key"></i></label>
          <input type="password" name="cpassword" id="cpassword" placeholder="Re-Enter New Password" value="<?php echo $cpassword; ?>">
        </div>
        <span class="error"><?php echo $cpasswordErr; ?></span>



         <button type="submit" class="btn">Confirm Your New Password </button>
   
      </form>
    </div>

    
  </div>
</body>

</html>