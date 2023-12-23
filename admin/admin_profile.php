<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Teacher Account</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../admin/admin_profile.css">
        <link rel="stylesheet" href="../Teacher/navbar.css">
        <link rel="stylesheet" href="../Teacher/footer.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body> 
        <!-- Navbar-->
  <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <img class="logo" src="../images/logo-moi_2.svg" alt="logo" width="90" height="50.78">
          </a>
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../Teacher/announcement.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/manageAccount.html"><i class="fas fa-home"></i> Account</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-calendar"></i> Academic
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="../admin/curriculum.html">Curriculum</a></li>
                    </ul>
                </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-calendar"></i> System
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="../admin/systemSetting.html">System Settings</a></li>
                      <li><a class="dropdown-item" href="../admin/security.html">System Security</a></li>
                      <li><a class="dropdown-item" href="../admin/upgradeMaintance.html">Upgrade & Maintance</a></li>
                      <div class="dropdown-divider"></div>
                      <li><a class="dropdown-item" href="../admin/integrations.html">System Integrations</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../admin/manageStaff.php"><i class="fas fa-home"></i> Staff</a>
                  </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../admin/admin_profile.php">Account</a></li>
                    <li><a class="dropdown-item" href="../sign-in/logout.php">Logout</a></li>
                  </ul>
                </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
  </header>

        <!-- Main content -->
        <section>
          <div class="container-fluid">
            <div class="name-box">
              <div class="container">
                <span>Admin's Name</span>
              </div>
            </div>
            <div class="detail-box"> 
              <div class="container">
                <p><b>DOB:</b></p>
                <span>01/01/2001</span>
              </div>
              <div class="container">
                <p><b>Email:</b></p>
                <span>abc@gmail.com</span>
              </div>
              <div class="container">
                <p><b>Username:</b></p>
                <span>abcde12345</span>
              </div>
              <div class="container">
                <p><b>Password:</b></p>
                <span>********</span> <!-- Hide the password-->
              </div>
              <a href="../sign-in/FORgot/resetPass.php">
                <button>Change Password</button>
              </a>
            </div>
          </div>
      </section>
        
        <!-- Footer -->
        <div class="container-fluid mt-2">
          <footer>
              <div class="row">
                  <div class="col-md-4 infor">
                      <img class="white-logo" src="../images/white_logo.png">
                      <!--Address-->
                      <p class="detail"> <i class="fa-solid fa-house icon-footer"></i>
                          Address
                      </p>
                      <p class="text-detail"> A21 building, Vietnam Academy of Science and Technology, 18 Hoang Quoc Viet, Cau Giay, Hanoi</p>
                      <hr class="divider">
  
                      <!--Phone-->
                      <p class="detail"><i class="fa-solid fa-phone icon-footer"></i>
                      Phone</p>
                      <p class="text-detail"> +84-24 37 91 69 60</p>
                      <hr class="divider">
                      
                      <!--Email-->
                      <p class="detail"> <i class="fa-solid fa-envelope icon-footer"></i>
                          Email
                      </p>
                      <p class="text-detail">officeusth@usth.edu.vn</p>
                      <hr class="divider">
                      
                      <!--Contact-->
                      <p class="detail"> <i class="fa-solid fa-envelope icon-footer"></i>
                          Contact
                      <p class="text-detail">webmaster@usth.edu.vn</p>
                      <hr class="divider">
                      
                  </div>
  
                  
              </div>
          </footer>
      </div>

    </body>
</html>