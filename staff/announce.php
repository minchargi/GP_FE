<!DOCTYPE html>
<html lang="en-US">
    <head>       
        <title>Announcements</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/announce.css">
        <link rel="stylesheet" href="../staff/navbar.css">
        <link rel="stylesheet" href="../staff/footer.css">
        <script scr="../staff/announce.js"></script>
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
        <div class="container mt-4">
            <p class="header-text">Announcements</p>
        </div>

        <div class="container mt-4">
        <div class="btn-container">
          <button class="custom-button" data-bs-toggle="modal" data-bs-target="#announceM">
            <span class="button-content gap-4">
                Add
            </span>
        </button>
        </div>
      </div>
      <!-- Add Announce Modal-->
        <div class="modal fade" id="announceM" tabindex="-1" role="dialog" aria-labelledby="announceMLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="announceMLabel">Add Announcements</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for adding new announce -->
                        <form id="announceForm" action="../staff/announceM.php" method="post">
                          <div class="form-group">
                            <label for="announceTitle">Title:</label>
                            <input type="text" class="form-control" id="announceTitle" required>
                          </div>
                          <div class="form-group">
                            <label for="editedContent">Add Content:</label>
                            <textarea class="form-control" id="editedContent" rows="4"></textarea>
                          </div>
                        </form>
                        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox1">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(1)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox2">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(2)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox3">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="deleteAnnouncement(3)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox4">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(4)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox1">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(1)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox5">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(5)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox6">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(6)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox7">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="deleteAnnouncement(7)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox8">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(8)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox9">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(9)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox10">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(10)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox11">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(11)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox12">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(1)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox13">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(12)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox14">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(13)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox15">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(14)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox16">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(15)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox17">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(16)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox18">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(17)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox1">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(18)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card announcement">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox19">
                            <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                            <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(19)"></i>
                        </div>
                    </div>
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