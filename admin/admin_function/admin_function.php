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

function addStudentToCourse($studentId, $trainingProgramId, $year, $ba_year)
{
    include '../../db_conn.php';

    // Prepare SQL statements for security and efficiency
    $stmt = $conn->prepare("SELECT u.* , c.Course_ID, c.Year
    FROM users u
    INNER JOIN course c ON u.TProgram_ID = c.TProgram_ID AND u.Year_Start = c.Year AND u.Progress = C.Bachelor_Year
    WHERE u.TProgram_ID  = ? AND c.Year = ? AND u.Progress = ? AND u.Role = 'Student'");
    $stmt->bind_param("sis", $trainingProgramId, $year, $ba_year);
    $stmt->execute();
    $result = $stmt->get_result();

    // Ensure a matching course exists
    if ($result->num_rows === 0) {
        return false; // Or handle the error as needed
    }
    while ($row = $result->fetch_assoc()) {
        // Fetch the course ID
        $courseId = $row['Course_ID'];

        // Prepare the SQL statement to insert student-course association
        $stmt = $conn->prepare("INSERT INTO grade (Student_ID , Course_ID, Year ) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $studentId, $courseId, $year);

        $stmt->execute();
    }
    $conn->close();
}

function delete_course_if_year_progress_mismatch() {
    include '../../db_conn.php';

    // Prepare SQL statements for security and efficiency
    $stmt = $conn->prepare("SELECT u.User_ID, c.Bachelor_Year, c.Year, c.TProgram_ID
    FROM grade g
    LEFT JOIN users u ON u.User_ID = g.Student_ID
    LEFT JOIN course c ON g.Course_ID = c.Course_ID  and c.Bachelor_Year=u.Progress and u.TProgram_ID = c.TProgram_ID
    WHERE u.Role = 'Student' AND c.Bachelor_Year IS NULL OR c.Year IS NULL OR c.TProgram_ID IS NULL;");
    $stmt->execute();
    $result = $stmt->get_result();

    // Ensure a matching course exists
    if ($result->num_rows === 0) {
        return false; // Or handle the error as needed
    }
    while ($row = $result->fetch_assoc()) {
        // Fetch the course ID

        // Prepare the SQL statement to insert student-course association
        $stmt = $conn->prepare("DELETE FROM grade WHERE Bachelor_Year is null or Year is null or TProgram_ID is null");


        $stmt->execute();
    }
    $conn->close();
  }
  
?>