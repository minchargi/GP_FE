<?php

function fetch_grades($user_id) {
    global $conn;
    $sql = "SELECT u.*, g.*, c.Course_Name, c.Course_ID
    FROM users u
    INNER JOIN grade g ON u.User_ID = g.Student_ID
    INNER JOIN course c ON c.Course_ID = g.Course_ID
    WHERE u.User_ID = '$user_id'";
    $result = $conn->query($sql);
    return $result;
}


function fetch_account($user_id) {
    global $conn;
    $sql = "SELECT * FROM users WHERE User_ID = '$user_id'";
    $result = $conn->query($sql);
    return $result;
}

?>