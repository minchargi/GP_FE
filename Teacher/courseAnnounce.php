<?php 

  include '../db_conn.php';
  include 'verifyTeacher.php';
  include 'teacher_function.php';
  
  if (!isset($_GET['id']) and !isset($_GET['year'])) {
    header('Location: courseList.php');
  }
  $course_id = $_GET['id'];
  $year = $_GET['year'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Announcement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Teacher/courseAnnouncement.css">
    <link rel="stylesheet" href="../Teacher/navbar.css">
    <link rel="stylesheet" href="../Teacher/footer.css">
    <script src="annoucement.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
</head>
<body>
    <!-- Navbar-->
    <?php include '../navbar/teachernav.php'; ?>

    <ul class="nav">
        <li class="active"><a href="../Teacher/courseAnnounce.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Announcement</a></li>
        <li><a href="../Teacher/coursedetail.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Overview</a></li>
        <li><a href="../Teacher/studentList.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Student List</a></li>
        <li><a href="../Teacher/grades.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Grades</a></li>
        <li><a href="../Teacher/attendance.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Attendance</a></li>
    </ul>
    <div class="container mt-4">
      <p class="header-text">Announcements</p>
    </div>
    <div class="container mt-4">
        <div class="btn-container">
          <button class="custom-button" data-bs-toggle="modal" data-bs-target="#courseAnnounce">
            <span class="button-content gap-4">
                Add
            </span>
        </button>
        </div>
      </div>
      <!-- Add Announce Modal-->
        <div class="modal fade" id="courseAnnounce" tabindex="-1" role="dialog" aria-labelledby="courseAnnounceLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="courseAnnounceLabel">Add Announcements</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for adding new announce -->
                        <form id="courseAnnounceForm" action="createAnnounce.php" method="post">
                            <input type="hidden" id="teacher_id" name="teacher_id" value=<?php echo $user_id ?>>
                            <input type="hidden" id="course_id" name="course_id" value=<?php echo $course_id ?>>
                            <input type="hidden" id="year" name="year" value=<?php echo $year ?>>
                          <div class="form-group">
                            <label for="announceTitle">Title:</label>
                            <input type="text" class="form-control" name="announceTitle" id="announceTitle" required>
                          </div>
                          <div class="form-group">
                            <label for="announcement">Announcement:</label>
                            <textarea class="form-control" name="announcement" id="announcement" rows="4"></textarea>
                          </div>
                          <div class="modal-footer">
                                <input type="submit" class="btn btn-secondary" name ="submit" data-bs-dismiss="modal">Close</button>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
          $result = fetch_course_announcement($course_id,$year);
          if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
        ?>
        <div class="announce-accordion">
          <div class="accordion-item">
            <button class="accordion-header" onclick="toggleAccordion(this)"><?php echo $row['tittle'] ?></button>
            <div class="accordion-content">
              <p><?php echo $row['announcement'] ?></p>
            </div>
          </div>
        </div> 
        <?php    
            }
          }
        ?>
    <!-- Footer -->
    <?php include '../footer/footer.php'; ?>
</body>
</html>