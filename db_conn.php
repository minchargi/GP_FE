<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "123456";

    $db_name = "project";

    $conn = mysqli_connect($servername, $username, $password, $db_name);

    if(!$conn){
        echo "Connect failed!";
    }
?> 

