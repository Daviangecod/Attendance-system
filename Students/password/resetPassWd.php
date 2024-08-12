<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
</head>
<body>
    <!-- reset-password.php -->
<form action="reset-process.php" method="post">
    <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
    <label for="new-password">New Password:</label>
    <input type="password" id="new-password" name="new-password" required>
    <label for="confirm-password">Confirm Password:</label>
    <input type="password" id="confirm-password" name="confirm-password" required>
    <button type="submit" name="reset-btn">Reset Password</button>
</form>

</body>
</html>