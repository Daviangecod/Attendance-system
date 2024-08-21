<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {

    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page (replace with your actual login page URL)
    header("Location: logoutMessage.php");
    exit;
} else {
    // User is not logged in, redirect to the login page
    header("Location: logoutMessage.php");
    exit;
}
?>


