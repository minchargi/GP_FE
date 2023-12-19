<?php
include '../db_conn.php';

// Retrieve data from the form
$account = $_POST['account'];
$password = $_POST['password'];

// Perform SQL query to check user credentials
$sql = "SELECT * FROM users WHERE Account='$account' AND Password='$password'";
$result = $conn->query($sql);

// Check if the query returns a row (valid user)
if ($result->num_rows > 0) {
    // Fetch user data
    $row = $result->fetch_assoc();

    // Set session variables
    session_start();
    $_SESSION['user_id'] = $row['User_ID'];
    echo $_SESSION['user_id'];
    $_SESSION['role'] = $row['Role'];
    echo $_SESSION['role'];
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