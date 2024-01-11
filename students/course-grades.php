<?php 
  include 'verifyStudent.php';
  include 'student_function.php';
  if (!isset($_GET['id']) and !isset($_GET['year'])){
    header('Location: course-overview.php');
  };
  $course_id = $_GET['id'];
  $year = $_GET['year'];
  $result = fetch_course_overview($course_id);
  if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
  }
?>


<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>Grades</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../students/style.css">
  <link rel="stylesheet" href="../students/navbar.css">
  <link rel="stylesheet" href="../students/navbar2.css">
  <link rel="stylesheet" href="../students/footer.css">
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <!-- Navbar-->
  <header>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="../images/logo-moi_2.svg" alt="logo" width="90" height="50.78">
        </a>
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="../students/announce.php">
                  <i class="fas fa-home"></i> Announcement</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                  <i class="fas fa-book"></i> Course
                </a>
                <ul class="dropdown-menu"aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../students/course-overview.php">Overview</a></li>
                  <li><a class="dropdown-item" href="../students/retakeForm.php">Retake</a></li>
                  <li><a class="dropdown-item" href="../students/course-optionaly.php">Optional Course</a></li>
                </ul>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="../students/contact.php"><i class="fa-solid fa-phone"></i> Contact</a>
                  </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-calendar"></i> Timetable
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="https://usth.edu.vn/en/timetableo-of-year-2-program-in-information-and-communication-technology-5959/">Second Year</a></li>
                  <li><a class="dropdown-item" href="https://usth.edu.vn/en/timetable-of-year-3-ict-5961/">Third Year</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-user-circle"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../students/account.php">Account</a></li>
                  <li><a class="dropdown-item" href="../students/course-gpa.php">GPA</a></li>
                  <li><a class="dropdown-item" href="../sign-in/logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

  <ul class="nav">
    <li><a href="announceCourse.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Announcement</a></li>
    <li><a href="coursedetail.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Overview</a></li>
    <li class="active"><a href="course-grades.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Grades</a></li>
    <li><a href="attendance.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Attendance</a></li>
  </ul>

  <h1><?php echo $row['Course_Name']; ?></h1>
  <div class="container mt-2">
    <table class="table table-bordered">
      <thead>
        <tr class="tb-row">
          <th class="td-head" scope="col">Course ID</th>
          <th class="td-head" scope="col">Course Name</th>
          <th class="td-head" scope="col">Attendance</th>
          <th class="td-head" scope="col">Midterm </th>
          <th class="td-head" scope="col">Final </th>
          <th class="td-head" scope="col">Total </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $at_grade=cal_attend_grade($user_id,$course_id,$year);
        update_attend_grade($user_id,$course_id,$year,$at_grade);
        $result = fetch_course_grade($user_id,$course_id,$year);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>

            <tr class="tb-row">
              <td><?= $row['Course_ID'] ?></td>
              <td><?= $row['Course_Name'] ?></td>
              <td><?= $row['Attendance'] ?></td>
              <td><?= $row['Midterm'] ?></td>
              <td><?= $row['Final'] ?></td>
              <td><?= $row['Overall'] ?></td>
            </tr>
          <?php }
        } else { ?>

          <tr>
            <td colspan="5">No records found...</td>
          </tr>

        <?php } ?>
      </tbody>

    </table>
  </div>

  <!-- Footer -->
  <footer>
        <div class="row mt-4">
            <div class="col-md-4 infor">
                <img class="white-logo" src="../images/white_logo.png">
                <!--Address-->
                <p class="detail"> <i class="fa-solid fa-house icon-footer"></i>
                    Address
                </p>
                <p class="text-detail"> A21 building, Vietnam Academy of Science and Technology, 18 Hoang Quoc Viet, Cau Giay, Hanoi</p>
                <hr class="divider">

                <!--Phone-->
                <p class="detail"><i class="fa-solid fa-phone icon-footer"></i>
                Phone</p>
                <p class="text-detail"> +84-24 37 91 69 60</p>
                <hr class="divider">
                
                <!--Email-->
                <p class="detail"> <i class="fa-solid fa-envelope icon-footer"></i>
                    Email
                </p>
                <p class="text-detail">officeusth@usth.edu.vn</p>
                <hr class="divider">
                
                <!--Contact-->
                <p class="detail"> <i class="fa-solid fa-envelope icon-footer"></i>
                    Contact
                <p class="text-detail">webmaster@usth.edu.vn</p>
                <hr class="divider">
                
            </div>
            <div class="copy-right  py-2 mt-4">
                <p class="ft-text">&copy; 2021 <span class="web-site">usth.edu.vn</span>. All Rights reserved</p>
            </div>
        </div>
      </footer>

</body>

</html>