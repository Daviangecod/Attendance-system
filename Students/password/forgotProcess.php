<?php
require __DIR__."/../config/database.php";

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// Check if the reset link is valid
if (isset($_GET['token']) && !empty($_GET['token'])) {
  $token = $_GET['token'];

  // Check if the token exists in the database
  $sql = "SELECT * FROM signin WHERE reset_token = '$token' AND reset_token_expiry > NOW()";
  $result = $connection->query($sql);

  if ($result->num_rows > 0) {
    // Token is valid
    $row = $result->fetch_assoc();
    $user_id = $row['user_id']; 

    // Redirect to a reset password form (replace with your actual form URL)
    header("Location: reset_password.php?user_id=$user_id");
    exit;
  } else {
    // Invalid token
    echo "Invalid or expired reset link.";
  }
} else {
  // No token provided
  echo "Reset link not provided.";
}

$connection->close();
?>
