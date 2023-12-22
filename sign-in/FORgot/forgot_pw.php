<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForgotPass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">

</head>
<body>
    <div class="container mt-5 d-flex align-items-center justify-content-center">
        <div class="theForm">
    
          <form id="forgotPasswordForm" class="bg-white p-4 shadow rounded">
    
            <h2 class="text-center header_text">Find Your Account</h2>
    
            <!-- Email Input -->
            <div class="form-group">
              <label for="email" class="tittle_text">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
              <small class="error-message" id="emailError"></small>
            </div>
    
            <!-- Search Button -->
            <button type="button" class="btn btn-primary btn-block btn-click" onclick="searchEmail()">Search</button>
            <div>
            <a class="link" href="../sign-in/FORgot/resetPass.php">Reset?</a>
            </div>
          </form>
    
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script  src="forgot.js"></script>
</body>
</html>