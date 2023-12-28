<?php 
  include 'verifyStudent.php';
  include 'student_function.php';
  if (!isset($_GET['id'])){
    header('Location: course-overview.php');
  };
  $bachelor_year = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Course Overview</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../students/courseList.css">
        <script src="accordion.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/navbar.php'; ?>

         <!-- Main Content -->
        <h1>Courses</h1>
        <?php
            $result = fetch_course($user_id,$bachelor_year);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        
        ?>
        <div class="courseDetail">
            <a class="link_course" href="../students/announceCourse.php?id=<?php echo $row['Course_ID']; ?>"><?php echo $row['Course_Name']; ?></a>
        </div>
        <?php       
                }
            }
        ?>  
        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>

    </body>
</html>