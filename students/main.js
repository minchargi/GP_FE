function validateForm() {
    // Reset error messages
    document.getElementById("usernameError").innerText = "";
    document.getElementById("passwordError").innerText = "";

    // Get values from the form
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Username validation
    var usernameRegex = /^[a-zA-Z0-9_-]+$/;
    if (!usernameRegex.test(username)) {
      document.getElementById("usernameError").innerText = "Username contains invalid characters. Only letters, numbers, underscores, and hyphens are allowed.";;
      return; 
    }
    
    // Length constraints
    if (username.length < 3 || username.length > 20) {
      document.getElementById("usernameError").innerText = "Username length should be between 3 and 20 characters.";
      return;
    }

    // Password validation
    var passwordRegex = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if (!passwordRegex.test(password)) {
      document.getElementById("passwordError").innerText = "Password must be at least 8 characters with\n 1 number and 1 capital letter";
      return;
    }

    // If all validations pass, submit the form or perform further actions
    document.getElementById("signInForm").submit();

}

    