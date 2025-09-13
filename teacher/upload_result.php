<?php
$db=new mysqli("localhost","root","","webtechproject");
if($db->connect_error){die("Connection failed: ".$db->connect_error);}
$msg="";
if(isset($_POST['upload_result'])){
    $studentid=$db->real_escape_string($_POST['student_id']);
    $grade=$db->real_escape_string($_POST['result_grade']);
    $db->query("INSERT INTO results(student_id,result_grade)VALUES('$studentid','$grade')");
    $msg="Result saved successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Upload Result</title>
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
        <h3>📝 Upload Result</h3>
        <form method="post">
            <div class="form-group"><label>Student ID</label><input name="student_id" required></div>
            <div class="form-group"><label>Result/Grade</label><input name="result_grade" required></div>
            <button type="submit" name="upload_result" class="btn-save">Save</button>
        </form>
    </div>
</main></div></body></html>
