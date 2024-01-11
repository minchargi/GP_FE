<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>Teacher List</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../staff/departments.css">
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
  <!-- Main content -->
  <h1>Teacher List</h1>
  <div class="container mt-4">
    <div class="btn-container">
      <button class="custom-button" data-bs-toggle="modal" data-bs-target="#departM">
        <span class="button-content gap-4">
          Add
        </span>
      </button>
      <button class="custom-button" data-bs-toggle="modal" data-bs-target="#importM">
        <span class="button-content gap-4">
          Import
        </span>
      </button>
    </div>
  </div>
  <!-- Add Teacher List Modal-->
  <div class="modal fade" id="departM" tabindex="-1" role="dialog" aria-labelledby="departMLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="departMLabel">Add Teacher</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form for adding new teacher -->
          <form id="departForm" action="staff_function/add_teacher.php" method="post">
            <div class="form-group">
              <label for="teacherDept">Department:</label>
              <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <div class="form-group">
              <label for="teacherDept">Teacher ID:</label>
              <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
              <label for="teacherName">First Name:</label>
              <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
              <label for="teacherName">Last Name:</label>
              <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
              <label for="teacherDOB">Date of birth:</label>
              <input type="date" class="form-control" id="teacherDOB" name="teacherDOB" required>
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
              <label for="phoneNumber">Phone number:</label>
              <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
              <label for="teacherEmail">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <button type="submit" class="btn btn-custom" name="submit">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Import List Modal-->
  <div class="modal fade" id="importM" tabindex="-1" role="dialog" aria-labelledby="importMLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="importMLabel">Import List</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form for adding new teacher -->
          <form id="departForm" action="add_teacher.php" method="post">
            <div class="form-group">
                <label for="fileImport">Choose File:</label>
                <input type="file" class="form-control" id="fileImport" name="fileImport" required>
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
                <th class="td-head" scope="col">Student ID</th>
                    <th class="td-head" scope="col">Year</th>
                    <th class="td-head" scope="col">First Name</th>
                    <th class="td-head" scope="col">Last Name</th>
                    <th class="td-head" scope="col">Date of birth</th>
                    <th class="td-head" scope="col">Gender</th>
                    <th class="td-head" scope="col">Email</th>
                    <th class="td-head" scope="col">Phone Number</th>
                    <th class="td-head" scope="col">Department</th>
                </tr>
      </thead>
      <tbody>
      <?php
            include 'staff_function/staff_function.php';
            $result = fetch_teacher();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['User_ID']; ?></td>
                    <td><?php echo $row['Year_Start']; ?></td>
                    <td><?php echo $row['FirstName']; ?></td>
                    <td><?php echo $row['LastName']; ?></td>
                    <td><?php echo $row['DoB']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Phone']; ?></td>
                    <td><?php echo $row['Department']; ?></td>
                    <td><a class="btn btn-info" href="staff_function/edit_button.php?id=<?php echo $row['User_ID']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="staff_function/delete_button.php?id=<?php echo $row['User_ID']; ?>">Delete</a></td>
                    </tr>                       

        <?php       }

            }

        ?>   
      </tbody>
    </table>
  </div>

  <div class="container">
    <nav class="list-pagination">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="pre-item page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="../staff/department.php">1</a></li>
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