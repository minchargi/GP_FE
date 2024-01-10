<?php

include '../db_conn.php';

if (isset($_POST['update'])) {
    $student_id = $_POST['student_id'];
    $year = $_POST['year'];
    $course_id = $_POST['course_id'];
    $attendance = $_POST['attend'];
    $midterm = $_POST['midterm'];
    $final = $_POST['final'];
    $sql = "UPDATE `grade` SET `Attendance`='$attendance',`Midterm`='$midterm',`Final`='$final' WHERE `Student_ID`='$student_id' AND `Year` = '$year' AND `Course_ID` = '$course_id'";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo " Record updated successfully.";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

