<!-- ask ai the code for the logout page and it should redirect to the signup page -->
<?php
// Initialize the session
session_start();

// Unset all session variables
$_SESSION = array();
session_destroy();

// Redirect to the sign-up page (change 'signup.php' to the actual page)
header("Location: project1/att.php");
exit(); // Ensure no further code execution
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        /* Style for the custom alert */
        .custom-alert {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: none;
        }
    </style>
    <!-- Include any other necessary styles or scripts -->
</head>
<body>

 <!-- Custom alert container -->
 <div class="custom-alert" id="customAlert">
        You have successfully logged out!
    </div>
    <!-- Your other content goes here -->

    <!-- Display an alert message -->
    <script>
        alert("You have successfully logged out!");

        //  Example JavaScript to show the alert
    
         // Simulate a successful logout
         setTimeout(function() {
            document.getElementById('customAlert').style.display = 'block';
        }, 2000); // Show the alert after 2 seconds (adjust as needed)
    </script>
     
</body>
</html>