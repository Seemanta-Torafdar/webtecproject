<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../CSS/regt.css">
</head>

<body>
    <div class="form-container">
        <h2>Registration</h2>
        <form>
            <!-- Full Name -->
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required placeholder="User name">

            <!-- Age -->
            <label for="age">Age</label>
            <input type="number" id="age" name="age" required placeholder="Enter Age">
             <!-- Date Of Birth -->
            <label for="birth">Date of Birth</label>
            <input type="date" id="birth" name="birth" required >

            <!-- Phone Number -->
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" required placeholder="(+880) 17456-78901">

            <!-- Email -->
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required placeholder="User email address">

            <!-- Class -->
            <label for="class">Class Name</label>
            <input type="text" id="class" name="class" required>

            <!-- Section -->
            <label for="section">Section</label>
            <select id="section" name="section" required>
                <option value="">Select Section</option>
                <option value="sectionA">Section A</option>
                <option value="sectionB">Section B</option>
                <option value="sectionC">Section C</option>
            </select>

           

            <!-- Password -->
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter password">

            <!-- Confirm Password -->
            <label for="cpassword">Confirm Password</label>
            <input type="password" id="cpassword" name="cpassword" required placeholder="Re-enter password">

            <button type="submit">Confirm Register</button>
        </form>
    </div>
</body>

</html>