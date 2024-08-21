<?php
require __DIR__."/../config/database.php";

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

// Check if user is logged in (replace with your actual authentication logic)
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Handle account deletion request
    if (isset($_POST['delete_account'])) {
        // Delete user's data (you may need to delete associated data in other tables)
        $sql = "DELETE FROM signin WHERE username = $username";
        
        if ($connection->query($sql) === TRUE) {
            // Account deleted successfully
            session_destroy(); // Destroy the user session
            echo "Account deleted successfully.";
            // Redirect to a logout or home page
            header("Location: logout.php"); // Replace with your desired redirect
            exit;
        } else {
            // Error deleting account
            echo "Error deleting account: " . $connection->error;
        }
    } else {
        // Show the account deletion confirmation form
        ?>
        <h2>Are you sure you want to delete your account?</h2>
        <p>This action is irreversible. All your data will be permanently deleted.</p>
        <form method="post">
            <input type="hidden" name="delete_account" value="true">
            <button type="submit">Delete Account</button>
        </form>
        <?php
    }
} else {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}

$connection->close();
?>
