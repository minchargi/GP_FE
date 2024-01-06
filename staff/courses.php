<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Intake</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/courses.css">
        <link rel="stylesheet" href="../staff/navbar.css">
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

        <!-- Main content -->
      <div class="container mt-4">
        <p class="header-text">Intake</p>
      </div>
      <div class="container mt-4">
        <div class="btn-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#courseM">
                <span class="button-content gap-4">
                    Add
                </span>
            </button>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#courseDeptM">
                <span class="button-content gap-4">
                    Add Dept
                </span>
            </button>
        </div>
      </div>
      <!-- Add Course Modal-->
        <div class="modal fade" id="courseM" tabindex="-1" role="dialog" aria-labelledby="courseMLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="courseMLabel">Add New Intake</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for adding new intake -->
                        <form id="courseForm" action="courseM.php" method="post">
                            <div class="form-group">
                                <label for="courseIntake">Intake:</label>
                                <input type="text" class="form-control" id="courseIntake" name="courseIntake" required>
                            </div>
                            <div class="form-group">
                              <label for="courseChoose">Choose Department(s):</label>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="department1" name="department[]" value="Department 1">
                                <label class="form-check-label" for="department1">Department of Information and Communication Technology</label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="department2" name="department[]" value="Department 2">
                                <label class="form-check-label" for="department3">Department of Space and Applications</label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="department3" name="department[]" value="Department 3">
                                <label class="form-check-label" for="department3">Department of Energy</label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="department4" name="department[]" value="Department 4">
                                <label class="form-check-label" for="department4">Department of Life Science</label>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="department5" name="department[]" value="Department 5">
                                <label class="form-check-label" for="department5">Department of Water - Environment - Oceanography</label>
                              </div>
                            </div>
                            
                            <button type="submit" class="btn btn-custom" name="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Course Dept Modal-->
        <div class="modal fade" id="courseDeptM" tabindex="-1" role="dialog" aria-labelledby="courseDeptMLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="courseDeptMLabel">Add New Intake</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for adding new intake -->
                        <form id="courseDeptForm" action="../staff/courseM.php" method="post">
                            <div class="form-group">
                              <label for="intakeChoose">Intake:</label>
                              <select class="form-control" id="intakeChoose" name="intakeChoose" required>
                                  <option value="" selected disabled>Select an option</option>
                                  <option value="dept1">Department of Information and Communication Technology</option>
                                  <option value="dept2">Department of Space and Applications</option>
                                  <option value="dept3">Department of Energy</option>
                                  <option value="dept4">Department of Life Science</option>
                                  <option value="dept5">Department of Water - Environment - Oceanography</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="newDeptName">Department Name:</label>
                                <input type="text" class="form-control" id="newDeptName" name="newDeptName" required>
                            </div>
                            <div class="form-group">
                                <label for="newMajor">New Major:</label>
                                <input type="text" class="form-control" id="newMajor" name="newMajor" required>
                            </div>
                              
                            <button type="submit" class="btn btn-custom" name="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

      <div class="container mt-4">
        <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
            <div class="accordion-content">
              <ul>
                <li><a href="../staff/trainProg.php">Department of Space and Applications</a></li>
                <li><a href="../staff/trainProg.php">Department of Energy</a></li>
                <li><a href="../staff/trainProg.php">Department of Information and Communication Technology</a></li>
                <li><a href="../staff/trainProg.php">Department of Life Sciences</a></li>
                <li><a href="../staff/trainProg.php">Department of Water - Environment - Oceanography</a></li>
              </ul>
            </div>
          </div>
         </div>
         <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
            <div class="accordion-content">
              <ul>
                <li><a href="../staff/trainProg.php">Department of Space and Applications</a></li>
                <li><a href="../staff/trainProg.php">Department of Energy</a></li>
                <li><a href="../staff/trainProg.php">Department of Information and Communication Technology</a></li>
                <li><a href="../staff/trainProg.php">Department of Life Sciences</a></li>
                <li><a href="../staff/trainProg.php">Department of Water - Environment - Oceanography</a></li>
              </ul>
            </div>
          </div>
         </div>
         <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
            <div class="accordion-content">
              <ul>
                <li><a href="../staff/trainProg.php">Department of Space and Applications</a></li>
                <li><a href="../staff/trainProg.php">Department of Energy</a></li>
                <li><a href="../staff/trainProg.php">Department of Information and Communication Technology</a></li>
                <li><a href="../staff/trainProg.php">Department of Life Sciences</a></li>
                <li><a href="../staff/trainProg.php">Department of Water - Environment - Oceanography</a></li>
              </ul>
            </div>
          </div>
         </div>
         <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
            <div class="accordion-content">
              <ul>
                <li><a href="../staff/trainProg.php">Department of Space and Applications</a></li>
                <li><a href="../staff/trainProg.php">Department of Energy</a></li>
                <li><a href="../staff/trainProg.php">Department of Information and Communication Technology</a></li>
                <li><a href="../staff/trainProg.php">Department of Life Sciences</a></li>
                <li><a href="../staff/trainProg.php">Department of Water - Environment - Oceanography</a></li>
              </ul>
            </div>
          </div>
         </div>
         <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
            <div class="accordion-content">
              <ul>
                <li><a href="../staff/trainProg.php">Department of Space and Applications</a></li>
                <li><a href="../staff/trainProg.php">Department of Energy</a></li>
                <li><a href="../staff/trainProg.php">Department of Information and Communication Technology</a></li>
                <li><a href="../staff/trainProg.php">Department of Life Sciences</a></li>
                <li><a href="../staff/trainProg.php">Department of Water - Environment - Oceanography</a></li>
              </ul>
            </div>
          </div>
         </div>
         <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
            <div class="accordion-content">
              <ul>
                <li><a href="../staff/trainProg.php">Department of Space and Applications</a></li>
                <li><a href="../staff/trainProg.php">Department of Energy</a></li>
                <li><a href="../staff/trainProg.php">Department of Information and Communication Technology</a></li>
                <li><a href="../staff/trainProg.php">Department of Life Sciences</a></li>
                <li><a href="../staff/trainProg.php">Department of Water - Environment - Oceanography</a></li>
              </ul>
            </div>
          </div>
         </div>
         <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
            <div class="accordion-content">
              <ul>
                <li><a href="../staff/trainProg.php">Department of Space and Applications</a></li>
                <li><a href="../staff/trainProg.php">Department of Energy</a></li>
                <li><a href="../staff/trainProg.php">Department of Information and Communication Technology</a></li>
                <li><a href="../staff/trainProg.php">Department of Life Sciences</a></li>
                <li><a href="../staff/trainProg.php">Department of Water - Environment - Oceanography</a></li>
              </ul>
            </div>
          </div>
         </div>
         <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
            <div class="accordion-content">
              <ul>
                <li><a href="../staff/trainProg.php">Department of Space and Applications</a></li>
                <li><a href="../staff/trainProg.php">Department of Energy</a></li>
                <li><a href="../staff/trainProg.php">Department of Information and Communication Technology</a></li>
                <li><a href="../staff/trainProg.php">Department of Life Sciences</a></li>
                <li><a href="../staff/trainProg.php">Department of Water - Environment - Oceanography</a></li>
              </ul>
            </div>
          </div>
         </div>
         <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
            <div class="accordion-content">
              <ul>
                <li><a href="../staff/trainProg.php">Department of Space and Applications</a></li>
                <li><a href="../staff/trainProg.php">Department of Energy</a></li>
                <li><a href="../staff/trainProg.php">Department of Information and Communication Technology</a></li>
                <li><a href="../staff/trainProg.php">Department of Life Sciences</a></li>
                <li><a href="../staff/trainProg.php">Department of Water - Environment - Oceanography</a></li>
              </ul>
            </div>
          </div>
         </div>
         <div class="accordion">
          <div class="accordion-item">
            <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
            <div class="accordion-content">
              <ul>
                <li><a href="../staff/trainProg.php">Department of Space and Applications</a></li>
                <li><a href="../staff/trainProg.php">Department of Energy</a></li>
                <li><a href="../staff/trainProg.php">Department of Information and Communication Technology</a></li>
                <li><a href="../staff/trainProg.php">Department of Life Sciences</a></li>
                <li><a href="../staff/trainProg.php">Department of Water - Environment - Oceanography</a></li>
              </ul>
            </div>
          </div>
         </div>
      </div>
      

       <script>
        function toggleAccordion(btn) {
          let content = btn.nextElementSibling; 
          if (content.style.maxHeight) {
            content.style.maxHeight = null; 
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          }
        }
       </script>

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