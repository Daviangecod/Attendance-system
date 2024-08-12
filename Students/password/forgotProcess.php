<?php
// forgot-process.php
if (isset($_POST['forgot-btn'])) {
    $email = $_POST['email'];

    // Generate a random token (you can use a better method)
    $token = bin2hex(random_bytes(32));

    // Insert email and token into the password_reset table
    // (Assuming you have a database connection)
    $query = "INSERT INTO passwordreset (email, token) VALUES ('$email', '$token')";
    // Execute the query here

    // Send an email to the user with the reset link
    $resetLink = "https://yourwebsite.com/reset-password.php?token=$token";
    $message = "Click the link below to reset your password:\n$resetLink";
    mail($email, "Password Reset", $message);

    echo "Password reset link sent to your email!";
}
?>
