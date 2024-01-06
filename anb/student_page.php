<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
</head>
<body>
    <h1>Welcome, Student!</h1>
    
    <?php
    // Retrieve user_id from the session
    session_start();
    $user_id = $_SESSION['user_id'];
    echo "<p>User ID: $user_id</p>";

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

    // Fetch courses that the student is enrolled in
    $sql = "SELECT c.course_id, c.course_name FROM courses c INNER JOIN enrollments e ON c.course_id = e.course_id WHERE e.student_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Your Enrolled Courses:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row["course_name"]) . "</li>";

            // Fetch announcements for each enrolled course
            $course_id = $row['course_id'];
            $annSql = "SELECT * FROM announcements WHERE course_id = ?";
            $annStmt = $conn->prepare($annSql);
            $annStmt->bind_param("i", $course_id);
            $annStmt->execute();
            $annResult = $annStmt->get_result();

            if ($annResult->num_rows > 0) {
                echo "<ul>";
                while ($annRow = $annResult->fetch_assoc()) {
                    echo "<li>";
                    echo "Announcement: " . htmlspecialchars($annRow['announcement']) . "<br>";
                    echo "Created At: " . $annRow['created_at'] . "<br>";
                    echo "</li>";
                    echo "<br>";
                }
                echo "</ul>";
            } else {
                echo "<p>No announcements found for this course.</p>";
            }

            $annStmt->close();
        }
        echo "</ul>";
    } else {
        echo "<p>No courses enrolled for this student.</p>";
    }

    $stmt->close();
    $conn->close();
    ?>
    
</body>
</html>