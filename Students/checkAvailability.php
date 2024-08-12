<?php
// // check_availability.php
// error_reporting(E_ALL);
// require_once __DIR__.'/../config/database.php'; 

// if (isset($_POST['username']) && isset($_POST['email'])) {
//     $username = $_POST['username'];
//     $email = $_POST['email'];

//     // Check if the username exists
//     $query = "SELECT username FROM signup WHERE username = '$username'";
//     $result = mysqli_query($connection, $query);

//     if (mysqli_num_rows($result) > 0) {
//         echo 'Username is already taken.';
//     } else {
//         // Check if the email exists
//         $query = "SELECT email FROM signup WHERE email = '$email'";
//         $result = mysqli_query($connection, $query);

//         if (mysqli_num_rows($result) > 0) {
//             echo 'Email is already registered.';
//         } else {
//             echo 'Username and email are available.';
//         }
//     }
// }


// Database connection details
require_once __DIR__.'/../config/database.php';

// Check if both username and email are provided
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['dataType'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $dataType = $_POST['dataType'];

  // Escape user input to prevent SQL injection
  $username = mysqli_real_escape_string($conn, $username);
  $email = mysqli_real_escape_string($conn, $email);

  // Check if the username or email already exists
  $query = "SELECT * FROM signup WHERE username='$username' OR email='$email'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    // Username or email already exists
    echo 'taken'; 
  } else {
    // Username or email is available
    echo 'available'; 
  }
} else {
  echo 'error';
}
?>
