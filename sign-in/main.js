function validateForm() {
    // Reset error messages
    document.getElementById("usernameError").innerText = "";
    document.getElementById("passwordError").innerText = "";

    // Get values from the form
    var account = document.getElementById("user_id").value;
    var password = document.getElementById("password").value;

    // Email validation
    //var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //if (!emailRegex.test(username)) {
    //  document.getElementById("usernameError").innerText = "Please enter a valid email address";
    //  return;
    //}

    // Password validation
    //var passwordRegex = /^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
    //if (!passwordRegex.test(password)) {
    //  document.getElementById("passwordError").innerText = "Password must be at least 8 characters with 1 number and 1 capital letter";
    //  return;
    //}
    console.log("111");
    // If all validations pass, submit the form or perform further actions
    document.getElementById("signInForm").submit();
  }