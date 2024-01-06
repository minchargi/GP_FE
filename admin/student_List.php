
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../admin/student_List.css">
    <link rel="stylesheet" href="../admin/navbar.css">
    <link rel="stylesheet" href="../admin/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
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
    <div class="container mt-4">
        <p class="header-text">Manage Student</p>
        <div class="button-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#addTeachersModal">
                <span class="button-content gap-4">
                    <i class="fas fa-plus-circle"></i>
                    Add Student
                </span>
            </button>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#importListsModal">
                <span class="button-content gap-4">
                    Import
                </span>
            </button>
        </div>
    </div>

    <!-- Update Student Modal -->
    <div class="modal fade" id="addStudentsModal" tabindex="-1" role="dialog" aria-labelledby="addStudentsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addStudentsModalLabel">Create Student</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for add Student -->
                    <form id="addStudentsForm" action="admin_function/add_student.php" method="post">
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
    <!-- Import Lists Modal -->
    <div class="modal fade" id="importListsModal" tabindex="-1" role="dialog" aria-labelledby="importListsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importListsModalLabel">Import Lists</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for importing lists -->
                    <form id="importListsForm">
                        <div class="form-group">
                            <label for="fileInput">Import Lists:</label>
                            <input type="file" class="form-control" id="fileInput" required>
                        </div>
                        <button type="button" class="btn btn-custom" onclick="importLists()">Import</button>
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
                    <th class="td-head" scope="col">Date of birth</th>
                    <th class="td-head" scope="col">Phone Number</th>
                    <th class="td-head" scope="col">Class</th>
                    <th class="td-head" scope="col">Major</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>
                <tr class="tb-row">
                    <th class="th-custom" scope="row">BI12-001 </th>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">01/01/2003</td>
                    <td class="td-custom">0999999999</td>
                    <td class="td-custom">02</td>
                    <td class="td-custom">ICT</td>
                </tr>



            </tbody>
        </table>
    </div>
    <div class="container mt-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination page-custom">
                <li class="page-item" style="padding-right: 10px;">
                    <a class="page-link custom-color" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item" style="padding-right: 10px;">
                    <a class="page-link custom-color" href="#">1</a>
                </li>
                <li class="page-item" style="padding-right: 10px;">
                    <a class="page-link custom-color" href="#">2</a>
                </li>
                <li class="page-item" style="padding-right: 10px;">
                    <a class="page-link custom-color" href="#">...</a>
                </li>
                <li class="page-item" style="padding-right: 10px;">
                    <a class="page-link custom-color" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link custom-color" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <!-- Footer -->
    <?php include '../footer/footer.php'; ?>

</body>

</html>