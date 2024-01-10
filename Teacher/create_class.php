<?php 
    include '../db_conn.php';
    if (isset($_POST['submit'])) {
        $id = $_POST['courseCode'];
        $name = $_POST['courseName'];
        $program = $_POST['tp_id'];
        $ba_year = $_POST['ba_year'];
        $year =  $_POST['year'];
        $optional = $_POST['optional'];
        session_start();
        $teacher_id = $_SESSION['user_id'];
        
        $sql = "INSERT INTO course(Course_ID,Year,Bachelor_Year, Course_Name, Teacher_ID,TProgram_ID,Optional) 
                VALUES ('$id',$year,'$ba_year','$name','$teacher_id','$program','$optional')";
        echo $sql;
        $result = $conn->query($sql);

        if ($result == TRUE) {
            $conn->close();   
            header("Location: course.php?tp_id=$program&year=$year&ba_year=B1");
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        } 
 
          
    }

?>