<?php
$db=new mysqli("localhost","root","","webtechproject");
if($db->connect_error){die("Connection failed: ".$db->connect_error);}
if(!file_exists("uploads")){mkdir("uploads",0777,true);}
$msg="";
if(isset($_POST['upload_assignment'])){
    $title=$db->real_escape_string($_POST['assignment_title']);
    $file=$_FILES['assignment_file']['name'];
    $target="uploads/".basename($file);
    if(move_uploaded_file($_FILES['assignment_file']['tmp_name'],$target)){
        $db->query("INSERT INTO assignments(title,file_name)VALUES('$title','$file')");
        $msg="Assignment uploaded successfully!";
    }else{$msg="Error uploading assignment file.";}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upload Assignment</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
    <div class="logo">
        <img src="teacher-logo.png" alt="KCI Logo"> KCI Teacher Portal
    </div>
    <nav class="top-nav">
        <a href="teacher_dashboard.php">Dashboard</a>
        <a href="http://localhost/webtecproject-main/Login/login.php">Logout</a>
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
    <?php if($msg) echo "<div class='message'>$msg</div>"; ?>
    <div class="card">
        <h3>📘 Upload Assignment</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Assignment Title</label>
                <input name="assignment_title" required>
            </div>
            <div class="form-group">
                <label>Select File</label>
                <input type="file" name="assignment_file" required>
            </div>
            <button type="submit" name="upload_assignment" class="btn-save">Upload</button>
        </form>
    </div>
</main>
</div>
</body>
</html>
