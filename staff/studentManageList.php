<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Student Training Program</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/studentManageList.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/staffnav.php'; ?>

        <!-- Main content -->
        <div class="container mt-4">
          <p class="header-text">Manage Student</p>
          <div class="btn-container">
              <button class="custom-button" data-bs-toggle="modal" data-bs-target="#addStudentsModal">
                  <span class="button-content gap-4">
                      Add
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
                      <form id="addStudentsForm">
                          <div class="form-group">
                              <label for="studentInfo">Student's ID:</label>
                              <input type="text" class="form-control" id="studentInfo" required>
                          </div>
                          <div class="form-group">
                              <label for="studentInfo">Student's Name:</label>
                              <input type="text" class="form-control" id="studentInfo" required>
                          </div>
                          <div class="form-group">
                              <label for="studentInfo">Student's DOB:</label>
                              <input type="text" class="form-control" id="studentInfo" required>
                          </div>
                          <div class="form-group">
                              <label for="studentInfo">Student's Phone Number:</label>
                              <input type="text" class="form-control" id="studentInfo" required>
                          </div>
                          <div class="form-group">
                              <label for="studentInfo">Student's Class:</label>
                              <input type="text" class="form-control" id="studentInfo" required>
                          </div>
                          <div class="form-group">
                              <label for="studentInfo">Student's Major:</label>
                              <input type="text" class="form-control" id="studentInfo" required>
                          </div>
                          <button type="button" class="btn btn-custom" onclick="addStudent()">Add</button>
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

      <div class="container">
        <nav class="list-pagination">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled"><a class="pre-item page-link" href="#">Previous</a></li>
              <li class="page-item active"><a class="page-link" href="../staff/studentManageList.php">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="next-item page-link" href="#">Next</a></li>
            </ul>
          </nav>
      </div>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>



    </body>
</html>