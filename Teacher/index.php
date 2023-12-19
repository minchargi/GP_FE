<?php
    session_start();
    if(!isset($_SESSION["user_id"]))
    {
        header('location: ../sign-in');
    } else {
        header('location: announcement.php');
    }
?> 