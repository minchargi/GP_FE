<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Training Programs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/trainProg.css">
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
          <button class="custom-button" data-bs-toggle="modal" data-bs-target="#trainProgM">
            <span class="button-content gap-4">
                Add
            </span>
        </button>
        </div>
      </div>

      <!-- Add courseProg Modal -->
      <div class="modal fade" id="trainProgM" tabindex="-1" role="dialog" aria-labelledby="trainProgMLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="trainProgMLabel">New Training Program</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for adding new (course) training program -->
                    <form id="trainProgMForm" action="../staff/trainProgM.php" method="post">
                        <div class="form-group">
                            <label for="progName">Program Name:</label>
                            <input type="text" class="form-control" id="progName" name="progName" required>
                        </div>

                        <button type="submit" class="btn btn-custom" name="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
      </div>

      <div class="training">
        <div class=" major-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCourse1" aria-expanded="false" aria-controls="collapseCourse1">
          Information and Communication Technology (ICT)
        </div>
        <div class="collapse" id="collapseCourse1">
          <div class="card card-body course-card">
            <ul class="trainMajor">
              <li><a class="yearMajor" href="../staff/courseList.php">Second Year</a></li>
              <li><a class="yearMajor" href="../staff/courseList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="training">
        <div class=" major-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCourse2" aria-expanded="false" aria-controls="collapseCourse2">
          Cyber Security (CS)
        </div>
        <div class="collapse" id="collapseCourse2">
          <div class="card card-body course-card">
            <ul class="trainMajor">
              <li><a class="yearMajor" href="../staff/courseList.php">Second Year</a></li>
              <li><a class="yearMajor" href="../staff/courseList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="training">
        <div class=" major-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCourse3" aria-expanded="false" aria-controls="collapseCourse3">
          Data Science (DS)
        </div>
        <div class="collapse" id="collapseCourse3">
          <div class="card card-body course-card">
            <ul class="trainMajor">
              <li><a class="yearMajor" href="../staff/courseList.php">Second Year</a></li>
              <li><a class="yearMajor" href="../staff/courseList.php">Third Year</a></li>
            </ul>
          </div>
        </div>
      </div>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>


    </body>
</html>