<?php
  include "verifyTeacher.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Teacher/studentList.css">
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
        <li><a href="../Teacher/courseAnnounce.php">Announcement</a></li>
        <li><a href="../Teacher/coursedetail.php">Overview</a></li>
        <li class="active"><a href="../Teacher/studentList.php">Student List</a></li>
        <li><a href="../Teacher/grades.php">Grades</a></li>
        <li><a href="../Teacher/attendance.php">Attendance</a></li>
      </ul>
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
    
    <!-- Footer -->
    <?php include '../footer/footer.php'; ?>

</body>
</html>