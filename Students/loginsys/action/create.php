<?php 

require "../config/database.php";
require "../helper/redirect.php";
require "../helper/debug.php";


if($_SERVER['REQUEST_METHOD'] !== "POST") {
    $error = [
        'error' => "invalidrequest"
    ];
    redirect('../register.php', $error);
}
else {

    // Check if fields are empty

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)) {
        $error = [
            'error' => "emptyvalues"
        ];
        
        redirect('../register.php', $error);
    }
    else {

        // Hash user password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Create Users

        $query = "INSERT INTO users(username, password) VALUES('$username', '$hashedPassword')";

        $result = mysqli_query($connection, $query);

        if($result) {
            $message = [
                'success' => "usercreated"
            ];
            
            redirect('../register.php', $message);
        }else {

            $error = [
                'error' => "usernotcreated"
            ];
            
            redirect('../register.php', $error);
        }

    }


}




