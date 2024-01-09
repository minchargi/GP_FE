<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST['newPassword'];
    $token = $_POST['token'];

    // Directly use the new password (without hashing)
    $passwordToUpdate = $newPassword;

    // Update the user's password using prepared statements to prevent SQL injection
    $sql = "UPDATE users SET password=?, reset_token=null, reset_token_expiration=null WHERE reset_token=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $passwordToUpdate, $token);
    
    if ($stmt->execute()) {
        echo '<script>
            alert("Password updated successfully. You can now log in with your new password.");
        </script>';
        $base_url = "../sign-in/index.php";
        header("Refresh: 0; url=" . $base_url);
    } else {
        echo "Error updating password: " . $conn->error;
    }
    
    $stmt->close();
    $conn->close();
    exit;
}
?>