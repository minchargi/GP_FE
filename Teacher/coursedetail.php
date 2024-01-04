<?php 

  include '../db_conn.php';
  include 'verifyTeacher.php';
  include 'teacher_function.php';
  
  if (!isset($_GET['id']) and !isset($_GET['year'])) {
    header('Location: courseList.php');
  }
  $course_id = $_GET['id'];
  $year = $_GET['year'];
  $result = fetch_course_detail($course_id,$year);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coursedetail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Teacher/courseDetail.css">
    <link rel="stylesheet" href="../Teacher/navbar.css">
    <link rel="stylesheet" href="../Teacher/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="courseDetail.js"></script>
</head>
<body>
    
      <!-- Navbar-->
      <?php include '../navbar/teachernav.php'; ?>
    
    <ul class="nav">
        <li><a href="../Teacher/courseAnnounce.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Announcement</a></li>
        <li class="active"><a href="../Teacher/coursedetail.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Overview</a></li>
        <li><a href="../Teacher/studentList.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Student List</a></li>
        <li><a href="../Teacher/grades.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Grades</a></li>
        <li><a href="../Teacher/attendance.php?id=<?php echo $course_id; ?>&year=<?php echo $year;?>">Attendance</a></li>
    </ul>
    
    <div class="container mt-4">
        <p class="header_text">Course Name</p>
        <div class="button-container">
          <button class="custom-button" data-bs-toggle="modal" data-bs-target="#editModal">
              <span class="button-content gap-4">
                  <i class="fa-regular fa-pen-to-square"></i>
                  Edit
              </span>
          </button>
        </div>
    </div>
    
  <!-- Edit Modal -->
  <div class="modal" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Course Overview</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Add your form elements for editing here -->
          <label for="editedContent">Edit Content:</label>
          <textarea class="form-control" id="editedContent" rows="4"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4 course-detail">
        <dl>
          <dt>Attendance
            <dd>Attendance will be checked for every labwork</dd>
            <dd>Students should remind the lecturers to check attendance if they forget it.</dd>
            <button class="btn-custom" onclick="checkAttendance()">Check Attendance</button>
          </dt>
        </dl>
        <div class="button-container">
          <button class="custom-button" data-bs-toggle="modal" data-bs-target="#editTableModal">
              <span class="button-content gap-4">
                  <i class="fa-regular fa-pen-to-square"></i>
                  Edit
              </span>
          </button>
        </div>
        <div class="modal fade" id="editTableModal" tabindex="-1" role="dialog" aria-labelledby="editTableModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="editTableModalLabel">Update Grade</h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <!-- Form for updating grades -->
                      <form id="editForm">
                          <div class="form-group">
                              <label for="courseInfo">Attendance:</label>
                              <input type="text" class="form-control" id="courseInfo" required>
                          </div>
                          <div class="form-group">
                            <label for="courseInfo">Midterm:</label>
                            <input type="text" class="form-control" id="courseInfo" required>
                          </div>
                          <div class="form-group">
                            <label for="courseInfo">Final Exam:</label>
                            <input type="text" class="form-control" id="courseGrade" required>
                          </div>
                          <button type="button" class="btn btn-custom" onclick="Save()">Save Change</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

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
                  <th class="td-head" scope="col">Midterm</th>
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
        <ul class="sub">After a labwork session, you have 7 days to complete the exercises 
          <li>Write a report of at least 2 pages to describe your work (figure and table), discussion, and analysis of lab work. </li>
          <li> Submit in PDF format to Google Classroom (link above) </li>
          <li><b>Source code is optional</b> in the report</li>
        </ul>
        <p class="head"><b>Student Score Chart </b></p>
        <canvas id="gradesChart" width="400" height="200"></canvas>
  </div>

  <<!-- Footer -->
  <?php include '../footer/footer.php'; ?>

</body>
</html>