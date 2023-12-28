<?php 
    include '../db_conn.php';
    if (isset($_POST['submit'])) {
        $code = $_POST['classCode'];
        $name = $_POST['className'];
        $program = $_POST['tprogram'];
        $optional = $_POST['optional'];
        session_start();
        $teacher_id = $_SESSION['user_id'];

        $sql = "INSERT INTO course(Course_ID, Course_Name, Teacher_ID,TProgram_ID,Optional) 
                VALUES ('$code','$name','$teacher_id','$program','$optional')";
        echo $sql;
        $result = $conn->query($sql);

        if ($result == TRUE) {
            $conn->close();   
            header("Location: course.php");
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        } 

          
    }

?>