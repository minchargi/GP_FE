<?php
// Start the session
session_start();

// Database connection details
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'users';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1>Welcome, Admin!</h1>
    
    <?php
    // Retrieve user_id and username from the session
    $user_id = $_SESSION['user_id'];
    echo "<p>User ID: $user_id</p>";
    $username = $_SESSION['username'];
    echo "<p>Username: $username</p>";

    // Fetch courses from the database
    $sql = "SELECT courses.course_id, courses.course_name, courses.course_description, users.username AS course_teacher
            FROM courses
            JOIN users ON courses.course_teacher = users.user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2>" . $row["course_name"] . "</h2>";
    
            // First table for course details
            echo "<table border='1' style='text-align: center;'>";
            echo "<tr><th style='text-align: center;'>Course Name</th><th style='text-align: center;'>Description</th><th style='text-align: center;'>Teacher</th></tr>";
            echo "<tr>";
            echo "<td>" . $row["course_name"] . "</td>";
            echo "<td>" . $row["course_description"] . "</td>";
            echo "<td>" . $row["course_teacher"] . "</td>";
            echo "</tr>";
            echo "</table>";
    
            // Fetch and display students enrolled in this course
            $course_id = $row["course_id"];
            $students_sql = "SELECT users.username
                             FROM users
                             JOIN enrollments ON users.user_id = enrollments.student_id
                             WHERE enrollments.course_id = $course_id";
            $students_result = $conn->query($students_sql);

            echo "<table border='1' style='margin-bottom: 20px;'>";  // Added inline style for spacing
    
            // Second table for enrolled students
            echo "<table border='1' style='text-align: center; margin-bottom: 20px;'>"; 
            echo "<tr><th style='text-align: center;'>" . $row["course_name"] . "</th></tr>";
            while ($student_row = $students_result->fetch_assoc()) {
                echo "<tr><td>" . $student_row['username'] . "</td></tr>";
            }
            echo "</table>";
        }
    } else {
        echo "<p style='text-align: center;'>No courses found.</p>";
    }
    
    // Close the database connection
    $conn->close();
    
    ?>

    <!-- Admin page content goes here -->
</body>
</html>