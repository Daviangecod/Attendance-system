<?php
// reset-process.php
if (isset($_POST['reset-btn'])) {
    $token = $_POST['token'];
    $newPassword = $_POST['new-password'];

    // Validate token and update password in your user table
    // (Assuming you have a database connection)

    echo "Password reset successful!";
}
?>
