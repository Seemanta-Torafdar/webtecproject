<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') 
{
    header("Location: login.php");
    exit;
}

$users = [
    ['id' => 1, 'name' => 'John Doe', 'email' => 'student@kci.edu', 'role' => 'student'],
    ['id' => 2, 'name' => 'Jane Smith', 'email' => 'teacher@kci.edu', 'role' => 'teacher'],
    ['id' => 3, 'name' => 'Admin User', 'email' => 'admin@kci.edu', 'role' => 'admin'],
];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Manage Users - Admin Portal</title>
     <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

 <body>
        <div class="header">
           <div class="logo">
             <i class="bi bi-person-workspace"></i>
             KCI Admin Portal
            </div>
            <ul class="top-btn">
             <li><a href="admin_dashboard.php">Home</a></li>
             < li><a href="#">Profile</a></li>
             <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

       <div class="container">
           <div class="sidebar">
             <a href="manage_users.php"><button class="menu">Manage Users</button></a>
             <a href="#"><button class="menu">School Reports</button></a>
             <a href="#"><button class="menu">Manage Calendar</button></a>
            </div>
          <div class="main-content">
              <div class="card">
                  <h3>Manage Users 🧑‍🏫</h3>
                  <p><i>User management features are disabled without a database connection.</i></p>
             </div>

              <div class="card">
                 <h3>Existing Users</h3>
                 <table>
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Role</th>
                        </tr>
                     </thead>
                      <tbody>
                         <?php foreach ($users as $user): ?>
                             <tr>
                                 <td><?php echo $user['id']; ?></td>
                                 <td><?php echo $user['name']; ?></td>
                                 <td><?php echo $user['email']; ?></td>
                                 <td><?php echo ucfirst($user['role']); ?></td>
                             </tr>
                          <?php endforeach; ?>
                     </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </body>
</html>