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
<html>
<head>
    <title>Check Attendance</title>
</head>
    <body>

    <h2>Check Attendance</h2>

    <form action="open_attendance.php" method="POST">
    <input type="hidden" id="course_id" name="course_id" value=<?php echo $course_id ?>>
    <input type="hidden" id="year" name="year" value=<?php echo $year ?>>
    
    <label for="session">Session:</label>
    <input type="text" id="session" name="session" required><br><br>
    <label for="time_close">Time close:</label>
    <input type="time" id="time_close" name="time_close" required><br><br>

    <input type="submit" value="Check Attendance" name ="submit">
    </form>
    </body>
</html>