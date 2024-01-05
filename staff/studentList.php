<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>Student List</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../staff/studentList.css">
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
  <h1>Student List</h1>
  <div class="container mt-4">
    <div class="btn-container">
      <button class="custom-button" data-bs-toggle="modal" data-bs-target="#studentListM">
        <span class="button-content gap-4">
          Add
        </span>
      </button>
    </div>
  </div>
  <!-- Add Student List Modal-->
  <div class="modal fade" id="studentListM" tabindex="-1" role="dialog" aria-labelledby="studentListMLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="studentListMLabel">Add Student</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form for adding new student -->
          <form id="studentListForm" action="../staff/studentListM.php" method="post">
            <div class="form-group">
              <label for="studentMajor">Year Start:</label>
              <input type="text" class="form-control" id="year" name="year" required>
            </div>
            <div class="form-group">
              <label for="studentMajor">Training Program:</label>
              <input type="text" class="form-control" id="tprogram_id" name="tprogram_id" required>
            </div>
            <div class="form-group">
              <label for="studentID">Student ID:</label>
              <input type="text" class="form-control" id="studentID" name="studentID" required>
            </div>
            <div class="form-group">
              <label for="studentName">First Name:</label>
              <input type="text" class="form-control" id="studentName" name="firstname" required>
            </div>
            <div class="form-group">
              <label for="studentName">Last Name:</label>
              <input type="text" class="form-control" id="studentName" name="lastname" required>
            </div>
            <div class="form-group">
              <label for="studentDOB">Date of birth:</label>
              <input type="date" class="form-control" id="studentDOB" name="studentDOB" required>
            </div>
            <div class="form-group">
              <label for="studentSex">Gender:</label>
              <select class="form-control" id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="studentEmail">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="studentName">Phone:</label>
              <input type="text" class="form-control" id="phone" name="phone" required>
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
          <th class="td-head" scope="col">DOB</th>
          <th class="td-head" scope="col">Gender</th>
          <th class="td-head" scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
        <tr class="tb-row">
          <td class="td-custom">ICT</td>
          <td class="td-custom">BI12-001 </td>
          <td class="td-custom">Nguyễn Văn A </td>
          <td class="td-custom">01/01/2001</td>
          <td class="td-custom">Male</td>
          <td class="td-custom">anguyenvanbi12001@gmail.com</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="container">
    <nav class="list-pagination">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="pre-item page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="../staff/studentList.php">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="next-item page-link" href="#">Next</a></li>
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