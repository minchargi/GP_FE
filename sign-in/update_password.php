<?php
// Establish database connection
include '../db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = md5($_POST['newPassword']);
    $token = $_POST['token'];

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