<?php
    // Connect to MySQL database
    $db = new mysqli("localhost", "root", "", "webtechproject");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Initialize error message variables
    $nameErr = $phoneErr = $passwordErr = $cpasswordErr = "";
    $successMsg = "";
    $errorMsg = "";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form input values
        $fullname = trim($_POST["fullname"]);
        $age = $_POST["age"];
        $birth = $_POST["birth"];
        $phone = trim($_POST["phone"]);
        $email = trim($_POST["email"]);
        $class = trim($_POST["class"]);
        $section = $_POST["section"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        $isValid = true; // Flag for validation check

        // Validate name (only letters and spaces allowed)
        if (!preg_match("/^[a-zA-Z ]*$/", $fullname)) {
            $errorMsg = "Name must contain only letters.";
            $isValid = false;
        }

        // Validate phone (must be numbers only)
        if (!preg_match("/^[0-9]+$/", $phone)) {
            $errorMsg = "Phone number must be numeric.";
            $isValid = false;
        }

        // Validate password (minimum length = 6 characters)
        if (strlen($password) < 6) {
            $errorMsg = "Password must be at least 6 characters.";
            $isValid = false;
        }

        // Confirm password match
        if ($password !== $cpassword) {
            $errorMsg = "Password and Confirm Password must match.";
            $isValid = false;
        }

        // If all validation passes → Insert into database
        if ($isValid == true) {
            $sql = "INSERT INTO students (`name`, age, dateofbirth, phone, email, class, section, password) 
                    VALUES ('$fullname', '$age', '$birth', '$phone', '$email', '$class', '$section', '$password')";
            
            // Run query and check for success
            if ($db->query($sql) === TRUE) {
                echo "<script>alert('New record created successfully'); window.location.href = 'https://www.google.com';</script>";
            } else {
                $successMsg = "<p class='error'>Error: " . $sql . "<br>" . $db->error . "</p>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <!-- External CSS file -->
  <link rel="stylesheet" href="../Css/regt.css"> 
</head>
<body>
  <div class="form-container">
    <h2>Registration</h2>

    <!-- Registration Form -->
    <form method="POST" action="">
      <!-- Full Name -->
      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" name="fullname" value="<?php echo isset($fullname) ? $fullname : ''; ?>" required placeholder="User name">
      <span class="error"><?php echo $nameErr; ?></span><!--display validation error messages-->

      <!-- Age -->
      <label for="age">Age</label>
      <input type="number" id="age" name="age" value="<?php echo isset($age) ? $age : ''; ?>" required placeholder="Enter Age">

      <!-- Date Of Birth -->
      <label for="birth">Date of Birth</label>
      <input type="date" id="birth" name="birth" value="<?php echo isset($birth) ? $birth : ''; ?>" required>

      <!-- Phone Number -->
      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phone" value="<?php echo isset($phone) ? $phone : ''; ?>" required placeholder="(+880) 1745678901">
      <span class="error"><?php echo $phoneErr; ?></span>

      <!-- Email -->
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required placeholder="User email address">

      <!-- Class -->
      <label for="class">Class Name</label>
      <input type="text" id="class" name="class" value="<?php echo isset($class) ? $class : ''; ?>" required>

      <!-- Section (Dropdown) -->
      <label for="section">Section</label>
      <select id="section" name="section" required>
        <option value="">Select Section</option>
        <option value="sectionA" <?php if(isset($section) && $section=="sectionA") echo "selected"; ?>>Section A</option>
        <option value="sectionB" <?php if(isset($section) && $section=="sectionB") echo "selected"; ?>>Section B</option>
        <option value="sectionC" <?php if(isset($section) && $section=="sectionC") echo "selected"; ?>>Section C</option>
      </select>

      <!-- Password -->
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required placeholder="Enter password">
      <span class="error"><?php echo $passwordErr; ?></span>

      <!-- Confirm Password -->
      <label for="cpassword">Confirm Password</label>
      <input type="password" id="cpassword" name="cpassword" required placeholder="Re-enter password">
      <span class="error"><?php echo $cpasswordErr; ?></span>

      <!-- Submit Button -->
      <button type="submit">Confirm Register</button>
    </form>

    <!-- Display success or error messages -->
    <?php 
      if($successMsg != ""){
        echo $successMsg;
      }else if($errorMsg != ""){
        echo "<span style='color:red; margin-top: 5px;'>".$errorMsg."</span>";
      }
    ?>
  </div>
</body>
</html>
