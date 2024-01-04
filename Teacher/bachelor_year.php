<?php
  include "verifyTeacher.php";
  include "teacher_function.php";
  if (!isset($_GET['tp_id']) and !isset($_GET['year'])) {
    header('Location: courseList.php');
  }
  $tp_id = $_GET['tp_id'];
  $year =  $_GET['year'];
?>


<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Training Program</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../Teacher/trainingProgram.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/staffnav.php'; ?>

        <!-- Main content -->
        <div class="container mt-4">
            <p class="header-text">Training Program</p>
        </div>

        <div class="container mt-4">
          <div class="training">
            <button class="btn btn-primary btn-lg year-btn" type="button">
              <a href="../Teacher/course.php?tp_id=<?php echo $tp_id; ?>&year=<?php echo $year;?>&ba_year=B1">First Year</a>
            </button>
          </div>
          <div class="training">
            <button class="btn btn-primary btn-lg year-btn" type="button">
              <a href="../Teacher/course.php?tp_id=<?php echo $tp_id; ?>&year=<?php echo $year;?>&ba_year=B2">Second Year</a>
            </button>
          </div>
          <div class="training">
            <button class="btn btn-primary btn-lg year-btn" type="button">
              <a href="../Teacher/course.php?tp_id=<?php echo $tp_id; ?>&year=<?php echo $year;?>&ba_year=B3">Third Year</a>
            </button>
          </div>
        </div>


    
        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>

    </body>
</html>