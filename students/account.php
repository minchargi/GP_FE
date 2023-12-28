<?php
include 'verifyStudent.php';
include 'student_function.php'
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>Student Account</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="../students/style.css">
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <!-- Navbar-->
  <?php include '../navbar/navbar.php'; ?>

  <!-- Main content -->
  <section>

    <?php $result = fetch_grades($user_id);
    $row = $result->fetch_assoc() ?>

    <div class="container-fluid">
      <div class="name-box">
        <div class="container">
          <span>
            <?php echo $row['FirstName'], ' ', $row['LastName']; ?>
          </span>
        </div>
      </div>
      <div class="detail-box">
        <div class="container">
          <p><b>DOB:</b></p>
          <span>01/01/2001</span>
        </div>
        <div class="container">
          <p><b>Email:</b></p>
          <span>
            <?php echo $row['Email']; ?>
          </span>
        </div>
        <div class="container">
          <p><b>Phone:</b></p>
          <span>
            <?php echo $row['Phone']; ?>
          </span>
        </div>
        <div class="container">
          <p><b>Training Program:</b></p>
          <span>
            <?php echo $row['TProgram_ID']; ?>
          </span>
        </div>
        <a href="../students/resetPass.php">
          <button>Change</button>
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../footer/footer.php'; ?>


</body>

</html>