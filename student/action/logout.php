<?php
session_start(); // Start the session
require_once __DIR__."/../../vendor/autoload.php";



// Check if the user is logged in
if (isset($_SESSION['loginID'])) {

    // Unset all session variables
    unset($_SESSION['loginID']);

    // Destroy the session
    session_destroy();

    // Redirect to the login page (replace with your actual login page URL)

    $message = [
        'message' => 'logoutsuccess'
    ];
    
    redirect(baseUrl("auth/login_student.php", $message));
    
}
