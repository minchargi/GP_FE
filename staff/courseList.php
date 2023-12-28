<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../staff/courseList.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="course.js"></script>

</head>
<body>
    
    <!-- Navbar-->
    <?php include '../navbar/staffnav.php'; ?>

    </div>
    <div class="container mt-4">
        <p class="header_text">Courses</p>
        <div class="button-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#createClassModal">
                <span class="button-content gap-4">
                    <i class="fas fa-plus-circle"></i>
                    Create Class
                </span>
            </button>
        </div>
    </div>
    
    <!-- Create Class Modal -->
    <div class="modal fade" id="createClassModal" tabindex="-1" role="dialog" aria-labelledby="createClassModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createClassModalLabel">Create Class</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for creating a class -->
                    <form id="createClassForm" action="../staff/create_class.php" method=post>
                        <div class="form-group">
                            <label for="classCode">Class Code:</label>
                            <input type="text" class="form-control" id="classCode" name="classCode" required>
                        </div>                        
                        <div class="form-group">
                            <label for="className">Class Name:</label>
                            <input type="text" class="form-control" id="className" name="className" required>
                        </div>
                        <div class="form-group">
                            <label for="tprogram">Training program:</label>
                            <input type="text" class="form-control" id="tprogram" name="tprogram" required>
                        </div>
                        <div class="form-group">
                            <label for="optional">Optional:</label>
                            <input type="hidden" name="optional" value="0">
                            <input type="checkbox" name="optional" value="1">
                        </div>

                        <button type="submit" class="btn btn-custom" name="submit">Create Class</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
   <div class="container mt-4">
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
        <div class="courseDetail">
            <a class="link_course" href="../staff/courseOverview.php">Machine Learning and Data Mining</a>
        </div>
   </div>
   <!-- Footer -->
   <?php include '../footer/footer.php'; ?>


  </body>
</html>