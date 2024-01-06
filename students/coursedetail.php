<?php 
  include 'verifyStudent.php';
  include 'student_function.php';
  if (!isset($_GET['id'])){
    header('Location: course-overview.php');
  };
  $course_id = $_GET['id'];
  $year = 2024;
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>Course Details</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../students/coursedetail.css">
  <link rel="stylesheet" href="../students/navbar.css">
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <!-- Navbar-->
  <?php include '../navbar/navbar.php'; ?>

  <ul class="nav">
    <li><a href="announceCourse.php?id=<?php echo $course_id; ?>">Announcement</a></li>
    <li class="active"><a href="coursedetail.php?id=<?php echo $course_id; ?>">Overview</a></li>
    <li><a href="course-grades.php?id=<?php echo $course_id; ?>">Grades</a></li>
    <li><a href="attendance.php?id=<?php echo $course_id; ?>">Attendance</a></li>
  </ul>
    <?php 
        $result = fetch_course_overview($course_id);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        }
    ?>
  <h1><?php echo $row['Course_Name']; ?></h1>
      <div class="container mt-4 course-detail">
          <dl>
              <dt>Info
                  <dd><?php echo $row['Course_Info']; ?></dd>
              </dt>
          </dl>
      
          <div class="container mt-2">
              <table class="table table-bordered">
                  <thead>
                      <tr class="tb-row">
                      <th class="td-head" scope="col">Credit</th>
                      <th class="td-head" scope="col">Lecture</th>
                      <th class="td-head" scope="col">Tutorial</th>
                      <th class="td-head" scope="col">Practical</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="tb-row">
                      <td class="td-custom"><?php echo $row['Number_credit']; ?></td>
                      <td class="td-custom"><?php echo $row['Number_lecture']; ?></td>
                      <td class="td-custom"><?php echo $row['Number_tutorial']; ?></td>
                      <td class="td-custom"><?php echo $row['Number_practical']; ?></td>
                      </tr>

                  </tbody>
              </table>
          </div>

          <div class="container mt-2">
              <table class="table table-bordered">
                  <thead>
                      <tr class="tb-row">
                      <th class="td-head" scope="col">Attendance</th>
                      <th class="td-head" scope="col">Midterm Exam</th>
                      <th class="td-head" scope="col">Final Exam</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="tb-row">
                      <td class="td-custom"><?php echo $row['Attendance_Percentage']; ?></td>
                      <td class="td-custom"><?php echo $row['Midterm_Percentage']; ?></td>
                      <td class="td-custom"><?php echo $row['Final_Percentage']; ?></td>
                      </tr>

                  </tbody>
              </table>
          </div>

          <dl>
              <dt>Attendance
                  <dd>Attendance will be checked for every labwork</dd>
                  <dd>Students should remind the lecturers to check attendance if they forget it.</dd>
                    <?php 
                    $result = fetch_attendance_status($course_id,2024);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                    }
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $result2 = fetch_attendance($user_id,$course_id,2024,$row['Session']);
                    if ($result2->num_rows >0) {
                        $row2 = $result2->fetch_assoc();
                        $already = $row2['Attendance'];
                        echo $already;
                    }
                    if ($already == 1){
                        $text = "Checked";
                    }else if (strtotime($row['Time_close']) > time()){
                        $text = "Check attendance";
                    } else {
                        $text = "Late";
                    }
                    ?>

                        <form id="check_attend" action="check_attend.php" method="POST">
                            <input type="hidden" id="student_id" name="student_id" value=<?php echo $user_id ?>>
                            <input type="hidden" id="course_id" name="course_id" value=<?php echo $course_id ?>>
                            <input type="hidden" id="year" name="year" value=<?php echo $year ?>>
                            <input type="hidden" id="session" name="session" value=<?php echo $row['Session'] ?>>
                            <input type="hidden" id="time_close" name="time_close" value=<?php echo strtotime($row['Time_close']) ?>>
                        </form>
                        <button class="btn-custom" onclick="check_attend()"><?php echo $text?></button>
                  
              </dt>
          </dl>
          <ul class="sub">After a labwork session, you have 7 days to complete the exercises 
              <li>Write a report of at least 2 pages to describe your work (figure and table), discussion, and analysis of lab work. </li>
              <li> Submit in PDF format to Google Classroom (link above) </li>
              <li><b>Source code is optional</b> in the report</li>
          </ul>
      </div>
      <script src="check_attend.js"></script>
  

  <!-- Footer -->
  <?php include '../footer/footer.php'; ?>

</body>

</html>