<?php 
    include "../../db_conn.php";
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $tprogram_id = $_POST['tprogram_id'];
        $dob = $POST['dob'];
        $role = "Staff";
        $password = md5('1');


        $sql = "INSERT INTO users(User_ID, FirstName, LastName, Gender, Email, Phone, TProgram_ID, DoB, `Role`, `Password`) 
                VALUES ('$id','$first_name','$last_name','$gender','$email','$phone','$tprogram_id','$dob','$role','$password')";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "New record created successfully.";
            header('location:../staff_List.php');
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        } 

        $conn->close();     
    }

?>

