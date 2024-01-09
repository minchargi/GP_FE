<?php 
    include "../../db_conn.php";
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $department = $_POST['department'];
        $dob = $_POST['teacherDOB'];
        $role = "Teacher";
        $password = md5('1');

        $sql = "INSERT INTO users(User_ID, FirstName, LastName, Gender, Email, Phone, Department, DoB, `Role`, `Password`) 
                VALUES ('$id','$first_name','$last_name','$gender','$email','$phone','$department','$dob','$role','$password')";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "New record created successfully.";
            header('location:../departments.php');
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        } 

        $conn->close();     
    }

?>

