<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Teacher/grades.css">
    <link rel="stylesheet" href="../Teacher/navbar.css">
    <link rel="stylesheet" href="../Teacher/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

</head>
<body>
      <!-- Navbar-->
      <?php include '../navbar/teachernav.php'; ?>

      <ul class="nav">
        <li><a href="../Teacher/courseAnnouncement.php">Announcement</a></li>
        <li><a href="../Teacher/coursedetail.php">Overview</a></li>
        <li><a href="../Teacher/studentList.php">Student List</a></li>
        <li class="active"><a href="../Teacher/grades.php">Grades</a></li>
        <li><a href="../Teacher/attendance.php">Attendance</a></li>
      </ul>
      <div class="container mt-4">
        <p class="header-text">Grade</p>
        <div class="button-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#updateGradesModal">
                <span class="button-content gap-4">
                    <i class="fas fa-plus-circle"></i>
                    Update Grade
                </span>
            </button>
        </div>
      </div>

  <!-- Update Grades Modal -->
      <div class="modal fade" id="updateGradesModal" tabindex="-1" role="dialog" aria-labelledby="updateGradesModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="updateGradesModalLabel">Update Grade</h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <!-- Form for updating grades -->
                      <form id="updateGradesForm">
                          <div class="form-group">
                              <label for="studentInfo">Name or ID of Student:</label>
                              <input type="text" class="form-control" id="studentInfo" required>
                          </div>
                          <div class="form-group">
                              <label for="gradeType">Select Grade Type:</label>
                              <select class="form-control" id="gradeType" required>
                                  <option value="attendance">Attendance</option>
                                  <option value="midterm">Midterm</option>
                                  <option value="final">Final</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="studentInfo">Grade:</label>
                            <input type="text" class="form-control" id="studentGrade" required>
                        </div>
                          <button type="button" class="btn btn-custom" onclick="updateGrades()">Update</button>
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
                  <th class="td-head" scope="col">Attendance</th>
                  <th class="td-head" scope="col">Midterm </th>
                  <th class="td-head" scope="col">Final </th>
                  <th class="td-head" scope="col">Total </th>
                </tr>
              </thead>
              <tbody>
                <tr class="tb-row">
                  <th class="th-custom" scope="row"> </th>
                  <td class="td-custom"> </td>
                  <td class="td-custom">10%</td>
                  <td class="td-custom">40%</td>
                  <td class="td-custom">50%</td>
                  <td class="td-custom">100%</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
                </tr>
                <tr class="tb-row">
                  <th class="th-custom" scope="row">BI12-001 </th>
                  <td class="td-custom">Nguyễn Văn A</td>
                  <td class="td-custom">20.0</td>
                  <td class="td-custom">15.0</td>
                  <td class="td-custom">16.0</td>
                  <td class="td-custom">16.0</td>
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