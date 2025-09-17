<?php
session_start();

$error = "";

$users = array
(
    "admin@kci.edu" => "admin123",
    "teacher@kci.edu" => "teacher123",
    "student@kci.edu" => "student123"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (array_key_exists($email, $users)) {
        if ($users[$email] === $password) {
            $_SESSION['user_id'] = $email;
            $_SESSION['role'] = "admin"; 
            $_SESSION['user_name'] = "Admin User";
            
            header("Location: admin_dashboard.php");
            exit;
        } else {
            $error = "Incorrect password. Please try again.";
        }
    } else {
        $error = "This email is not registered in the system. Please check the email address.";
    }
}
?>
 

<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin Login</title>
     <link rel="stylesheet" href="styles.css">
     <style>
          .login-card 
          {
            width: 350px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            background: white;
            text-align: center;
          }

          .login-card h3 
         {
            color: #0077cc;
         }

         .login-card input[type="email"], .login-card input[type="password"] 
         {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
         }

         .login-card button 
         {
            width: 90%;
            padding: 12px;
            background: #0077cc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
         }
        </style>
        
    </head>


    <body>
        <div class="login-card">
         <h3>Admin Login</h3>

         <?php if ($error): ?>
             <p style="color: red;"><?php echo $error; ?></p>
         <?php endif; ?>

            <form action="login.php" method="POST">
             <input type="email" name="email" placeholder="Email" required><br>
             <input type="password" name="password" placeholder="Password" required><br>
             <button type="submit">Login</button>
            </form>

        </div>
    </body>
</html>