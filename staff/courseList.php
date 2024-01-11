<?php
include 'staff_function/staff_function.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../staff/courseList.css">
    <link rel="stylesheet" href="../staff/navbar.css">
    <link rel="stylesheet" href="../staff/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="course.js"></script>

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
                  <a class="nav-link" href="../staff/courseOverview.php"><i class="fa-solid fa-book"></i> Courses</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="../staff/studentList.php"><i class="fa-solid fa-user-group"></i> Students</a></li>
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

    </div>
    <div class="container mt-4">
        <p class="header_text">Courses</p>
        <div class="button-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#createClassModal">
                <span class="button-content gap-4">
                    Create Course
                </span>
            </button>
        </div>
    </div>
    
    <!-- Create Class Modal -->
    <div class="modal fade" id="createClassModal" tabindex="-1" role="dialog" aria-labelledby="createClassModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createClassModalLabel">Create Class</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for creating a class -->
                    <form id="createClassForm" action="staff_function/add_course.php" method=post>
                        <div class="form-group">
                            <label for="classCode">Course Id:</label>
                            <input type="text" class="form-control" id="course_id" name="course_id" required>
                        </div>                        
                        <div class="form-group">
                            <label for="className">Course Name:</label>
                            <input type="text" class="form-control" id="course_name" name="course_name" required>
                        </div>
                        <div class="form-group">
                            <label for="tprogram">Training program:</label>
                            <input type="text" class="form-control" id="tprogram_id" name="tprogram_id" required>
                        </div>
                        <div class="form-group">
                            <label for="optional">Optional:</label>
                            <input type="hidden" name="optional" value="0">
                            <input type="checkbox" name="optional" value="1">
                        </div>

                        <button type="submit" class="btn btn-custom" name="submit">Create Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
   <div class="container mt-4">
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
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