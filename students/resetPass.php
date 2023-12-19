<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResetPass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">

</head>
<body>
    <div class="container mt-5 d-flex align-items-center justify-content-center">
        <div class="theForm">
    
          <form id="passwordResetForm" class="bg-white p-4 shadow rounded">
    
            <h2 class="text-center mb-4 header_text">Change Password</h2>

            <!-- Old Password Input-->
            <div class="form-group">
              <label for="oldPassword" class="tittle_text">Your Old Password</label>
              <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Enter your old password">
              <small class="error-message" id="oldPasswordError"></small>
            </div>
    
            <!-- Password Input -->
            <div class="form-group">
              <label for="password" class="tittle_text">New Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your new password">
              <small class="error-message" id="passwordError"></small>
            </div>
    
            <!-- Confirm Password Input -->
            <div class="form-group">
              <label for="confirmPassword" class="tittle_text">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your new password">
              <small class="error-message" id="confirmPasswordError"></small>
            </div>
    
            <!-- Change Password Button -->
            <button type="button" class="btn btn-primary btn-block btn-click" onclick="changePassword()">Change Password</button>
            
          </form>
    
        </div>
      </div>

      <script src="resetPass.js"></script>
</body>
</html>