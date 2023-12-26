<?php
    function viewProfile($user_id){
        include '../db_conn.php';
        $user_id = $_SESSION["user_id"];
        $sql = "SELECT * FROM users WHERE User_ID = '$user_id'";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
?>