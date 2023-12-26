<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>Course Details</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../students/coursedetail.css">
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <!-- Navbar-->
  <?php include '../navbar/navbar.php'; ?>

  <ul class="nav">
    <li><a href="../students/announceCourse.php">Announcement</a></li>
    <li class="active"><a href="../students/coursedetail.php">Overview</a></li>
    <li><a href="../students/course-grades.php">Grades</a></li>
    <li><a href="../students/attendance.php">Attendance</a></li>
  </ul>

  <h1>Course Name</h1>
  <div class="container mt-4 course-detail">
        <dl>
          <dt>Attendance
            <dd>Attendance will be checked for every labwork</dd>
            <dd>Students should remind the lecturers to check attendance if they forget it.</dd>
          </dt>
        </dl>
        <ul class="sub">After a labwork session, you have 7 days to complete the exercises 
          <li>Write a report of at least 2 pages to describe your work (figure and table), discussion, and analysis of lab work. </li>
          <li> Submit in PDF format to Google Classroom (link above) </li>
          <li><b>Source code is optional</b> in the report</li>
        </ul>

  </div>
  

  <!-- Footer -->
  <?php include '../footer/footer.php'; ?>

</body>

</html>