<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Manange Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../admin/admin_account.css">
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
        <p class="header-text">Manage Admin</p>
        <div class="button-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#addAdminsModal">
                <span class="button-content gap-4">
                    Add 
                </span>
            </button>
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#importListsModal">
                <span class="button-content gap-4">
                    Import
                </span>
            </button>
        </div>
    </div>

    <!-- Update Admin Modal -->
    <div class="modal fade" id="addAdminsModal" tabindex="-1" role="dialog" aria-labelledby="addAdminsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAdminsModalLabel">Add Admin</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addAdminsForm" action="add_admin.php" method="post">
                        <!-- Form for add Admin -->
                        <div class="form-group">
                            <label for="studentID">Admin ID:</label>
                            <input type="text" class="form-control" id="id" name="id" required>
                        </div>
                        <div class="form-group">
                            <label for="studentID">Admin Name:</label>
                            <input type="text" class="form-control" id="id" name="id" required>
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

    <!-- Table to display admin information -->
    <div class="container mt-4">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="tb-row">
                    <th class="td-head" scope="col">ID</th>
                    <th class="td-head" scope="col">Name</th>
                    <th class="td-head" scope="col">Email</th>
                    <th class="td-head" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tb-row">
                    <td class="th-custom" scope="row">1</td>
                    <td class="td-custom">Nguyen Van A</td>
                    <td class="td-custom">aaaaaaa@gmail.com</td>
                    <td class="td-custom">
                        <button type="button" class="btn btn-info-cus btn-sm" data-toggle="modal" data-target="#updateGradesModal">
                            <i class="fa-regular fa-pen-to-square"></i>
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger-cus btn-sm" onclick="deleteAdmin()">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="tb-row">
                    <td class="th-custom" scope="row">1</td>
                    <td class="td-custom">Nguyen Van A</td>
                    <td class="td-custom">aaaaaaa@gmail.com</td>
                    <td class="td-custom">
                        <button type="button" class="btn btn-info-cus btn-sm" data-toggle="modal" data-target="#updateGradesModal">
                            <i class="fa-regular fa-pen-to-square"></i>
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger-cus btn-sm" onclick="deleteAdmin()">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="tb-row">
                    <td class="th-custom" scope="row">1</td>
                    <td class="td-custom">Nguyen Van A</td>
                    <td class="td-custom">aaaaaaa@gmail.com</td>
                    <td class="td-custom">
                        <button type="button" class="btn btn-info-cus btn-sm" data-toggle="modal" data-target="#updateGradesModal">
                            <i class="fa-regular fa-pen-to-square"></i>
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger-cus btn-sm" onclick="deleteAdmin()">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="tb-row">
                    <td class="th-custom" scope="row">1</td>
                    <td class="td-custom">Nguyen Van A</td>
                    <td class="td-custom">aaaaaaa@gmail.com</td>
                    <td class="td-custom">
                        <button type="button" class="btn btn-info-cus btn-sm" data-toggle="modal" data-target="#updateGradesModal">
                            <i class="fa-regular fa-pen-to-square"></i>
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger-cus btn-sm" onclick="deleteAdmin()">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="tb-row">
                    <td class="th-custom" scope="row">1</td>
                    <td class="td-custom">Nguyen Van A</td>
                    <td class="td-custom">aaaaaaa@gmail.com</td>
                    <td class="td-custom">
                        <button type="button" class="btn btn-info-cus btn-sm" data-toggle="modal" data-target="#updateGradesModal">
                            <i class="fa-regular fa-pen-to-square"></i>
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger-cus btn-sm" onclick="deleteAdmin()">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="tb-row">
                    <td class="th-custom" scope="row">1</td>
                    <td class="td-custom">Nguyen Van A</td>
                    <td class="td-custom">aaaaaaa@gmail.com</td>
                    <td class="td-custom">
                        <button type="button" class="btn btn-info-cus btn-sm" data-toggle="modal" data-target="#updateGradesModal">
                            <i class="fa-regular fa-pen-to-square"></i>
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger-cus btn-sm" onclick="deleteAdmin()">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="tb-row">
                    <td class="th-custom" scope="row">1</td>
                    <td class="td-custom">Nguyen Van A</td>
                    <td class="td-custom">aaaaaaa@gmail.com</td>
                    <td class="td-custom">
                        <button type="button" class="btn btn-info-cus btn-sm" data-toggle="modal" data-target="#updateGradesModal">
                            <i class="fa-regular fa-pen-to-square"></i>
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger-cus btn-sm" onclick="deleteAdmin()">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="tb-row">
                    <td class="th-custom" scope="row">1</td>
                    <td class="td-custom">Nguyen Van A</td>
                    <td class="td-custom">aaaaaaa@gmail.com</td>
                    <td class="td-custom">
                        <button type="button" class="btn btn-info-cus btn-sm" data-toggle="modal" data-target="#updateGradesModal">
                            <i class="fa-regular fa-pen-to-square"></i>
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger-cus btn-sm" onclick="deleteAdmin()">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="tb-row">
                    <td class="th-custom" scope="row">1</td>
                    <td class="td-custom">Nguyen Van A</td>
                    <td class="td-custom">aaaaaaa@gmail.com</td>
                    <td class="td-custom">
                        <button type="button" class="btn btn-info-cus btn-sm" data-toggle="modal" data-target="#updateGradesModal">
                            <i class="fa-regular fa-pen-to-square"></i>
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger-cus btn-sm" onclick="deleteAdmin()">
                            <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </button>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>

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