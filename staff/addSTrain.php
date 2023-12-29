<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $progName = $_POST['progName'];

    $secondYearFile = $_FILES['secondYear'];
    $thirdYearFile = $_FILES['thirdYear'];

    $secondYearFileName = $secondYearFile['name'];
    $thirdYearFileName = $thirdYearFile['name'];

    $secondYearTmpPath = $secondYearFile['tmp_name'];
    $thirdYearTmpPath = $thirdYearFile['tmp_name'];

    $uploadDirectory = 'uploads/';

    move_uploaded_file($secondYearTmpPath, $uploadDirectory . $secondYearFileName);
    move_uploaded_file($thirdYearTmpPath, $uploadDirectory . $thirdYearFileName);

    header("Location: studentTrain.php");
    exit();
}
?>
