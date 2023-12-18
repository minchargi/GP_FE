<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
</head>
<body>
    <div class="container-fluid">
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
                      <a class="nav-link" href="announce_index.php"><i class="fas fa-home"></i> Announcement</a>
                    </li>
                    <li class="nav-item ">
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
    </div>

    <div class="container mt-4">
        <p class="header-text">Contact Teacher</p>
        <form id="messageForm">
            <div class="mb-3">
                <label for="teacherEmail" class="form-label">Teacher Email</label>
                <input type="email" class="form-control" id="teacherEmail" placeholder="Enter teacher's email" required>
            </div>
            <div class="mb-3">
                <label for="contactMethod" class="form-label">Contact Method</label>
                <select class="form-select" id="contactMethod" required>
                    <option value="" disabled selected>Select contact method</option>
                    <option value="email">Email</option>
                    <option value="message">Message</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" required></textarea>
            </div>
            <button type="submit" class="btn btn-custom">Send Message</button>
        </form>
    
        <hr>
    
        <h2>Received Messages</h2>
        <ul id="receivedMessages" class="list-group">
            
        </ul>
    </div>
    

    <div class="container-fluid mt-4">
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="contact.js"></script>
</body>
</html>