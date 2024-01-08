<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Training Program</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../admin/student_trainingProgram.css">
        <link rel="stylesheet" href="../admin/navbar.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
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
                      <a class="nav-link" href="../admin/dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
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

        <!-- Main content -->
        <div class="container mt-4">
            <p class="header-text">Training Program</p>
        </div>

        <div class="container mt-4">
            <div class="btn-container">
              <button class="custom-button" data-bs-toggle="modal" data-bs-target="#studentTrainM">
                <span class="button-content gap-4">
                    Add
                </span>
              </button>
              <button class="custom-button" data-bs-toggle="modal" data-bs-target="#importList">
                <span class="button-content gap-4">
                    Import
                </span>
              </button>
            </div>
    
            <!-- Add trainProg Modal-->
            <div class="modal fade" id="studentTrainM" tabindex="-1" role="dialog" aria-labelledby="studentTrainMLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="studentTrainMLabel">New Training Program</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form for adding new training program -->
                            <form id="studentTrainForm" action="../admin/studentTrainM.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="progName">Program Name:</label>
                                    <input type="text" class="form-control" id="progName" name="progName" required>
                                </div>
                                <div class="form-group">
                                    <label for="progID">Program ID:</label>
                                    <input type="text" class="form-control" id="progID" name="progID" required>
                                </div>
                                <div class="form-group">
                                    <label for="deptID">Department ID:</label>
                                    <input type="text" class="form-control" id="deptID" name="deptID" required>
                                </div>
    
                                <button type="submit" class="btn btn-custom" name="submit">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Import List Modal-->
            <div class="modal fade" id="importList" tabindex="-1" role="dialog" aria-labelledby="importListLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="imortListLabel">Import Student List</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form for adding new training program -->
                            <form id="importListForm" action="admin_function/import_account.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="fileImport">Choose File:</label>
                                    <input type="file" class="form-control" id="fileImport" name="fileImport" required>
                                </div>
    
                                <button type="submit" class="btn btn-custom" name="Import">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
          <div class="container mt-4">
            <div class="training">
                <div class=" major-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStudent1" aria-expanded="false" aria-controls="collapseStudent1">
                  Information and Communication Technology (ICT)
                </div>
                <div class="collapse" id="collapseStudent1">
                  <div class="card card-body course-card">
                    <ul class="trainMajor">
                      <li><a class="yearMajor" href="../admin/student_List.php">Second Year</a></li>
                      <li><a class="yearMajor" href="../admin/student_List.php">Third Year</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="training">
                <div class=" major-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStudent2" aria-expanded="false" aria-controls="collapseStudent2">
                  Cyber Security (CS)
                </div>
                <div class="collapse" id="collapseStudent2">
                  <div class="card card-body course-card">
                    <ul class="trainMajor">
                      <li><a class="yearMajor" href="../admin/student_List.php">Second Year</a></li>
                      <li><a class="yearMajor" href="../admin/student_List.php">Third Year</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="training">
                <div class=" major-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStudent3" aria-expanded="false" aria-controls="collapseStudent3">
                  Data Science (DS)
                </div>
                <div class="collapse" id="collapseStudent3">
                  <div class="card card-body course-card">
                    <ul class="trainMajor">
                      <li><a class="yearMajor" href="../admin/student_List.php">Second Year</a></li>
                      <li><a class="yearMajor" href="../admin/student_List.php">Third Year</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
    
        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>

    </body>
</html>