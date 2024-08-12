<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Generate a unique salt
    $salt = uniqid();

    // Hash the password with the salt
    $hashedPassword = password_hash($password . $salt, PASSWORD_BCRYPT);

    // Save the username, hashed password, and salt in the database
    // (Insert into the 'users' table)
    // Redirect to login page or show success message
}
?>
