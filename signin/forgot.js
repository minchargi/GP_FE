function searchEmail() {
    // Reset error message
    document.getElementById("emailError").innerText = "";

    // Get the email value
    var email = document.getElementById("email").value;

    // Email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      document.getElementById("emailError").innerText = "Please enter a valid email address";
      return;
    }


    // Display a message for demonstration purposes
    alert("A password reset email has been sent to " + email);
  }