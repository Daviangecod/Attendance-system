<?php 
require_once __DIR__."/../../vendor/autoload.php";
require_once __DIR__."/../../includes/db_connect.php";



if($_SERVER['REQUEST_METHOD'] !== "POST") {
    $error = [
        'error' => "invalidrequest"
    ];
    redirect(baseUrl("auth/login_student.php", $error));
}
else {

    // Check if fields are empty

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)) {
        $error = [
            'error' => "emptyfields"
        ];
        redirect(baseUrl("auth/login_student.php", $error));
    }
    else {


        // Check username in database
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($connection, $query);

        // Check the result if you recieved any value from the database
        if(mysqli_num_rows($result) !== 0) {
        
            $user = mysqli_fetch_assoc($result, MYSQLI_ASSOC); // Getting the users records as an associative array

            $hashedPassword = $user['password']; // Get the user's hashed password

            // Verify Password
            if(password_verify($password, $hashedPassword)) {

    
                    // Start the session and save some user details in the session
                    session_start();

                    $_SESSION['loginID'] = $user['id'];
                    $_SESSION['role'] = "student";
                    

                    $userId = $user['id'];

                    // Get students first and last name and save in the session

                    $query = "SELECT * FROM students WHERE user_id = $userId";
                    $result = mysqli_query($connection, $result);

                    if(mysqli_num_rows($result) !== 0) {
                        $student = mysqli_fetch_assoc($result, MYSQLI_ASSOC);
                        $_SESSION['fullname'] = $student['first_name'] . " " . $student['last_name'];
                    }

                    redirect(baseUrl('student/dashboard.php', ['message' => 'loginsuccess']));

            }
            else {
                $error = [
                    'error' => "invalidcredentials"
                ];

                redirect(baseUrl("auth/login_student.php", $error));
            }
            
        }
        else {
            $error = [
                'error' => "invalidcredentials"
            ];
            redirect(baseUrl("auth/login_student.php", $error));
        }


    }


}




