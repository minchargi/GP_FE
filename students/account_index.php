<?php

  include '../db_conn.php';
  session_start();
  if(!isset($_SESSION["user_id"]))
  {
    header('location: ../sign-in');
  } else {
    $user_id = $_SESSION["user_id"];
    $sql = "SELECT * FROM users WHERE User_ID = '$user_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
  
?>

<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Student Account</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="footer.css">
        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <header>
          <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="#">
              <img src="../images/logo-moi_2.svg" alt="logo" width="90" height="50.78">
            </a>
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="announce_index.php"><i class="fas fa-home"></i> Announcement</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="course-overview_index.php"> 
                      <i class="fas fa-book"></i> Course
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fa-solid fa-phone"></i> Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-calendar"></i> Timetable
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="https://usth.edu.vn/en/timetableo-of-year-2-program-in-information-and-communication-technology-5959/">Second Year</a></li>
                      <li><a class="dropdown-item" href="https://usth.edu.vn/en/timetable-of-year-3-ict-5961/">Third Year</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-question-circle"></i> </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="account_index.php">
                      <i class="fas fa-user-circle"></i> 
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>

        <!-- Main content -->
        <section>
            <div class="container-fluid">
              <div class="name-box">
                <div class="container">
                  <span><?php echo $row['FirstName'],' ',$row['LastName']; ?></span>
                </div>
              </div>
              <div class="detail-box"> 
                <div class="container">
                  <p><b>DOB:</b></p>
                  <span>01/01/2001</span>
                </div>
                <div class="container">
                  <p><b>Email:</b></p>
                  <span><?php echo $row['Email']; ?></span>
                </div>
                <div class="container">
                  <p><b>Phone:</b></p>
                  <span><?php echo $row['Phone']; ?></span>
                </div>
                <div class="container">
                  <p><b>Training Program:</b></p>
                  <span><?php echo $row['TProgram_ID']; ?></span>
                </div>
                <div class="container">
                  <p><b>Password:</b></p>
                  <span>********</span> <!-- Hide the password-->
                </div>
                <a href="resetPass.php">
                  <button>Change</button>
                </a>
              </div>
            </div>
        </section>
        <?php       
              }
            }
          }
        ?>   
        
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