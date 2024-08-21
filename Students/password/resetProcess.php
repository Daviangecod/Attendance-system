<?php
require __DIR__."/../config/database.php";

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['user_id']) && isset($_POST['new_password'])) {
    $user_id = $_POST['user_id'];
    $new_password = $_POST['new_password'];

    // Hash the new password before storing it
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Update the user's password in the database
    $sql = "UPDATE signin SET password = '$hashed_password', reset_token = NULL, reset_token_expiry = NULL WHERE user_id = $user_id";

    if ($connection->query($sql) === TRUE) {
        // Password reset successful
        echo "Password reset successfully. You can now log in with your new password.";
    } else {
        // Error updating password
        echo "Error resetting password: " . $conn->error;
    }
} else {
    // No user ID or new password provided
    echo "Invalid request.";
}

$connection->close();
?>
