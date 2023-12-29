<?php 
  include 'verifyStudent.php';
  include 'student_function.php';
  if (!isset($_GET['id'])){
    header('Location: course-overview.php');
  };
  $course_id = $_GET['id'];
?>
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
        <link rel="stylesheet" href="../students/navbar.css">
        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/navbar.php'; ?>

        <ul class="nav">
          <li><a href="announceCourse.php?id=<?php echo $course_id; ?>">Announcement</a></li>
          <li><a href="coursedetail.php?id=<?php echo $course_id; ?>">Overview</a></li>
          <li><a href="course-grades.php?id=<?php echo $course_id; ?>">Grades</a></li>
          <li class="active"><a href="attendance.php?id=<?php echo $course_id; ?>">Attendance</a></li>
        </ul>
        <?php 
          $result = fetch_course_overview($course_id);
          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
          }
        ?>
        <h1>Attendance</h1>
        <div class="container mt-2">
          <table class="table table-bordered">
              <thead>
                <tr class="tb-row">
                  <th class="td-head" scope="col">Student ID</th>
                  <th class="td-head" scope="col">Name</th>
                  <?php
                    for ($i = 1;$i <= $row['Number_lecture'];$i++){
                  ?>          
                    <th class="td-head" scope="col"><?php echo $i?></th>
                  <?php
                    }
                  ?>
                </tr>
              </thead>
              <tbody>
                <tr class="tb-row">
                  <td class="td-custom"><?php echo $user_id; ?></td>
                  <td class="td-custom"><?php $row2 = fetch_account($user_id)->fetch_assoc(); echo $row2['FirstName'], ' ',  $row2['LastName']; ?></td>
                  <?php
                    for ($i = 1;$i <= $row['Number_lecture'];$i++){
                    $result = fetch_attendance($user_id,$course_id,$i);
                    if ($result->num_rows > 0) {
                      $atten = $result->fetch_assoc()['Attendance'];
                    } else {
                      $atten = 0;
                    } 
                  ?>
                  <td class="td-custom"><?php echo $atten; ?></td>
                  <?php
                    } 
                  ?>
                </tr>

              </tbody>
            </table>
      </div>

         <!-- Footer -->
        <?php include '../footer/footer.php'; ?>

      </div>
    </body>
</html>