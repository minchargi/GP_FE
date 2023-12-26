<?php

function fetch_course($user_id) {
    global $conn;
    $sql = "SELECT * FROM course WHERE Teacher_ID = '$user_id'";
    $result = $conn->query($sql);
    return $result;
}


function fetch_course_detail($course_id) {
    global $conn;
    $course_id = $_GET['id']; 
    $sql = "SELECT * FROM `course` WHERE `Course_ID`='$course_id'";
    $result = $conn->query($sql); 
    return $result;
}

function viewProfile($user_id){
    include '../db_conn.php';
    $user_id = $_SESSION["user_id"];
    $sql = "SELECT * FROM users WHERE User_ID = '$user_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
?>