<?php 
require __DIR__."/../config/database.php";
require __DIR__."../helper/redirect.php";
require __DIR__."../helper/debug.php";


if($_SERVER['REQUEST_METHOD'] !== "POST") {
    $error = [
        'error' => "invalidrequest"
    ];
    redirect('signupStudents.php', $error);
}
else {

    // Check if fields are empty

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)) {
        $error = [
            'error' => "emptyvalues"
        ];
        
        redirect('signupStudents.php', $error);
    }
    else {


        // Check username in database
        $query = "SELECT * FROM signin WHERE username = '$username'";
        $result = mysqli_query($connection, $query);

        // Check the result if you recieved any value from the database
        if(mysqli_num_rows($result) !== 0) {
        
            $user = mysqli_fetch_assoc($result); // Getting the users records as an associative array

            $hashedPassword = $user['password']; // Get the user's hashed password

            // Verify Password
            if(password_verify($password, $hashedPassword)) {

                // Start the session and save some user details in the session
                session_start();

                $_SESSION['loginID'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                $message = [
                    'success' => "loginsuccess"
                ];
                
                redirect('dashboard.php', $message);
            }
            else {
                $error = [
                    'error' => "invalidcredentials"
                ];
                redirect('signupStudents.php', $error);

            }
            
        }
        else {
            $error = [
                'error' => "invalidcredentials"
            ];
            redirect('signupStudents.php', $error);
        }


    }


}




