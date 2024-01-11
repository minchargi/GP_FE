<?php 
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
    <title>Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Teacher/attendance.css">
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
        <li><a href="../Teacher/courseAnnounce.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Announcement</a></li>
        <li><a href="../Teacher/coursedetail.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Overview</a></li>
        <li><a href="../Teacher/studentList.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Student List</a></li>
        <li ><a href="../Teacher/grades.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Grades</a></li>
        <li class="active"><a href="../Teacher/attendance.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Attendance</a></li>
    </ul>
    <div class="container mt-4">
        <p class="header-text">Attendance</p>
        <div class="button-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#addAttendModal">
                <span class="button-content gap-4">
                  Create Attendance 
                </span>
            </button>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#importListsModal">
                <span class="button-content gap-4">
                    Import
                </span>
            </button>
        </div>
    </div>

    <!-- Add Attend Modal-->
    <div class="modal fade" id="addAttendModal" tabindex="-1" role="dialog" aria-labelledby="addAttendModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addAttendModalLabel">Create Attendance</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <!-- Form for adding attendance -->
                  <form id="attendForm" action="open_attendance.php" method="POST">
                      <input type="hidden" id="course_id" name="course_id" value=<?php echo $course_id ?>>
                      <input type="hidden" id="year" name="year" value=<?php echo $year ?>>
                      <div class="form-group">
                          <label for="session">Session:</label>
                          <input type="text" class="form-session" id="session" name="session" required>
                      </div>
                      <div class="form-group">
                          <label for="time_close">Time close:</label>
                          <input type="time" class="form-control" id="time_close" name="time_close" required>
                      </div>
                      <button type="submit" class="btn btn-custom" name="submit">Create</button>
                  </form>
              </div>
          </div>
      </div>
    </div>
    <!-- Import Lists Modal -->
    <div class="modal fade" id="importListsModal" tabindex="-1" role="dialog" aria-labelledby="importListsModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="importListsModalLabel">Import Lists</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <!-- Form for importing lists -->
                  <form id="importListsForm">
                      <div class="form-group">
                          <label for="fileInput">Import Lists:</label>
                          <input type="file" class="form-control" id="fileInput" required>
                      </div>
                      <button type="button" class="btn btn-custom" onclick="importLists()">Import</button>
                  </form>
              </div>
          </div>
      </div>
    </div>


    <div class="container mt-2">
        <table class="table table-bordered table-hover">
            <thead>
              <?php
                $result = fetch_course_detail($course_id,$year);
                $row = $result->fetch_assoc();
              ?>
              <tr class="tb-row">
                <th class="td-head" scope="col">Student ID</th>
                <th class="td-head" scope="col">Name</th>
                <?php
                    for ($i = 1;$i <= $row['Number_lecture'];$i++){
                  ?>          
                    <th class="td-head" scope="col"><?php echo $i?></th>
                  <?php
                    }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php
               $result2 = fetch_course_student_list($course_id,$year);
               if ($result2->num_rows > 0) {
                while ($row2 = $result2->fetch_assoc()) {
              ?>
              <tr class="tb-row">
                <td class="td-custom"><?php echo $row2['User_ID']; ?></td>
                <td class="td-custom"><?php echo $row2['FullName']; ?></td>
                <?php
                    for ($i = 1;$i <= $row['Number_lecture'];$i++){
                    $result3 = fetch_attendance($row2['User_ID'],$course_id,$i);
                    if ($result3->num_rows > 0) {
                      $atten = $result3->fetch_assoc()['Attendance'];
                    } else {
                      $atten = 0;
                    } 
                ?>
                <td class="td-custom"><?php echo $atten; ?></td>
                <?php
                    } 
                ?>
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