function changePassword() {
    // Reset error messages
    document.getElementById("passwordError").innerText = "";
    document.getElementById("confirmPasswordError").innerText = "";

    // Get password values
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    // Password validation
    var passwordRegex = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if (!passwordRegex.test(password)) {
      document.getElementById("passwordError").innerText = "Password must be at least 8 characters with 1 number and 1 capital letter";
      return;
    }

    // Confirm Password validation
    if (password !== confirmPassword) {
      document.getElementById("confirmPasswordError").innerText = "Passwords do not match";
      return;
    }
    

    // Display a message for demonstration purposes
    alert("Password changed successfully!");
  }