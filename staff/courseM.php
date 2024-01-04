<?php
include "../db_conn.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];


$sql = "INSERT INTO department(Department_ID, Department_Name) VALUES ('$id','$name')";
$result = $conn->query($sql);
if ($result == true) {
    echo "New record created successfully";
} else {
    echo "Error" . $sql . $conn->error;
}
}
?>
