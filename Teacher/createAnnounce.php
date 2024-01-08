<?php
    include '../db_conn.php';
    if (isset($_POST['submit'])) {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $title = $_POST['announceTitle'];
        $announcement = $_POST['announcement'];
        $created_by = $_POST['teacher_id'];
        $course_id = $_POST['course_id'];
        $year = $_POST['year'];
        $sql = "INSERT INTO announcements(Course_ID, Year, tittle,announcement,created_by) 
                VALUES ('$course_id','$year','$title','$announcement','$created_by')";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            $conn->close();   
            header("Location: courseAnnounce.php?id=$course_id&year=$year");
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        } 
    }

?>
