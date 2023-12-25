<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        <li><a href="../Teacher/courseAnnouncement.php">Announcement</a></li>
        <li><a href="../Teacher/coursedetail.php">Overview</a></li>
        <li><a href="../Teacher/studentList.php">Student List</a></li>
        <li class="active"><a href="../Teacher/grades.php">Grades</a></li>
        <li><a href="../Teacher/attendance.php">Attendance</a></li>
      </ul>
      <div class="container mt-4">
        <p class="header-text">Grade</p>
        <div class="button-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#updateGradesModal">
                <span class="button-content gap-4">
                    <i class="fas fa-plus-circle"></i>
                    Update Grade
                </span>
            </button>
        </div>
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
                <tr class="tb-row">
                  <th class="th-custom" scope="row"> </th>
                  <td class="td-custom"> </td>
                  <td class="td-custom">10%</td>
                  <td class="td-custom">40%</td>
                  <td class="td-custom">50%</td>
                  <td class="td-custom">100%</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                
                
              </tbody>
            </table>
      </div>
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