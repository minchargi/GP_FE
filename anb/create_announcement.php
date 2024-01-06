<?php
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'users';

// Get user ID from session
$user_id = $_SESSION['user_id'];

// Connect to the database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values from the form
$course_id = $_POST['course_id'];
$announcement = $_POST['announcement'];

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'users');

// Directly interpolate $user_id; this is risky without proper validation/sanitization.
$user_id = $_SESSION['user_id'];

// Directly inserting values into the SQL statement (not recommended for production).
$sql = "INSERT INTO announcements (course_id, announcement, created_by) 
        VALUES ($course_id, '$announcement', $user_id)";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "Announcement created successfully!";
    // Redirect back to teacher_page.php after 3 seconds
    header("Refresh: 3; url=http://localhost/gp-signin-full/teacher_page.php");
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();

?>