<?php 
    include "../../db_conn.php";
    include '../staff_function.php';
    if (isset($_POST['submit'])) {
        $id = $_POST['studentID'];
        $year = $_POST['year'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $tprogram_id = $_POST['tprogram_id'];
        $dob = $_POST['studentDOB'];
        $role = "Student";
        $password = md5('1');
        $progress = "B1";


        $sql = "INSERT INTO users(User_ID, `Year_Start`, FirstName, LastName, Gender, Email, Phone, TProgram_ID, DoB, `Role`, `Password`,`Progress`) 
                VALUES ('$id','$year','$first_name','$last_name','$gender','$email','$phone','$tprogram_id','$dob','$role','$password','$progress')";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            addStudentToCourse($id,$tprogram_id,$year);
            header('location:../studentList.php');
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        } 
        
        $conn->close();     
    }

    
?>

