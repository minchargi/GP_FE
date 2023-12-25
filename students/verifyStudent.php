<?php
  session_start();
  if(!isset($_SESSION["user_id"]))
  {
    header('location: ../sign-in');
  } 

  if ($row['Role'] === 'Admin') {
    header("Location: ../admin");
  } elseif ($row['Role'] === 'Teacher') {
    header("Location: ../teacher");
  } elseif ($row['Role'] === 'Staff') {
    header("Location: ../staff");
  }
?>