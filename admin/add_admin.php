<?php 
    include "../db_conn.php";
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = "admin";
        $role = "Admin";
        $password = "password";


        $sql = "INSERT INTO users(User_ID, `FirstName`, `Role`, `Password`) 
                VALUES ('$id','$name','$role','$password')";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "New record created successfully.";
            header('location:admin_account.php');
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        } 

        $conn->close();     
    }

?>

