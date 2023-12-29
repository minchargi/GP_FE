<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Teacher List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/departments.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/staffnav.php'; ?>

        <!-- Main content -->
        <h1>Teacher List</h1>
        <div class="container mt-4">
          <div class="btn-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#departM">
              <span class="button-content gap-4">
                  Add
              </span>
          </button>
          </div>
        </div>
        <!-- Add Teacher List Modal-->
        <div class="modal fade" id="departM" tabindex="-1" role="dialog" aria-labelledby="departMLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="departMLabel">Add Teacher</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for adding new teacher -->
                        <form id="departForm" action="../staff/departM.php" method="post">
                            <div class="form-group">
                                <label for="teacherDept">Dept:</label>
                                <input type="text" class="form-control" id="teacherDept" name="teacherDept" required>
                            </div>
                            <div class="form-group">
                                <label for="teacherName">Teacher Name:</label>
                                <input type="text" class="form-control" id="teacherName" name="teacherName" required>
                            </div>
                            <div class="form-group">
                                <label for="teacherDOB">Date of birth:</label>
                                <input type="date" class="form-control" id="teacherDOB" name="teacherDOB" required>
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">Phone number:</label>
                                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
                            </div>
                            <div class="form-group">
                              <label for="teacherEmail">Email:</label>
                              <input type="email" class="form-control" id="teacherEmail" name="teacherEmail" required>
                            </div>
                            
                            <button type="submit" class="btn btn-custom" name="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-2">
          <table class="table table-bordered table-hover">
              <thead>
                <tr class="tb-row">
                  <th class="td-head" scope="col">Dept.</th>
                  <th class="td-head" scope="col">Name</th>
                  <th class="td-head" scope="col">DOB</th>
                  <th class="td-head" scope="col">Phone number</th>
                  <th class="td-head" scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">0987654321</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
              </tbody>
            </table>
      </div>

  
       </script>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>

    </body>
</html>