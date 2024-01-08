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

function cal_attend_grade($student_id, $course_id, $year) {
    include '../db_conn.php';  // Assuming db_conn.php establishes database connection

    // Use prepared statements for security and clarity
    $stmt = $conn->prepare("SELECT c.Year, c.Number_lecture, c.Course_ID, a.Student_ID, COUNT(a.Attendance) AS Total_Attended
                             FROM course c
                             INNER JOIN attendance a ON c.Course_ID = a.Course_ID
                             WHERE a.Student_ID = ? AND c.Course_ID = ? AND c.Year = ? AND a.Attendance = 1");
    $stmt->bind_param("ssi", $student_id, $course_id, $year);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch results and handle potential errors
    if ($result->num_rows === 0) {
        // Handle the case where no data is found
        return null; // Or provide a default value or take other actions
    }

    $row = $result->fetch_assoc();

    // Access values directly from the fetched row
    $total_lectures = $row['Number_lecture'];
    $total_attended = $row['Total_Attended'];

    // Ensure division by zero is prevented
    if ($total_lectures === 0) {
        return null; // Or provide a default value or handle the error appropriately
    }

    $attendance_grade = ($total_attended / $total_lectures) * 20;
    return $attendance_grade;
}

function update_attend_grade($student_id, $course_id, $year, $attendance_grade) {
    include '../db_conn.php';

    // Use prepared statements for security
    $stmt = $conn->prepare("UPDATE grade SET Attendance = ?
                             WHERE Student_ID = ? AND Course_ID = ? AND Year = ?");
    $stmt->bind_param("sssi", $attendance_grade, $student_id, $course_id, $year);

    // Execute the update and check the result
    $stmt->execute();
}
function fetch_course_announcement($course_id,$year){
    include '../db_conn.php';
    $sql = "SELECT *
    FROM announcements
    WHERE Year = $year And Course_ID = '$course_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_student_gpa($student_id,$bachelor_year){
    include '../db_conn.php';
    $sql = "SELECT *
    FROM grade g
    INNER JOIN course c ON c.Course_ID = g.Course_ID AND c.Year = g.Year
    WHERE c.Bachelor_Year = '$bachelor_year' And g.Student_ID = '$student_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
?>