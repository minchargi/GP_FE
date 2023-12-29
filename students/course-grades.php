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
  <title>Grades</title>
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
    <li class="active"><a href="course-grades.php?id=<?php echo $course_id; ?>">Grades</a></li>
    <li><a href="attendance.php?id=<?php echo $course_id; ?>">Attendance</a></li>
  </ul>

  

  <h1>Course Name</h1>
  <div class="container mt-2">
    <table class="table table-bordered">
      <thead>
        <tr class="tb-row">
          <th class="td-head" scope="col">Course ID</th>
          <th class="td-head" scope="col">Course Name</th>
          <th class="td-head" scope="col">Attendance</th>
          <th class="td-head" scope="col">Midterm </th>
          <th class="td-head" scope="col">Final </th>
          <th class="td-head" scope="col">Total </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = fetch_grades($user_id);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>

            <tr class="tb-row">
              <td><?= $row['Course_ID'] ?></td>
              <td><?= $row['Course_Name'] ?></td>
              <td><?= $row['Attendance'] ?></td>
              <td><?= $row['Midterm'] ?></td>
              <td><?= $row['Final'] ?></td>
              <td><?= $row['Overall'] ?></td>
            </tr>
          <?php }
        } else { ?>

          <tr>
            <td colspan="5">No records found...</td>
          </tr>

        <?php } ?>
      </tbody>

    </table>
  </div>

  <!-- Footer -->
  <?php include '../footer/footer.php'; ?>

</body>

</html>