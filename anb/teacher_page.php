<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Page</title>
</head>
<body>
    <h1>Welcome, Teacher!</h1>
    
    <?php
    session_start();
    $user_id = $_SESSION['user_id'];
    echo "<p>User ID: $user_id</p>";

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'users';

    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch courses for this teacher
    $sql = "SELECT course_id, course_name FROM courses WHERE course_teacher = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Your Courses:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row["course_name"]) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No courses found for this teacher.</p>";
    }

    $stmt->close();
    $conn->close();
    ?>

    <h2>Create Announcement</h2>
    <form action="create_announcement.php" method="post">
        <label for="course_id">Select Course:</label>
        <select name="course_id" id="course_id">
            <?php
                $conn = new mysqli('localhost', 'root', '', 'users');
                
                // Directly interpolating $user_id can be risky; consider sanitizing it if necessary.
                $user_id = $_SESSION['user_id'];

                // Directly interpolating $user_id without validation/sanitization.
                $sql = "SELECT course_id, course_name FROM courses WHERE course_teacher = $user_id";
                
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["course_id"] . "'>" . htmlspecialchars($row["course_name"]) . "</option>";
                }

                $conn->close();
            ?>
        </select><br><br>
        <label for="announcement">Announcement:</label><br>
        <textarea name="announcement" id="announcement" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Create Announcement">
    </form>

    <h2>View Announcements</h2>

    <!-- Form to select a course to view announcements -->
    <form action="" method="get">
        <label for="view_course_id">Select Course:</label>
        <select name="view_course_id" id="view_course_id">
            <?php
            $conn = new mysqli('localhost', 'root', '', 'users');
            $user_id = $_SESSION['user_id'];
            $sql = "SELECT course_id, course_name FROM courses WHERE course_teacher = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["course_id"] . "'>" . htmlspecialchars($row["course_name"]) . "</option>";
            }

            $stmt->close();
            $conn->close();
            ?>
        </select>
        <input type="submit" value="View Announcements">
    </form>

    <!-- Display announcements for the selected course -->
    <?php
    if (isset($_GET['view_course_id'])) {
        $selected_course_id = $_GET['view_course_id'];
        
        $conn = new mysqli('localhost', 'root', '', 'users');
        $sql = "SELECT * FROM announcements WHERE course_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $selected_course_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<h3>Announcements for the selected course:</h3>";
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<li>";
                echo "Announcement: " . htmlspecialchars($row['announcement']) . "<br>";
                echo "Created At: " . $row['created_at'] . "<br>";
                echo "</li>";
                echo "<br>"; // Insert a line break after each announcement
            }
            echo "</ul>";
        } else {
            echo "<p>No announcements found for the selected course.</p>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>

</body>
</html>