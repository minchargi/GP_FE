<?php
function fetch_department()
{
    include '../db_conn.php';
    $sql = "SELECT Department_Name FROM departments";
    $result = $conn->query($sql);

    $departments = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $departments[] = array('id' => $row['id'], 'name' => $row['name']);
        }
    } else {
        echo "0 results";
    }

    $conn->close();

    echo json_encode($departments);
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
