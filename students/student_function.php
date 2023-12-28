<?php

function fetch_grades($user_id) {
    include '../db_conn.php';
    $sql = "SELECT u.*, g.*, c.Course_Name, c.Course_ID
    FROM users u
    INNER JOIN grade g ON u.User_ID = g.Student_ID
    INNER JOIN course c ON c.Course_ID = g.Course_ID
    WHERE u.User_ID = '$user_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}


function fetch_account($user_id) {
    include '../db_conn.php';
    $sql = "SELECT * FROM users WHERE User_ID = '$user_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_course($user_id,$bachelor_year) {
    include '../db_conn.php';
    $sql = "SELECT c.Course_ID AND c.Course_Name
    FROM grade g
    INNER JOIN course c ON g.Course_ID = c.Course_ID
    WHERE g.Student_ID = '$user_id' AND c.Bachelor_Year = '$bachelor_year'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
?>