<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Overview</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/courseOverview.css">
        <link rel="stylesheet" href="../staff/navbar.css">
        <link rel="stylesheet" href="../staff/footer.css">
        <script src="courseOverview.js"></script>
        <link rel="stylesheet" href="../staff/navbar2.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
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
                  <a class="nav-link" href="../staff/announce.php"><i class="fa-solid fa-newspaper"></i> Announcements</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="../staff/courses.php"><i class="fa-solid fa-book"></i> Courses</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="../staff/students.php"><i class="fa-solid fa-user-group"></i> Students</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="../staff/departments.php"><i class="fa-solid fa-chalkboard-user"></i> Departments</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../staff/account.php">Account</a></li>
                    <li><a class="dropdown-item" href="../sign-in/logout.php">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <ul class="nav">
        <li><a href="../staff/courseAnnounce.php">Announcement</a></li>
        <li class="active"><a href="../staff/courseOverview.php">Overview</a></li>
        <li><a href="../staff/gradesDetail.php">Grade</a></li>
        <li><a href="../staff/attend.php">Attendance</a></li>
        <li><a href="../staff/enroll.php">Enrollment</a></li>
      </ul>

        <!-- Main content -->
        <div class="container mt-4">
        <p class="header_text">Course Name</p>

        <div class="container mt-4">
          <div class="btn-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#editBoxM">
              <span class="button-content gap-4">
                  Edit
              </span>
          </button>
          </div>
        </div>
        <!-- Add %Grade Modal-->
        <div class="modal fade" id="editBoxM" tabindex="-1" role="dialog" aria-labelledby="editBoxMLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editBoxMLabel">Update Grade</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for adding new student -->
                        <form id="editBoxForm" action="../staff/courseOverviewM.php" method="post">
                            <div class="form-group">
                              <label for="courseInfo">Attendance:</label>
                              <input type="text" class="form-control" id="courseInfo" required>
                            </div>
                            <div class="form-group">
                              <label for="courseInfo">Exercies:</label>
                              <input type="text" class="form-control" id="courseInfo" required>
                            </div>
                            <div class="form-group">
                              <label for="courseInfo">Practice:</label>
                              <input type="text" class="form-control" id="courseGrade" required>
                            </div>
                            <div class="form-group">
                              <label for="courseInfo">Project work:</label>
                              <input type="text" class="form-control" id="courseGrade" required>
                            </div>
                            <div class="form-group">
                              <label for="courseInfo">Final Exam:</label>
                              <input type="text" class="form-control" id="courseGrade" required>
                            </div>
                            
                            <button type="button" class="btn btn-custom" onclick="Save()">Save Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-2">
          <table class="table table-bordered">
              <thead>
                  <tr class="tb-row">
                  <th class="td-head" scope="col">Attendance</th>
                  <th class="td-head" scope="col">Exercies</th>
                  <th class="td-head" scope="col">Practice</th>
                  <th class="td-head" scope="col">Project work</th>
                  <th class="td-head" scope="col">Final Exam</th>
                  </tr>
              </thead>
              <tbody>
                  <tr class="tb-row">
                  <td class="td-custom">10% </td>
                  <td class="td-custom">30%</td>
                  <td class="td-custom">0%</td>
                  <td class="td-custom">0%</td>
                  <td class="td-custom">60%</td>
                  </tr>

              </tbody>
          </table>
      </div>

      <div class="container mt-4">
          <div class="btn-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#editOverviewM">
              <span class="button-content gap-4">
                  Edit
              </span>
          </button>
          </div>
        </div>
        <!-- Add Student List Modal-->
        <div class="modal fade" id="editOverviewM" tabindex="-1" role="dialog" aria-labelledby="editOverviewMLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editOverviewMLabel">Edit Course Overview</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Edit Course Overview -->
                        <label for="editedContent">Edit Content:</label>
                        <textarea class="form-control" id="editedContent" rows="4"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
      
  <div class="container mt-4 course-detail">
        <dl>
          <dt>Attendance
            <dd>Attendance will be checked for every labwork</dd>
            <dd>Students should remind the lecturers to check attendance if they forget it.</dd>
            <button class="btn-custom" onclick="checkAttendance()">Check Attendance</button>
          </dt>
        </dl>
        <ul class="sub">After a labwork session, you have 7 days to complete the exercises 
          <li>Write a report of at least 2 pages to describe your work (figure and table), discussion, and analysis of lab work. </li>
          <li> Submit in PDF format to Google Classroom (link above) </li>
          <li><b>Source code is optional</b> in the report</li>
        </ul>
        <p class="head"><b>Student Score Chart </b></p>
        <canvas id="gradesChart" width="400" height="200"></canvas>
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