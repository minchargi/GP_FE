<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Students</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/footer.css">
        <link rel="stylesheet" href="../staff/navbar.css">
        <link rel="stylesheet" href="../staff/students.css">
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
                  <a class="nav-link" href="../staff/grades.php">Grades</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="../staff/courses.php">Courses</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="../staff/students.php">Students</a></li>
                  <li class="nav-item">
                    <a class="nav-link" href="../staff/departments.php">Departments</a></li>
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
      <h1>Students</h1>

      <div class="container mt-4">
        <div class="btn-container">
          <button class="custom-button" data-bs-toggle="modal" data-bs-target="#editAttend">
            <span class="button-content gap-4">
                Add
            </span>
        </button>
        </div>
      </div>

      <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
       </div>
       <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header" onclick="toggleAccordion(this)"><b>2021-2024</b></button>
          <div class="accordion-content">
            <ul>
              <li><a href="../staff/studentList.php">Second Year</a></li>
              <li><a href="../staff/studentList.php">Third Year</a></li>
            </ul>
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