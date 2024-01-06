<?php 
    include '../db_conn.php';
    if (isset($_POST['submit'])) {
        $couse_id = $_POST['course_id'];
        $year = $_POST['year'];
        $session = $_POST['session'];
        $time_close = $_POST['time_close'];
        $time_close = date('Y/m/d H:i:s',strtotime($time_close));
        $sql = "INSERT INTO attendance_session(Course_ID, Year, Session,Time_close) 
                VALUES ('$couse_id','$year','$session','$time_close')";
        $result = $conn->query($sql);

        $sql = "SELECT * FROM grade WHERE Year = '$year' AND Course_ID = '$couse_id'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()){
                $student_id = $row['Student_ID'];
                $sql2 = "SELECT * FROM attendance WHERE Year = '$year' AND Course_ID = '$couse_id' AND Student_ID = '$student_id' AND Session = '$session'";
                $result2 = $conn->query($sql2);
                if ($result2->num_rows == 0){
                    $sql3 = "INSERT INTO attendance(Course_ID, Year, Session,Student_ID) 
                             VALUES ('$couse_id','$year','$session','$student_id')";
                    $result3 = $conn->query($sql3);
                }
            }
        } 
        $conn->close();
        header('Location: Open_attendance_index.php');
    }

?>