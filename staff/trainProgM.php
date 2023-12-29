<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $progName = $_POST['progName'];

    header("Location: trainProg.php");
    exit();
}
?>
