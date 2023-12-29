<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Students</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/studentTrain.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/staffnav.php'; ?>

        <!-- Main content -->
        <h1>Training Programs</h1>

      <div class="container mt-4">
        <div class="btn-container">
          <button class="custom-button" data-bs-toggle="modal" data-bs-target="#add">
            <span class="button-content gap-4">
                Add
            </span>
        </button>

      <div class="training">
        <div class=" major-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStudent1" aria-expanded="false" aria-controls="collapseStudent1">
          Information and Communication Technology (ICT)
        </div>
        <div class="collapse" id="collapseStudent1">
          <div class="card card-body course-card">
            <ul class="trainMajor">
              <li><a class="yearMajor" href="../staff/studentList.php">Second Year</a></li>
              <li><a class="yearMajor" href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="training">
        <div class=" major-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStudent2" aria-expanded="false" aria-controls="collapseStudent2">
          Cyber Security (CS)
        </div>
        <div class="collapse" id="collapseStudent2">
          <div class="card card-body course-card">
            <ul class="trainMajor">
              <li><a class="yearMajor" href="../staff/studentList.php">Second Year</a></li>
              <li><a class="yearMajor" href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="training">
        <div class=" major-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStudent3" aria-expanded="false" aria-controls="collapseStudent3">
          Data Science (DS)
        </div>
        <div class="collapse" id="collapseStudent3">
          <div class="card card-body course-card">
            <ul class="trainMajor">
              <li><a class="yearMajor" href="../staff/studentList.php">Second Year</a></li>
              <li><a class="yearMajor" href="../staff/studentList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
      </div>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>



    </body>
</html>