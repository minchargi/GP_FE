<?php
  session_start();
  if(!isset($_SESSION["user_id"]))
  {
    header('location: ../sign-in');
  } elseif ($_SESSION['role'] === 'Admin') {
    header("Location: ../admin");
  } elseif ($_SESSION['role'] === 'Teacher') {
    header("Location: ../teacher");
  } elseif ($_SESSION['role'] === 'Staff') {
    header("Location: ../staff");
  } else {
    $user_id = $_SESSION["user_id"];
    $role = $_SESSION['role'];
  }
?>