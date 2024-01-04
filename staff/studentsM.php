<?php 
    include "../db_conn.php";
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $year = $_POST['year'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $tprogram_id = $_POST['tprogram_id'];
        $dob = $_POST['dob'];
        $role = "Student";
        $password = "password";

        $sql = "INSERT INTO users(User_ID, `Year_Start`, FirstName, LastName, Email, Phone, TProgram_ID, DoB, `Role`, `Password`) 
                VALUES ('$id','$year','$first_name','$last_name','$email','$phone','$tprogram_id','$dob','$role','$password')";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "New record created successfully.";
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        } 

        $conn->close();     
    }

?>

