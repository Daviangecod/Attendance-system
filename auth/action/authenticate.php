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

    if(empty($email) || empty($password)) {
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
        
            $user = mysqli_fetch_assoc($result); // Getting the users records as an associative array

            $hashedPassword = $user['password']; // Get the user's hashed password

            // Verify Password
            if(password_verify($password, $hashedPassword)) {

                // Check if user is admin or not
    
                   if($user['is_admin'] == 0) {

                                // Start the session and save some user details in the session
                                session_start();

                                $_SESSION['loginID'] = $user['id'];
                                $_SESSION['role'] = "student";
                                

                                $userId = $user['id'];

                                // Get students first and last name and save in the session

                                $query = "SELECT * FROM students WHERE user_id = $userId";
                                $result = mysqli_query($connection, $query);

                                if(mysqli_num_rows($result) !== 0) {
                                    $student = mysqli_fetch_assoc($result);
                                    $_SESSION['fullname'] = $student['first_name'] . " " . $student['last_name'];
                                }

                                redirect(baseUrl('student/dashboard.php', ['message' => 'loginsuccess']));

                   }
                   elseif($user['is_admin'] == 1) {


                                session_start();

                                $_SESSION['loginID'] = $user['id'];
                                $_SESSION['username'] = $user['username'];


                                 // Get admins first and last name and save in the session

                                 $query = "SELECT * FROM admins WHERE user_id = $userId";
                                 $result = mysqli_query($connection, $query);
 
                                 if(mysqli_num_rows($result) !== 0) {
                                     $admin = mysqli_fetch_assoc($result);
                                     $_SESSION['fullname'] = $admin['first_name'] . " " . $admin['last_name'];
                                 }
 
                
                                $message = [
                                    'success' => "loginsuccess"
                                ];
                                
                                redirect(baseUrl('admin/dashboard.php', $message));

                   }

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




