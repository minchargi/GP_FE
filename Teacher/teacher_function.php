<?php

function fetch_course($user_id, $year, $ba_year, $tp_id)
{
    include '../db_conn.php';
    $sql = "SELECT * FROM course WHERE Teacher_ID = '$user_id' AND Year = '$year'  AND Bachelor_Year = '$ba_year' AND TProgram_ID = '$tp_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}


function fetch_course_detail($course_id, $year)
{
    include '../db_conn.php';
    $sql = "SELECT * FROM `course` WHERE `Course_ID`='$course_id' AND Year = $year";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function viewProfile($user_id)
{
    include '../db_conn.php';
    $sql = "SELECT * FROM users WHERE User_ID = '$user_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_program_year($user_id)
{
    include '../db_conn.php';
    $sql = "SELECT DISTINCT tp.Year
            FROM users u
            INNER JOIN department d on u.Department = d.Department_ID 
            INNER JOIN training_program tp on d.Department_ID = tp.Department_ID 
            WHERE u.User_ID = '$user_id'
            ORDER BY tp.Year DESC";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_program($user_id, $year)
{
    include '../db_conn.php';
    $sql = "SELECT  tp.*
            FROM users u
            INNER JOIN department d on u.Department = d.Department_ID 
            INNER JOIN training_program tp on d.Department_ID = tp.Department_ID 
            WHERE u.User_ID = '$user_id' and tp.Year = $year
            ORDER BY tp.Year DESC";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_course_student_list($course_id, $year)
{
    include '../db_conn.php';
    $sql = "SELECT u.User_ID,CONCAT(u.FirstName,' ',u.LastName) As FullName,u.Email,u.Phone,u.Dob
    FROM users u
    INNER JOIN grade g ON g.Student_ID = u.User_ID
    WHERE g.Year = $year AND g.Course_ID = '$course_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_course_grade($course_id, $year)
{
    include '../db_conn.php';
    $sql = "SELECT u.User_ID,CONCAT(u.FirstName,' ',u.LastName) As FullName,g.*
    FROM grade g
    INNER JOIN users u ON  u.User_ID = g.Student_ID
    WHERE g.Year = $year AND g.Course_ID = '$course_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_attendance($student_id, $course_id, $session)
{
    include '../db_conn.php';
    $sql = "SELECT *
    FROM attendance
    WHERE Student_ID = '$student_id' AND Course_ID = '$course_id' AND Session = '$session'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function calculate_overall_grade($attendance_grade, $mid_grade, $final_grade, $attendance_percent, $mid_percent, $final_percent)
{
    $overall_grade = ($attendance_grade * $attendance_percent) + ($mid_grade * $mid_percent) + ($final_grade * $final_percent);
    return $overall_grade;
}

function update_overall_grade($student_id, $course_id, $year, $overall_grade)
{
    include '../db_conn.php';

    // Use prepared statements for security
    $stmt = $conn->prepare("UPDATE grade SET Overall = ?
                            WHERE Student_ID = ? and Course_ID = ? AND Year = ?");
    $stmt->bind_param("sssi", $overall_grade, $student_id, $course_id, $year);

    // Execute the update and check the result
    $stmt->execute();
}
function overall_grade($course_id, $year)
{
    include '../db_conn.php';

    // Use prepared statements for security and clarity
    $stmt = $conn->prepare("SELECT c.Attendance_Percentage, c.Midterm_Percentage, c.Final_Percentage, c.Year, g.*
                             FROM course c
                             INNER JOIN grade g ON c.Course_ID = g.Course_ID
                             WHERE c.Course_ID = ? AND c.Year = ?");
    $stmt->bind_param("si", $course_id, $year);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch results and handle potential errors
    if ($result->num_rows === 0) {
        // Handle the case where no data is found
        return null; // Or provide a default value or take other actions
    }

    while ($row = $result->fetch_assoc()) {
        // Access values directly from the fetched row
        $student_id = $row['Student_ID'];
        $attendance_grade = $row['Attendance'];
        $mid_grade = $row['Midterm'];
        $final_grade = $row['Final'];
        $attendance_percent = $row['Attendance_Percentage'] / 100;
        $mid_percent = $row['Midterm_Percentage'] / 100;
        $final_percent = $row['Final_Percentage'] / 100;

        $overall_grade = calculate_overall_grade($attendance_grade, $mid_grade, $final_grade, $attendance_percent, $mid_percent, $final_percent);
        update_overall_grade($student_id, $course_id, $year, $overall_grade);
    }
    $conn->close();
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

function next_year(){
    include '../db_conn.php';
    $sql ="INSERT INTO Year () VALUES ()";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_announcement($teacher_id)
{
    include '../db_conn.php';
    $sql = "SELECT *
    FROM announcements
    WHERE created_by = '$teacher_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_course_announcement($course_id, $year)
{
    include '../db_conn.php';
    $sql = "SELECT *
    FROM announcements
    WHERE Year = $year And Course_ID = '$course_id'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function fetch_student($tp_id, $progress)
{
    include '../db_conn.php';
    $sql = "SELECT *
    FROM users
    WHERE TProgram_ID = '$tp_id' AND Progess = '$progress'";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function addStudentToCourse($trainingProgramId, $year, $ba_year)
{
    include '../db_conn.php';

    // Prepare SQL statements for security and efficiency
    $stmt = $conn->prepare("SELECT u.* , c.Course_ID, c.Year, c.Bachelor_Year
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
        $studentId = $row['User_ID'];

        // Prepare the SQL statement to insert student-course association
        $stmt = $conn->prepare("INSERT INTO grade (Student_ID , Course_ID, Year ) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $studentId, $courseId, $year);

        $stmt->execute();
    }
    $conn->close();
    echo "!";
}
