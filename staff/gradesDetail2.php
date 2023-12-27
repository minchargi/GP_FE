<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Grade Detail</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../staff/gradesDetail.css">
        <link rel="stylesheet" href="../staff/navbar2.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/staffnav.php'; ?>

        <ul class="nav">
        <li><a href="../staff/courseAnnounce.php">Announcement</a></li>
        <li><a href="../staff/courseOverview.php">Overview</a></li>
        <li class="active"><a href="../staff/gradesDetail.php">Grade</a></li>
        <li><a href="../staff/attend.php">Attendance</a></li>
        <li><a href="../staff/enroll.php">Enrollment</a></li>
      </ul>

        <!-- Main content -->
        <h1>Course Name</h1>
        <div class="container mt-4">
          <div class="btn-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#editGrade">
              <span class="button-content gap-4">
                  Edit
              </span>
          </button>
          </div>
        </div>
        <div class="container mt-2">
            <table class="table table-bordered table-hover">
                <thead>
                  <tr class="tb-row">
                    <th class="td-head" scope="col">Major</th>
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
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  <tr class="tb-row">
                    <th class="th-custom" scope="row">ICT </th>
                    <td class="td-custom">BI12-001</td>
                    <td class="td-custom">Nguyễn Văn A</td>
                    <td class="td-custom">20.0</td>
                    <td class="td-custom">15.0</td>
                    <td class="td-custom">16.0</td>
                    <td class="td-custom">16.0</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>

        <div class="container">
          <nav class="list-pagination">
              <ul class="pagination justify-content-center">
                <li class="page-item"><a class="pre-item page-link" href="../staff/gradesDetail.php">Previous</a></li>
                <li class="page-item"><a class="page-link" href="../staff/gradesDetail.php">1</a></li>
                <li class="page-item active"><a class="page-link" href="../staff/gradesDetail2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="../staff/gradesDetail3.php">3</a></li>
                <li class="page-item"><a class="next-item page-link" href="../staff/gradesDetail3.php">Next</a></li>
              </ul>
          </nav>
        </div>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>



    </body>
</html>