<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">

</head>
<body>
    <div class="container mt-5 d-flex align-items-center justify-content-center">
        <div class=" col-md-6 theForm">
    
          <form id="signInForm" class="bg-white p-4 shadow rounded">
    
            <h2 class="text-center header_text">Sign In</h2>
    
            <!-- Username Input -->
            <div class="form-group">
              <label for="username" class="tittle_text">Username:</label>
              <input type="email" class="form-control" id="username" name="username" placeholder="Enter your email">
              <small class="error-message" id="usernameError"></small>
            </div>
    
            <!-- Password Input -->
            <div class="form-group">
              <label for="password" class="tittle_text">Password:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
              <small class="error-message" id="passwordError"></small>
            </div>
    
            <!-- Remember Me and Forgot Password -->
            <div class="form-group d-flex justify-content-between align-items-center">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <a class="link" href="forgot_pw.php">Forgot password?</a>
            </div>
    
            <!-- Sign In Button -->
            <button type="button" class="btn btn-primary btn-block btn-click" onclick="validateForm()">Sign In</button>
    
          </form>
    
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>