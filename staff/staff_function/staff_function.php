<?php

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

function fetch_year(){
    include '../db_conn.php';
    $sql = "SELECT * FROM year";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_department()
{
    include '../db_conn.php';
    $sql = "SELECT Department_Name FROM department";
    $result = $conn->query($sql);
    $conn->close();
    return $result ;
}

function cal_credit($year)
{
    include '../db_conn.php';
    $stmt = $conn->prepare("SELECT u.*, SUM(c.Number_credit) AS TotalCredits 
    FROM `users` u 
    INNER JOIN `grade` g 
    ON u.User_ID = g.Student_ID
    INNER JOIN `course` c 
    ON c.Course_ID = g.Course_ID AND c.Year = g.Year
    WHERE u.Progress=c.Bachelor_Year AND g.Overall >= 10
    GROUP BY g.Student_ID;");
    $stmt->bind_param("s", $year);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        return null; // Or handle no data found appropriately
    }

    $creditSummary = [];
    while ($row = $result->fetch_assoc()) {
        $student_id = $row['Student_ID'];
        $totalCredits = $row['TotalCredits'];

        $creditSummary[$student_id] = $totalCredits;

        if ($totalCredits >= 40) {
            pass_year($student_id);
        }
    }
    return $creditSummary;
}
function pass_year($student_id)
{
    include '../db_conn.php';
    $sql = "UPDATE Users SET Progress = 'B2'
    WHERE User_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $student_id);
    $stmt->execute();
}