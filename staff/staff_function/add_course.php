<?php
include "../db_conn.php";
include 'staff_function.php';

if (isset($_POST['submit'])) {
    $course_id = $_POST['course_id'];
    $course_name = $_POST['course_name'];
    $tprogram_id = $_POST['tprogram_id'];

    $sql = "INSERT INTO course(Course_ID, Course_Name, TProgram_ID) VALUES ('$course_id','$course_name','$tprogram_id')";
    
    $result = $conn->query($sql);
    if ($result == true) {
        echo "New record created successfully";
        header('location:courseList.php');
    } else {
        echo "Error" . $sql . $conn->error;
    }
}
addStudentsToCourse($course_id,$tprogram_id);
?>

