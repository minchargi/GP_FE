<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Overview</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/courseOverview.css">
        <script src="courseOverview.js"></script>
        <link rel="stylesheet" href="../staff/navbar2.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/staffnav.php'; ?>

      <ul class="nav">
        <li><a href="../staff/courseAnnounce.php">Announcement</a></li>
        <li class="active"><a href="../staff/courseOverview.php">Overview</a></li>
        <li><a href="../staff/gradesDetail.php">Grade</a></li>
        <li><a href="../staff/attend.php">Attendance</a></li>
        <li><a href="../staff/enroll.php">Enrollment</a></li>
      </ul>

        <!-- Main content -->
        <h1>Course Name</h1>

        <div class="container mt-4 course-detail">
            <dl>
                <dt>Number of lectures: 10
                </dt>
            </dl>

            <div class="container mt-2">
                <table class="table table-bordered">
                    <thead>
                        <tr class="tb-row">
                        <th class="td-head" scope="col">Attendance</th>
                        <th class="td-head" scope="col">Exercies</th>
                        <th class="td-head" scope="col">Practice</th>
                        <th class="td-head" scope="col">Project work</th>
                        <th class="td-head" scope="col">Final Exam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-row">
                        <td class="td-custom">10% </td>
                        <td class="td-custom">30%</td>
                        <td class="td-custom">0%</td>
                        <td class="td-custom">0%</td>
                        <td class="td-custom">60%</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <dl>
                <dt>Attendance
                    <dd>Attendance will be checked for every labwork</dd>
                    <dd>Students should remind the lecturers to check attendance if they forget it.</dd>
                    <button class="btn-custom" onclick="checkAttendance()">Check Attendance</button>
                </dt>
            </dl>
            <ul class="sub">After a labwork session, you have 7 days to complete the exercises 
                <li>Write a report of at least 2 pages to describe your work (figure and table), discussion, and analysis of lab work. </li>
                <li> Submit in PDF format to Google Classroom (link above) </li>
                <li><b>Source code is optional</b> in the report</li>
            </ul>
            <p class="head"><b>Student Score Chart </b></p>
            <canvas id="gradesChart" width="400" height="200"></canvas>
        </div>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>
    </body>
</html>