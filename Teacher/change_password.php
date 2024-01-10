<?php
    include 'verifyTeacher.php';
    include 'teacher_function.php';
    
    if(isset($_GET['error'])){
        $error = $_GET['error'];
    } else {
        $error = '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../sign-in/forgot.css">
    <link rel="stylesheet" href="./FontAwesome.Pro.6.4.2/css/all.css">
</head>
<body>
    <div class="container mt-5 d-flex align-items-center justify-content-center">
        <div class="theForm">
    
            <form id="passwordResetForm" class="bg-white p-4 shadow rounded"
                action="change_pass.php" method="post" onsubmit="return validatePassword()">
    
            <h2 class="text-center mb-4 header_text">Change Password</h2>
            
                        <!-- Password Input -->
            <div class="form-group">
                <label for="newPassword" class="tittle_text">Old Password:</label>
                <input type="password" class="form-control" id="oldPassword" name="oldPassword" 
                    placeholder="Enter your old password" required>
                <small class="error-message" id="passwordError"><?php echo $error ?></small>
            </div>
            <!-- Password Input -->
            <div class="form-group">
                <label for="newPassword" class="tittle_text">New Password:</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword" 
                    placeholder="Enter your new password" required>
                <small class="error-message" id="passwordError"></small>
            </div>
    
            <!-- Confirm Password Input -->
            <div class="form-group">
                <label for="confirmPassword" class="tittle_text">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your new password">
                <small class="error-message" id="confirmPasswordError"></small>
            </div>
    
            <!-- Reset Password Button -->
            <button type="submit" class="btn btn-primary btn-block btn-click" name="submit">Change Password</button>
            
            </form>

            <script>
                function validatePassword() {
                    var newPassword = document.getElementById("newPassword").value;
                    var confirmPassword = document.getElementById("confirmPassword").value;

                    if (newPassword !== confirmPassword) {
                        document.getElementById("passwordError").innerText = "Passwords do not match!";
                        return false; // Prevent form submission
                    } else {
                        return true; // Allow form submission
                    }
                }
            </script>
    
        </div>
    </div>
</body>
</html>