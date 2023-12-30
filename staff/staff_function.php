<?php
include '../db_conn.php';
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

function addStudentsToCourse($course_id, $training_program_id) {
    // Fetch all students with the corresponding training program id
    $students = fetchStudentsByTrainingProgramId($training_program_id);

    // Loop through the students and add them to the course list
    foreach ($students as $student) {
        addStudentToCourse($course_id, $student['User_ID']);
    }
}

function fetchStudentsByTrainingProgramId($training_program_id) {
    $db = new PDO('mysql:host=localhost;dbname=project', 'root', '');

    // Replace with your actual SQL query to fetch students
    $stmt = $db->prepare('SELECT * FROM users WHERE TProgram_ID = :TProgram_ID');
    $stmt->bindParam(':TProgram_ID', $training_program_id);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addStudentToCourse($course_id, $student_id) {
    // Replace with your actual database connection code
    $db = new PDO('mysql:host=localhost;dbname=project', 'root', '');

    // Replace with your actual SQL query to add the student to the course list
    $stmt = $db->prepare('INSERT INTO course_list (Course_ID, Student_ID) VALUES (:Course_ID, :Student_ID)');
    $stmt->bindParam(':Course_ID', $course_id);
    $stmt->bindParam(':Student_ID', $student_id);
    $stmt->execute();
}


