<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="forgot.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
</head>
<body>
    <div class="container mt-5 d-flex align-items-center justify-content-center">
        <div class="theForm">
    
          <form id="forgotPasswordForm" class="bg-white p-4 shadow rounded" 
            action="send_password_reset.php" method="post">
    
            <h2 class="text-center header_text">Reset Password</h2>
    
            <!-- Email Input -->
            <div class="form-group">
              <label for="email" class="tittle_text">Email:</label>
              <input type="email" class="form-control" id="email" name="email" 
                placeholder="Enter your email address" required>
              <small class="error-message" id="emailError"></small>
            </div>
    
            <!-- Reset Button -->
            <button type="submit" class="btn btn-primary btn-block btn-click">Reset</button>
          </form>
    
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous">
    </script>
</body>
</html>