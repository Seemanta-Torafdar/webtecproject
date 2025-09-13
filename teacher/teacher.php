<?php
$db = new mysqli("localhost","root","","webtechproject");
if($db->connect_error){die("Connection failed: ".$db->connect_error);}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Teacher Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <div class="logo">
        <img src="teacher-logo.png" alt="KCI Logo"> KCI Teacher Portal
    </div>
    <nav class="top-nav">
        <a href="../view/home.php">Home</a>
        <a href="#">Profile</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<div class="container">
    <aside class="sidebar">
        <a class="menu" href="upload_assignment.php">📘 Upload Assignment</a>
        <a class="menu" href="upload_notes.php">📚 Upload Notes</a>
        <a class="menu" href="upload_notice.php">📢 Upload Notice</a>
        <a class="menu" href="upload_result.php">📝 Upload Result</a>
    </aside>
    <main class="main-content">
        <div class="card">
            <h3>Welcome, Teacher 👋</h3>
            <p>All uploaded content will appear for students at <b><a href='http://localhost/webtecproject-main/student/std.php'>Student Dashboard</a></b>.</p>
        </div>
    </main>
</div>
</body>
</html>
