<?php

function fetch_grades($user_id) {
    include '../db_conn.php';
    $sql = "SELECT u.*, g.*, c.Course_Name, c.Course_ID
    FROM users u
    INNER JOIN grade g ON u.User_ID = g.Student_ID
    INNER JOIN course c ON c.Course_ID = g.Course_ID
    WHERE u.User_ID = '$user_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}


function fetch_account($user_id) {
    include '../db_conn.php';
    $sql = "SELECT * FROM users WHERE User_ID = '$user_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_course($user_id,$bachelor_year) {
    include '../db_conn.php';
    $sql = "SELECT c.Course_ID,c.Course_Name,c.Year
    FROM grade g
    INNER JOIN course c ON g.Course_ID = c.Course_ID
    WHERE g.Student_ID = '$user_id' AND c.Bachelor_Year = '$bachelor_year'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_course_overview($course_id) {
    include '../db_conn.php';
    $sql = "SELECT *
    FROM course
    WHERE Course_ID = '$course_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_course_grade($student_id,$course_id,$year){
    include '../db_conn.php';
    $sql = "SELECT c.Course_ID,c.Course_Name,g.Attendance,g.Midterm, g.Final,g.Overall
    FROM grade g
    INNER JOIN course c ON g.Course_ID = c.Course_ID
    WHERE g.Student_ID = '$student_id' AND g.Course_ID = '$course_id' AND g.Year = $year";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_attendance($student_id,$course_id,$year,$session){
    include '../db_conn.php';
    $sql = "SELECT *
    FROM attendance
    WHERE Student_ID = '$student_id' AND Course_ID = '$course_id' AND Year = '$year' AND Session = '$session'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_attendance_status($course_id,$year){
    include '../db_conn.php';
    $sql = "SELECT *
    FROM attendance_session
    WHERE Course_ID = '$course_id' AND Year = '$year'
    ORDER BY `attendance_session`.`Create_at` DESC";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function cal_attend($student_id, $course_id){
    include '../db_conn.php';
    $sql ="SELECT c.Number_lecture, c.Course_ID, a.Course_ID, a.Student_ID, count(a.Attendance) 
    from course c 
    inner join attendance a on c.Course_ID = a.Course_ID
    where a.Student_ID = '$student_id' and c.Course_ID = '$course_id' and a.Attendance = 1";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
?>