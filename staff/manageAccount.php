<!DOCTYPE html>
<html lang="en-US">
    <head>       
        <title>Manage Accounts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/manageAccount.css">
        <script scr="../staff/announce.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/staffnav.php'; ?>

        <!-- Main content -->
        <div class="container mt-4">
          <p class="header-text">Manage Account</p>
        </div>
        <div class= "container mt-4">
            <div class="row">
                <div class="col-md-6">
                <!-- Student Account Button -->
                <a href="../staff/studentDept.php" class="btn custom-button mb-3">
                    Student Account
                    <div class="total">Total: 10</div>
                </a>
                </div>
                <div class="col-md-6">
                        <!-- Teacher Account Button -->
                    <a href="../staff/teacherDept.php" class="btn custom-button mb-3">
                    Teacher Account
                    <div class="total">Total: 10</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>
    </body>
</html>