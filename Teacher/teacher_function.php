<?php

function fetch_course($user_id,$year,$ba_year,$tp_id) {
    include '../db_conn.php';
    $sql = "SELECT * FROM course WHERE Teacher_ID = '$user_id' AND Year = '$year'  AND Bachelor_Year = '$ba_year' AND TProgram_ID = '$tp_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}


function fetch_course_detail($course_id,$year) {
    include '../db_conn.php';
    $sql = "SELECT * FROM `course` WHERE `Course_ID`='$course_id' AND Year = $year";
    $result = $conn->query($sql); 
    $conn->close();
    return $result;
}

function viewProfile($user_id){
    include '../db_conn.php';
    $sql = "SELECT * FROM users WHERE User_ID = '$user_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_program_year($user_id){
    include '../db_conn.php';
    $sql = "SELECT DISTINCT tp.Year
            FROM users u
            INNER JOIN department d on u.Department = d.Department_ID 
            INNER JOIN training_program tp on d.Department_ID = tp.Department_ID 
            WHERE u.User_ID = '$user_id'
            ORDER BY tp.Year DESC";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_program($user_id,$year){
    include '../db_conn.php';
    $sql = "SELECT  tp.*
            FROM users u
            INNER JOIN department d on u.Department = d.Department_ID 
            INNER JOIN training_program tp on d.Department_ID = tp.Department_ID 
            WHERE u.User_ID = '$user_id' and tp.Year = $year
            ORDER BY tp.Year DESC";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_course_student_list($course_id,$year){
    include '../db_conn.php';
    $sql = "SELECT u.User_ID,CONCAT(u.FirstName,' ',u.LastName) As FullName,u.Email,u.Phone,u.Dob
    FROM users u
    INNER JOIN grade g ON g.Student_ID = u.User_ID
    WHERE g.Year = $year AND g.Course_ID = '$course_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_course_grade($course_id,$year){
    include '../db_conn.php';
    $sql = "SELECT u.User_ID,CONCAT(u.FirstName,' ',u.LastName) As FullName,g.*
    FROM grade g
    INNER JOIN users u ON  u.User_ID = g.Student_ID
    WHERE g.Year = $year AND g.Course_ID = '$course_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_attendance($student_id,$course_id,$session){
    include '../db_conn.php';
    $sql = "SELECT *
    FROM attendance
    WHERE Student_ID = '$student_id' AND Course_ID = '$course_id' AND Session = '$session'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
?>