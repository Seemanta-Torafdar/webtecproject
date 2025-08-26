<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Registration Form</title>
  <link rel="stylesheet" href="../CSS/registration.css">
</head>
<body>
  <div class="form-container">
    <h2> Registration </h2>
     <form>
      <!-- Full Name -->
    <label for="fullName"> Full Name </label>
    <input type="text" id="fullname" name="fullname" required placeholder="User name">

      <!-- Age -->
    <label for="age"> Age </label>
    <input type="number" id="age" name="age" required>

     <!-- Phone Number-->
    <label for="phone"> Phone Number </label>
    <input type="text" id="text" name="text" required placeholder="(+880) 17456-78901)">

     <!-- Email-->
    <label for="email"> Email Address </label>
    <input type="email" id="email" name="email" required placeholder="user email address">

     <!--class-->
    <label for="class"> Class Name </label>
    <input type="class" id="class" name="class" required>

    <!--section-->
    <label for="class"> Section </label>

    <select id="section" name="section" required>

      <option value="">Select Section</option>
      <option value="sectionA">Section A</option>
      <option value="sectionB">Section B</option>
      <option value="sectionC">Section C</option>

    </select>
    <!-- Username -->
     
    <label for="username">User Name </label>
    <input type="username" id="username" name="username" required>

     <!-- Password -->
    <label for="password">Password </label>
    <input type="password" id="password" name="password" required placeholder="enter passeord">

     <!-- Confirm Password -->
    <label for="cpassword"> Confirm Password </label>
    <input type="cpassword" id="cpassword" name="cpassword" required placeholder="re-enter passeord">

    <button type="submit">Confirm Register</button>
  </form>
  </div>
</body>
</html>