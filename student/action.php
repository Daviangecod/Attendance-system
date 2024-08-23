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
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($username) || empty($password) || empty($email)) {
        $error = [
            'error' => "emptyvalues"
        ];
        
        redirect('signupStudents.php', $error);
    }
    else {

        // Hash user password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Create Users

        $query = "INSERT INTO signup(username, email, password) VALUES('$username', '$email', '$hashedPassword')";

        $result = mysqli_query($connection, $query);

        if($result) {
            $message = [
                'success' => "usercreated"
            ];
            
            redirect('dashboard.php', $message);
        }else {

            $error = [
                'error' => "usernotcreated"
            ];
            
            redirect('signupStudents.php', $error);
        }

    }


}




