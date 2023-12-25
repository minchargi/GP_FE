<?php
  session_start();
  if(!isset($_SESSION["user_id"]))
  {
    header('location: ../sign-in');
  } 

  if ($row['Role'] === 'Staff') {
    header("Location: ../staff");
  } elseif ($row['Role'] === 'Teacher') {
    header("Location: ../teacher");
  } elseif ($row['Role'] === 'Student') {
    header("Location: ../students");
  }
?>