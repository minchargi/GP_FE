<?php
include "../../db_conn.php";
if (isset($_POST['submit'])) {
    $tprogram_id = $_POST['tprogram_id'];
    $tprogram_name = $_POST['tprogram_name'];

$sql = "INSERT INTO training_program(TProgram_ID, TProgram_Name) VALUES ('$tprogram_id','$tprogram_name')";
$result = $conn->query($sql);
if ($result == true) {
    echo "New record created successfully";
    header('location:../trainProg.php');
} else {
    echo "Error" . $sql . $conn->error;
}
}
?>

