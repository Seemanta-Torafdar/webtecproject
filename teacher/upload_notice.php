<?php
$db=new mysqli("localhost","root","","webtechproject");
if($db->connect_error){die("Connection failed: ".$db->connect_error);}
$msg="";
if(isset($_POST['upload_notice'])){
    $text=$db->real_escape_string($_POST['notice_text']);
    $db->query("INSERT INTO notices(notice_text)VALUES('$text')");
    $msg="Notice published successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Upload Notice</title>
<link rel="stylesheet" href="style.css"></head>
<body>
<header class="header">
    <div class="logo"><img src="teacher-logo.png"> KCI Teacher Portal</div>
    <nav class="top-nav"><a href="teacher_dashboard.php">Dashboard</a><a href="http://localhost/webtecproject-main/Login/login.php">Logout</a></nav>
</header>
<div class="container">
<aside class="sidebar">
    <a class="menu" href="upload_assignment.php">📘 Upload Assignment</a>
    <a class="menu" href="upload_notes.php">📚 Upload Notes</a>
    <a class="menu" href="upload_notice.php">📢 Upload Notice</a>
    <a class="menu" href="upload_result.php">📝 Upload Result</a>
</aside>
<main class="main-content">
    <?php if($msg) echo "<div class='message'>$msg</div>"; ?>
    <div class="card">
        <h3>📢 Upload Notice</h3>
        <form method="post">
            <div class="form-group"><label>Notice Details</label><textarea name="notice_text" rows="4" required></textarea></div>
            <button type="submit" name="upload_notice" class="btn-save">Publish</button>
        </form>
    </div>
</main></div></body></html>
