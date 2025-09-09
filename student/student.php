<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> <!-- Sets character encoding -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Makes page responsive -->
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="student.css">

</head>

<body>
  <!-- Header Section -->
  <header class="header">
    <div class="logo">
      <a href="student.php">
  <img src="ChatGPT Image Aug 23, 2025, 03_00_43 AM.png" alt="KCI Logo" style="cursor:pointer;">
</a>
KCI Student Portal</div>
    <ul class="top-btn">
      <li><a href="../view/home.php">Home</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="../Login/login.php">Logout</a></li>
    </ul>
  </header>

  <!-- Sidebar + Main content container -->
  <div class="container">
    <!-- Sidebar menu -->
    <aside class="sidebar">
      <button class="menu" onclick="showAssignments()"><i class="bi bi-journals"></i> Assignment</button>
      <button class="menu" onclick="showNotes()"><i class="bi bi-book-fill"></i> Notes / Slides</button>
      <button class="menu" onclick="showNotices()"><i class="bi bi-megaphone-fill"></i> Notice</button>
      <button class="menu" onclick="showPersonalInfo()"><i class="bi bi-person"></i> Personal Information</button>
    </aside>

    <!-- Main content area -->
    <main class="main-content" id="content">
      <!-- Welcome Card -->
      <div class="card">
        <h3>Welcome, Asif 👋</h3>
        <p>You are logged in as a KCI student.</p>
      </div>
      <!-- Subject Information Table -->
      <div class="card">
        <h3><i class="bi bi-book-half"></i> Subject Information</h3>
        <table>
          <tr><th>Subject</th><th>Teacher</th><th>Class Time</th></tr>
          <tr><td>Mathematics</td><td>Mr. Rahman</td><td>10:00 AM - 11:00 AM</td></tr>
          <tr><td>Physics</td><td>Ms. Akter</td><td>11:15 AM - 12:15 PM</td></tr>
          <tr><td>Chemistry</td><td>Dr. Karim</td><td>1:00 PM - 2:00 PM</td></tr>
          <tr><td>English</td><td>Mr. Hasan</td><td>2:15 PM - 3:15 PM</td></tr>
        </table>
      </div>
    </main>
  </div>
</body>
</html>
