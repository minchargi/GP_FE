<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>Announcement</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../students/style.css">
  <script src="../students/accordion.js"></script>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <!-- Navbar-->
  <?php include '../navbar/navbar.php'; ?>

  <ul class="nav">
    <li class="active"><a href="../students/announceCourse.php">Announcement</a></li>
    <li><a href="../students/coursedetail.php">Overview</a></li>
    <li><a href="../students/course-grades.php">Grades</a></li>
    <li><a href="../students/attendance.php">Attendance</a></li>
  </ul>

  

  <h1>Course Name</h1>

  <div class="announce-accordion">
    <div class="accordion-item">
      <button class="accordion-header" onclick="toggleAccordion(this)">Announcement Title</button>
      <div class="accordion-content">
        <p>Announcement content here !</p>
      </div>
    </div>
   </div>
   <div class="announce-accordion">
    <div class="accordion-item">
      <button class="accordion-header" onclick="toggleAccordion(this)">Announcement Title</button>
      <div class="accordion-content">
        <p>Announcement content here !</p>
      </div>
    </div>
   </div>
   <div class="announce-accordion">
    <div class="accordion-item">
      <button class="accordion-header" onclick="toggleAccordion(this)">Announcement Title</button>
      <div class="accordion-content">
        <p>Announcement content here !</p>
      </div>
    </div>
   </div>
   <div class="announce-accordion">
    <div class="accordion-item">
      <button class="accordion-header" onclick="toggleAccordion(this)">Announcement Title</button>
      <div class="accordion-content">
        <p>Announcement content here !</p>
      </div>
    </div>
   </div>
   <div class="announce-accordion">
    <div class="accordion-item">
      <button class="accordion-header" onclick="toggleAccordion(this)">Announcement Title</button>
      <div class="accordion-content">
        <p>Announcement content here !</p>
      </div>
    </div>
   </div>
   <div class="announce-accordion">
    <div class="accordion-item">
      <button class="accordion-header" onclick="toggleAccordion(this)">Announcement Title</button>
      <div class="accordion-content">
        <p>Announcement content here !</p>
      </div>
    </div>
   </div>
   <div class="announce-accordion">
    <div class="accordion-item">
      <button class="accordion-header" onclick="toggleAccordion(this)">Announcement Title</button>
      <div class="accordion-content">
        <p>Announcement content here !</p>
      </div>
    </div>
   </div>
   <div class="announce-accordion">
    <div class="accordion-item">
      <button class="accordion-header" onclick="toggleAccordion(this)">Announcement Title</button>
      <div class="accordion-content">
        <p>Announcement content here !</p>
      </div>
    </div>
   </div>
   <div class="announce-accordion">
    <div class="accordion-item">
      <button class="accordion-header" onclick="toggleAccordion(this)">Announcement Title</button>
      <div class="accordion-content">
        <p>Announcement content here !</p>
      </div>
    </div>
   </div>
   <div class="announce-accordion">
    <div class="accordion-item">
      <button class="accordion-header" onclick="toggleAccordion(this)">Announcement Title</button>
      <div class="accordion-content">
        <p>Announcement content here !</p>
      </div>
    </div>
   </div>

  <!-- Footer -->
  <?php include '../footer/footer.php'; ?>

  </div>
</body>

</html>