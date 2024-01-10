<?php 
    include 'teacher_function.php';
    include 'verifyTeacher.php';
    if (!isset($_GET['tp_id']) and !isset($_GET['year']) and !isset($_GET['ba_year'])) {
        header('Location: courseList.php');
    }
    $tp_id = $_GET['tp_id'];
    $year =  $_GET['year'];
    $ba_year = $_GET['ba_year'];
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
    <link rel="stylesheet" href="../Teacher/course.css">
    <link rel="stylesheet" href="../Teacher/navbar.css">
    <link rel="stylesheet" href="../Teacher/footer.css">
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

    </div>
    <div class="container mt-4">
        <p class="header_text">Courses</p>
        <div class="button-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#createClassModal">
                <span class="button-content gap-4">
                    <i class="fas fa-plus-circle"></i>
                    Create Class
                </span>
            </button>
        </div>
    </div>
    
    <!-- Create Class Modal -->
    <div class="modal fade" id="createClassModal" tabindex="-1" role="dialog" aria-labelledby="createClassModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createClassModalLabel">Create Course</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for creating a class -->
                    <form id="createClassForm" action="create_class.php" method=post>
                        <input type="hidden" id="tp_id" name="tp_id" value=<?php echo $tp_id ?>>
                        <input type="hidden" id="year" name="year" value=<?php echo $year ?>>
                        <input type="hidden" id="ba_year" name="ba_year" value=<?php echo $ba_year ?>>
                        
                        <div class="form-group">
                            <label for="courseCode">Course ID:</label>
                            <input type="text" class="form-control" id="courseCode" name="courseCode" required>
                        </div>                        
                        <div class="form-group">
                            <label for="courseName">Course Name:</label>
                            <input type="text" class="form-control" id="courseName" name="courseName" required>
                        </div>
                        <div class="form-group">
                            <label for="courseName">Training Program ID:</label>
                            <input type="text" class="form-control" id="courseName" name="tp_id" required>
                        </div>
                        <div class="form-group">
                            <label for="courseName">Bachelor Year:</label>
                            <input type="text" class="form-control" id="courseName" name="ba_year" required>
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
        <?php
        $result = fetch_course($user_id,$year,$ba_year,$tp_id);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
        <div class="courseDetail">
            <a class="link_course" href="../Teacher/coursedetail.php?id=<?php echo $row['Course_ID']; ?>&year=<?php echo $year;?>"><?php echo $row['Course_Name']; ?></a>
        </div>
        <?php
                }
            }
        ?>
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