<?php
function fetch_admin(){
    include '../db_conn.php';
    $sql = "SELECT * FROM users WHERE Role = 'Admin'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_student(){
    include '../db_conn.php';
    $sql = "SELECT * FROM users WHERE Role = 'Student'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_teacher(){
    include '../db_conn.php';
    $sql = "SELECT * FROM users WHERE Role = 'Teacher'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_staff(){
    include '../db_conn.php';
    $sql = "SELECT * FROM users WHERE Role = 'Staff'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
?>