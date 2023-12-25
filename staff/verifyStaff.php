<?php
  session_start();
  if(!isset($_SESSION["user_id"]))
  {
    header('location: ../sign-in');
  } elseif ($_SESSION['role'] === 'Admin') {
    header("Location: ../admin");
  } elseif ($_SESSION['role'] === 'Teacher') {
    header("Location: ../teacher");
  } elseif ($_SESSION['role'] === 'Student') {
    header("Location: ../students");
  }
?>