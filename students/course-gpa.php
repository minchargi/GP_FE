<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>GPA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../students/style.css">
        <link rel="stylesheet" href="../students/navbar.css">
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
              <li class="nav-item">
                <a class="nav-link" href="../students/course-overview.php"> 
                  <i class="fas fa-book"></i> Course
                </a>
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
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-question-circle"></i> </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-user-circle"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../students/account.php">Account</a></li>
                  <li><a class="dropdown-item" href="../sign-in/logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

        <ul class="nav">
          <li><a href="../students/course-grades.php">Grades</a></li>
          <li><a href="../students/attendance.php">Attendance</a></li>
          <li class="active"><a href="../students/course-grades-gpa.php">GPA</a></li>
        </ul>

        <h1>GPA</h1>
        <div class="container mt-2">
          <table class="table table-bordered table-hover">
              <thead>
                <tr class="tb-row">
                  <th class="td-head" scope="col">Course ID</th>
                  <th class="td-head" scope="col">Course Name</th>
                  <th class="td-head" scope="col">Credits</th>
                  <th class="td-head" scope="col">Attendance</th>
                  <th class="td-head" scope="col">Midterm </th>
                  <th class="td-head" scope="col">Final </th>
                  <th class="td-head" scope="col">Total </th>
                </tr>
              </thead>
              <tbody>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">ICT3.001 </th>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">ICT3.001 </th>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">ICT3.001 </th>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">ICT3.001 </th>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">ICT3.001 </th>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">ICT3.001 </th>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">ICT3.001 </th>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">ICT3.001 </th>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">ICT3.001 </th>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">ICT3.001 </th>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">ICT3.001 </th>
                  <td class="td-custom">Introduction to Cryptography</td>
                  <td class="td-custom">4</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row"> </th>
                  <td class="td-custom"></td>
                  <td class="td-custom"></td>
                  <td class="td-custom"></td>
                  <td class="td-custom"></td>
                  <td class="td-custom"></td>
                  <td class="td-custom">16.0</td>
                </tr>
                
              </tbody>
            </table>
      </div>

         <!-- Footer -->
         <div class="container-fluid mt-2">
            <footer>
                <div class="row">
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
    
                    
                  </div>
              </footer>
          </div>
    </body>
</html>