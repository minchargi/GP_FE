<?php 
    include '../db_conn.php';
    if (isset($_POST['submit'])) {
        session_start();
        $user_id = $_SESSION['user_id'];
        $oldpass = md5($_POST['oldPassword']);
        $newpass = md5($_POST['newPassword']);
        $sql= "SELECT Password FROM users WHERE User_ID = '$user_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if($oldpass != $row["Password"]){
            $conn->close();   
            header("Location: change_password.php?error=Wrong password!!!");
        } else {
            $sql= "UPDATE users SET Password = '$newpass' WHERE User_ID = '$user_id'";
            $result = $conn->query($sql);
            if ($result == TRUE) {
                $conn->close();   
                header("Location: profile.php");
            }else{
                echo "Error:". $sql . "<br>". $conn->error;
            } 
        } 
    }

?>