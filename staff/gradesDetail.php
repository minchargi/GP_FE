<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Grade Detail</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../staff/gradesDetail.css">
        <link rel="stylesheet" href="../staff/navbar.css">
        <link rel="stylesheet" href="../staff/navbar2.css">
        <link rel="stylesheet" href="../staff/footer.css">
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
        <li><a href="../staff/courseOverview.php">Overview</a></li>
        <li class="active"><a href="../staff/gradesDetail.php">Grade</a></li>
        <li><a href="../staff/attend.php">Attendance</a></li>
        <li><a href="../staff/enroll.php">Enrollment</a></li>
      </ul>

        <!-- Main content -->
        <h1>Course Name</h1>
        <div class="container mt-4">
          <div class="btn-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#gradeDetailM">
              <span class="button-content gap-4">
                  Add
              </span>
          </button>
          </div>
        </div>
        <!-- Add Course List Modal-->
        <div class="modal fade" id="gradeDetailM" tabindex="-1" role="dialog" aria-labelledby="gradeDetailMLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="gradeDetailMLabel">Add Grade</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for adding new grade -->
                        <form id="gradeDetailForm" action="../staff/gradeDetailM.php" method="post">
                            <div class="form-group">
                                <label for="studentMajor">Major:</label>
                                <input type="text" class="form-control" id="studentMajor" name="studentMajor" required>
                            </div>
                            <div class="form-group">
                                <label for="studentID">Student ID:</label>
                                <input type="text" class="form-control" id="studentID" name="studentID" required>
                            </div>
                            <div class="form-group">
                                <label for="studentName">Student Name:</label>
                                <input type="text" class="form-control" id="studentName" name="studentName" required>
                            </div>
                            <div class="form-group">
                                <label for="attendGrade">Attendance:</label>
                                <input type="text" class="form-control" id="attendGrade" name="attendGrade" required>
                            </div>
                            <div class="form-group">
                                <label for="midTerm">Midterm:</label>
                                <input type="text" class="form-control" id="midTerm" name="midTerm" required>
                            </div>
                            <div class="form-group">
                                <label for="finalGrade">Final:</label>
                                <input type="text" class="form-control" id="finalGrade" name="finalGrade" required>
                            </div>
                            <div class="form-group">
                                <label for="totalGrade">Total:</label>
                                <input type="text" class="form-control" id="totalGrade" name="totalGrade" required>
                            </div>
                            
                            <button type="submit" class="btn btn-custom" name="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-2">
            <table class="table table-bordered table-hover">
                <thead>
                  <tr class="tb-row">
                    <th class="td-head" scope="col">Major</th>
                    <th class="td-head" scope="col">Student ID</th>
                    <th class="td-head" scope="col">Name</th>
                    <th class="td-head" scope="col">Attendance</th>
                    <th class="td-head" scope="col">Midterm </th>
                    <th class="td-head" scope="col">Final </th>
                    <th class="td-head" scope="col">Total </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>

        <div class="container">
          <nav class="list-pagination">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="pre-item page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="../staff/gradesDetail.php">1</a></li>
                <li class="page-item"><a class="page-link" href="../staff/gradesDetail2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="../staff/gradesDetail3.php">3</a></li>
                <li class="page-item"><a class="next-item page-link" href="../staff/gradesDetail2.php">Next</a></li>
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