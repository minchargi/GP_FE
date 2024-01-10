<?php

include '../../db_conn.php';

if (isset($_POST['update'])) {
    $student_id = $_POST['studentid'];
    $year = $_POST['year'];
    $course_id = $_POST['courseid'];
    $sql = "UPDATE `grade` SET `FirstName`='$firstname',`LastName`='$lastname',`Email`='$email',`Phone`='$phone',`TProgram_ID`='$tprogram_id',`Year_Start`='$year' WHERE `User_ID`='$user_id'";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo " Record updated successfully.";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {

    $student_id = $_GET['studentid'];

    $sql = "SELECT * FROM `grade` WHERE `Student_ID`='$student_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $student_id = $row['Student_ID'];
            $midterm = $row['Midterm'];
            $final = $row['Final'];
            $overall = $row['Overall'];
        }
    }
}
