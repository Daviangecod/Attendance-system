
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
    <style>

    </style>
</head>
<body>
    <div class="container">
<form action="forgotProcess.php" method="POST">
    <label for="email">Enter your email:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit" name="forgot-btn">Send Reset Link</button>
</form>
</div>
</body>
</html>