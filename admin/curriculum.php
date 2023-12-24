<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../admin/curriculum.css">
    <link rel="stylesheet" href="../admin/navbar.css">
    <link rel="stylesheet" href="../admin/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="../admin/manageStaff.js"></script>
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
                  <a class="nav-link" href="../Teacher/announcement.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/manageAccount.php"><i class="fas fa-users-cog"></i> Account</a>
                  </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-graduation-cap"></i> Academic
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="../admin/curriculumList.php">Curriculum</a></li>
                    </ul>
                </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog"></i> System
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="../admin/systemSetting.php">System Settings</a></li>
                      <li><a class="dropdown-item" href="../admin/security.php">System Security</a></li>
                      <li><a class="dropdown-item" href="../admin/upgradeMaintance.php">Upgrade & Maintance</a></li>
                      <div class="dropdown-divider"></div>
                      <li><a class="dropdown-item" href="../admin/integrations.php">System Integrations</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../admin/manageStaff.php"><i class="fas fa-clipboard-user"></i> Staff</a>
                  </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../admin/admin_profile.php">Account</a></li>
                    <li><a class="dropdown-item" href="../sign-in/logout.php">Logout</a></li>
                  </ul>
                </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
  </header>
    <div class="container mt-4">
        <p class="header-text">Curriculum</p>
        <div class="button-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#createClassModal">
                <span class="button-content gap-4">
                    <i class="fas fa-plus-circle"></i>
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
                    <form id="createClassForm" action="create_class.php" method=post>
                        <div class="form-group">
                            <label for="classCode">Class Code:</label>
                            <input type="text" class="form-control" id="classCode" name="classCode" required>
                        </div>                        
                        <div class="form-group">
                            <label for="className">Class Name:</label>
                            <input type="text" class="form-control" id="className" name="className" required>
                        </div>
                        <div class="form-group">
                            <label for="tprogram">Training program:</label>
                            <input type="text" class="form-control" id="tprogram" name="tprogram" required>
                        </div>
                        <div class="form-group">
                            <label for="optional">Optional:</label>
                            <input type="hidden" name="optional" value="0">
                            <input type="checkbox" name="optional" value="1">
                        </div>

                        <button type="submit" class="btn btn-custom" name="submit">Create Class</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="td-head">Course Code</th>
                <th class="td-head">Course Title</th>
                <th class="td-head">Credit Points</th>
                <th class="td-head">Semester</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="td-custom"><b>MATH 2.1</b></td>
                <td class="td-custom"> Probabilities & Statistic</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>ICT 2.1</b></td>
                <td class="td-custom">Algorithms and Data Structures</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>MATH 2.1</b></td>
                <td class="td-custom"> Probabilities & Statistic</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>ICT 2.1</b></td>
                <td class="td-custom">Algorithms and Data Structures</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>MATH 2.1</b></td>
                <td class="td-custom"> Probabilities & Statistic</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>ICT 2.1</b></td>
                <td class="td-custom">Algorithms and Data Structures</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>MATH 2.1</b></td>
                <td class="td-custom"> Probabilities & Statistic</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>ICT 2.1</b></td>
                <td class="td-custom">Algorithms and Data Structures</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>MATH 2.1</b></td>
                <td class="td-custom"> Probabilities & Statistic</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>ICT 2.1</b></td>
                <td class="td-custom">Algorithms and Data Structures</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>MATH 2.1</b></td>
                <td class="td-custom"> Probabilities & Statistic</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>ICT 2.1</b></td>
                <td class="td-custom">Algorithms and Data Structures</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>MATH 2.1</b></td>
                <td class="td-custom"> Probabilities & Statistic</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            <tr>
                <td class="td-custom"><b>ICT 2.1</b></td>
                <td class="td-custom">Algorithms and Data Structures</td>
                <td class="th-custom">4</td>
                <td class="th-custom">1</td>
            </tr>
            
            
            
            </tbody>
        </table>
    </div>
    <div class="modal" id="addCurriculumModal">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Curriculum</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
    
                <!-- Modal Body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="courseCode">Course Code:</label>
                            <input type="text" class="form-control" id="courseCode">
                        </div>
                        <div class="form-group">
                            <label for="courseTitle">Course Title:</label>
                            <input type="text" class="form-control" id="courseTitle">
                        </div>
                        <div class="form-group">
                            <label for="creditHours">Credit Hours:</label>
                            <input type="text" class="form-control" id="creditHours">
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester:</label>
                            <input type="text" class="form-control" id="semester">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
    
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
    
            </div>
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