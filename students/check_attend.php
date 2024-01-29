
<?php
include 'student_function.php';
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];
    $year = $_POST['year'];
    $session = $_POST['session'];
    $close = $_POST['time_close'];
    
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    if ($close > time()){
        include '../db_conn.php';
        $sql = "UPDATE attendance
        SET Attendance = 1
        WHERE Student_ID = '$student_id' AND Course_ID = '$course_id' And Year = '$year' AND Session = '$session'";
        $result = $conn->query($sql);
        $at_grade=cal_attend_grade($student_id,$course_id,$year);
        update_attend_grade($student_id,$course_id,$year,$at_grade);
        $conn->close();
        header('location:coursedetail.php');
    }
    header("location:coursedetail.php?id=$course_id&year=$year");

?>