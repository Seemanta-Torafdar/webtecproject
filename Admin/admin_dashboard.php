<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KCI Admin Portal</title>
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
            <li><a href="#">Profile</a></li>
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
                <h3>Welcome, Admin 👋</h3>
                <p>You are logged in as an administrator. Use the sidebar to manage school data.</p>
            </div>
            <div class="card">
                <h3>System Overview</h3>
                <p>Total Students: <b>500</b></p>
                <p>Total Teachers: <b>50</b></p>
            </div>
        </div>
    </div>
</body>
</html>