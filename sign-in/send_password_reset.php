<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

include '../db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']); // Prevent SQL injection

    // Check if the email exists in the database
    $checkSql = "SELECT * FROM users WHERE email=?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $result = $checkStmt->get_result();
    
    if ($result->num_rows > 0) { // Email exists
        $resetToken = bin2hex(random_bytes(32));
        $resetTokenExpiration = date('Y-m-d H:i:s', strtotime('+1 hour'));

        $sql = "UPDATE users SET reset_token=?, reset_token_expiration=? WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $resetToken, $resetTokenExpiration, $email);
        $stmt->execute();
        $stmt->close();

        // Using PHPMailer to send the email
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  // Update this with your SMTP server details
            $mail->SMTPAuth = true;
            $mail->Username = 'longnguyen300900@gmail.com'; // SMTP username
            $mail->Password = 'vohbztvvadmagyfs'; // SMTP password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            //Recipients
            $mail->setFrom("noreply@example.com", "No Reply"); // Set the "From" name as "No Reply"
            $mail->addAddress($email);     // Add a recipient

            // Set the reply-to address
            $mail->addReplyTo('noreply@example.com', 'No Reply');

            //Content
            $mail->isHTML(false);   // Set email format to plain text
            $mail->Subject = 'Password Reset';
            $mail->Body    = "To reset your password, click the following link:\n\nhttp://localhost/GP_FE/sign-in/reset_password.php?token=$resetToken";

            $mail->send();
            // Use JavaScript to display an alert with the message
            echo '<script>alert("An email with instructions to reset your password has been sent to ' . $email . '");</script>';
            $base_url = "../sign-in/index.php";
            header("Refresh: 0; url=" . $base_url);
        } catch (Exception $e) {
            echo "Error sending email: " . $mail->ErrorInfo;
        }
    } else {
        echo '<script>alert("Email address not found in our records.");</script>';
        $forgot_pw_url = "../sign-in/forgot_password.php";
        header("Refresh: 0; url=" . $forgot_pw_url);
    }
    
    $checkStmt->close();
}

$conn->close();
?>