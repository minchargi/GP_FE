<?php
include '../db_conn.php';

// Retrieve data from the form
$user_id = $_POST['user_id'];
$password = $_POST['password'];

// Perform SQL query to check user credentials
$sql = "SELECT * FROM users WHERE User_ID='$user_id' AND Password='$password'";
$result = $conn->query($sql);

// Check if the query returns a row (valid user)
if ($result->num_rows > 0) {
    // Fetch user data
    $row = $result->fetch_assoc();

    // Set session variables
    session_start();
    $_SESSION['user_id'] = $row['User_ID'];
    $_SESSION['role'] = $row['Role'];
    // Redirect based on the user's role
    if ($row['Role'] === 'Admin') {
        header("Location: ../student");
    } elseif ($row['Role'] === 'Teacher') {
        header("Location: ../teacher");
    } elseif ($row['Role'] === 'Student') {
        header("Location: ../students");
    }
} else {
    // Invalid credentials, redirect to login page
    echo "wrong";
}

$conn->close();
?>