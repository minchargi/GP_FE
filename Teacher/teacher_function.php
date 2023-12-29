<?php

function fetch_course($user_id) {
    include '../db_conn.php';
    $sql = "SELECT * FROM course WHERE Teacher_ID = '$user_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}


function fetch_course_detail($course_id) {
    include '../db_conn.php';
    $sql = "SELECT * FROM `course` WHERE `Course_ID`='$course_id'";
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
    $sql = "SELECT  tp.TProgram_Name
            FROM users u
            INNER JOIN department d on u.Department = d.Department_ID 
            INNER JOIN training_program tp on d.Department_ID = tp.Department_ID 
            WHERE u.User_ID = '$user_id' and tp.Year = $year
            ORDER BY tp.Year DESC";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
?>