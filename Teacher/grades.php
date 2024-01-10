<?php

include '../db_conn.php';
include 'verifyTeacher.php';
include 'teacher_function.php';

if (!isset($_GET['id']) and !isset($_GET['year'])) {
  header('Location: courseList.php');
}
$course_id = $_GET['id'];
$year = $_GET['year'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../Teacher/grades.css">
  <link rel="stylesheet" href="../Teacher/navbar.css">
  <link rel="stylesheet" href="../Teacher/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

</head>

<body>
  <!-- Navbar-->
  <header>
          <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="#">
              <img class="logo" src="../images/logo-moi_2.svg" alt="logo" width="90" height="50.78">
            </a>
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="../Teacher/announcement.php"><i class="fas fa-home"></i> Announcement</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="../Teacher/courseList.php"> 
                      <i class="fas fa-book"></i> Course
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../Teacher/contact.php"><i class="fa-solid fa-phone"></i> Contact</a>
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
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="far fa-question-circle"></i> </a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-user-circle"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="../Teacher/profile.php">Account</a></li>
                      <li><a class="dropdown-item" href="../sign-in/logout.php">Logout</a></li>
                    </ul>
                  </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
      </header>

  <ul class="nav">
    <li><a href="../Teacher/courseAnnounce.php?id=<?php echo $course_id; ?>&year=<?php echo $year; ?>">Announcement</a></li>
    <li><a href="../Teacher/coursedetail.php?id=<?php echo $course_id; ?>&year=<?php echo $year; ?>">Overview</a></li>
    <li><a href="../Teacher/studentList.php?id=<?php echo $course_id; ?>&year=<?php echo $year; ?>">Student List</a></li>
    <li class="active"><a href="../Teacher/grades.php?id=<?php echo $course_id; ?>&year=<?php echo $year; ?>">Grades</a></li>
    <li><a href="../Teacher/attendance.php?id=<?php echo $course_id; ?>&year=<?php echo $year; ?>">Attendance</a></li>
  </ul>
  <div class="container mt-4">
    <p class="header-text">Grade</p>
    <div class="button-container">
      <button class="custom-button" data-bs-toggle="modal" data-bs-target="#updateGradesModal">
        <span class="button-content gap-4">
          Update
        </span>
      </button>
      <button class="custom-button" data-bs-toggle="modal" data-bs-target="#importGradesModal">
        <span class="button-content gap-4">
          Import
        </span>
      </button>
    </div>
    <!-- Update Grades Modal -->
    <div class="modal fade" id="updateGradesModal" tabindex="-1" role="dialog" aria-labelledby="updateGradesModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="updateGradesModalLabel">Update Grade</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Form for updating grades -->
            <form id="updateGradesForm">
              <div class="form-group">
                <label for="studentInfo">Name or ID of Student:</label>
                <input type="text" class="form-control" id="studentInfo" required>
              </div>
              <div class="form-group">
                <label for="gradeType">Select Grade Type:</label>
                <select class="form-control" id="gradeType" required>
                  <option value="attendance">Attendance</option>
                  <option value="midterm">Midterm</option>
                  <option value="final">Final</option>
                </select>
              </div>
              <div class="form-group">
                <label for="studentInfo">Grade:</label>
                <input type="text" class="form-control" id="studentGrade" required>
              </div>
              <button type="button" class="btn btn-custom" onclick="updateGrades()">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="importGradesModal" tabindex="-1" role="dialog" aria-labelledby="importGradesModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="importGradesModalLabel">Import Grades</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Form for importing grades -->
            <form id="importGradesForm">
              <div class="form-group">
                <label for="fileInput">Import Grades:</label>
                <input type="file" class="form-control" id="fileInput" required>
              </div>
              <button type="button" class="btn btn-custom" onclick="importGrades()">Import</button>
            </form>
          </div>
        </div>
        </div>
    </div>
    
    <?php
      if(isset($_POST['caloverall'])){
        overall_grade($course_id,$year);
      }
    ?>
    <form method="post">
    <input type="submit" name="caloverall" value="Cal overall">
    </form>

    <?php
      if(isset($_POST['passyear'])){
        cal_credit($year);
      }
    ?>
    <form method="post">
    <input type="submit" name="passyear" value="pass year">
    </form>

      </div>
    <div class="container mt-2">
      <table class="table table-bordered table-hover">
        <thead>
          <tr class="tb-row">
            <th class="td-head" scope="col">Student ID</th>
            <th class="td-head" scope="col">Name</th>
            <th class="td-head" scope="col">Attendance</th>
            <th class="td-head" scope="col">Midterm </th>
            <th class="td-head" scope="col">Final </th>
            <th class="td-head" scope="col">Total </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = fetch_course_detail($course_id, $year);
          $row = $result->fetch_assoc();
          ?>
          <tr class="tb-row">
            <th class="th-custom" scope="row"> </th>
            <td class="td-custom"> </td>
            <td class="td-custom"><?php echo $row['Attendance_Percentage']; ?>%</td>
            <td class="td-custom"><?php echo $row['Midterm_Percentage']; ?>%</td>
            <td class="td-custom"><?php echo $row['Final_Percentage']; ?>%</td>
            <td class="td-custom">100%</td>
          </tr>
          <?php
          $result = fetch_course_grade($course_id, $year);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              if (!isset($row['Attendance'])) {
                $attendance = 0;
              } else {
                $attendance = $row['Attendance'];
              }
              if (!isset($row['Midterm'])) {
                $midterm = 0;
              } else {
                $midterm = $row['Midterm'];
              }
              if (!isset($row['Final'])) {
                $final = 0;
              } else {
                $final = $row['Final'];
              }
              if (!isset($row['Overall'])) {
                $overall = 0;
              } else {
                $overall = $row['Overall'];
              }
          ?>
              <tr class="tb-row">
                <th class="th-custom" scope="row"><?php echo $row['User_ID']; ?></th>
                <td class="td-custom"><?php echo $row['FullName']; ?></td>
                <td class="td-custom"><?php echo $attendance; ?></td>
                <td class="td-custom"><?php echo $midterm; ?></td>
                <td class="td-custom"><?php echo $final; ?></td>
                <td class="td-custom"><?php echo $overall; ?></td>
              </tr>
          <?php
            }
          }
          ?>

        </tbody>
      </table>
    </div>
    <div class="container mt-4">
      <nav aria-label="Page navigation example">
        <ul class="pagination page-custom">
          <li class="page-item" style="padding-right: 10px;">
            <a class="page-link custom-color" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item" style="padding-right: 10px;">
            <a class="page-link custom-color" href="#">1</a>
          </li>
          <li class="page-item" style="padding-right: 10px;">
            <a class="page-link custom-color" href="#">2</a>
          </li>
          <li class="page-item" style="padding-right: 10px;">
            <a class="page-link custom-color" href="#">...</a>
          </li>
          <li class="page-item" style="padding-right: 10px;">
            <a class="page-link custom-color" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link custom-color" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
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