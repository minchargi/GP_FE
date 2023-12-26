<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Attendance</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../students/style.css">
        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/navbar.php'; ?>

        <ul class="nav">
          <li><a href="../students/announceCourse.php">Announcement</a></li>
          <li><a href="../students/coursedetail.php">Overview</a></li>
          <li><a href="../students/course-grades.php">Grades</a></li>
          <li class="active"><a href="../students/attendance.php">Attendance</a></li>
        </ul>

        <h1>Attendance</h1>
        <div class="container mt-2">
          <table class="table table-bordered">
              <thead>
                <tr class="tb-row">
                  <th class="td-head" scope="col">Student ID</th>
                  <th class="td-head" scope="col">Name</th>
                  <th class="td-head" scope="col">1</th>
                  <th class="td-head" scope="col">2 </th>
                  <th class="td-head" scope="col">3 </th>
                  <th class="td-head" scope="col">4 </th>
                  <th class="td-head" scope="col">5 </th>
                  <th class="td-head" scope="col">6 </th>
                  <th class="td-head" scope="col">7 </th>
                  <th class="td-head" scope="col">8 </th>
                  <th class="td-head" scope="col">9 </th>
                  <th class="td-head" scope="col">10 </th>
                  <th class="td-head" scope="col">11 </th>
                  <th class="td-head" scope="col">12 </th>
                  <th class="td-head" scope="col">13</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tb-row">
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">1</td>
                  <td class="td-custom">1</td>
                  <td class="td-custom">1</td>
                  <td class="td-custom">0</td>
                  <td class="td-custom">1</td>
                  <td class="td-custom">1</td>
                  <td class="td-custom">0</td>
                  <td class="td-custom">1</td>
                  <td class="td-custom">1</td>
                  <td class="td-custom">0</td>
                  <td class="td-custom">1</td>
                  <td class="td-custom">1</td>
                  <td class="td-custom">0</td>
                </tr>

              </tbody>
            </table>
      </div>

         <!-- Footer -->
        <?php include '../footer/footer.php'; ?>

      </div>
    </body>
</html>