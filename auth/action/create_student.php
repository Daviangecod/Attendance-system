<?php

require_once __DIR__."/../../vendor/autoload.php";
require_once __DIR__."/../../includes/db_connect.php";


if($_SERVER['REQUEST_METHOD'] !== "POST"){
    redirect(path: "register.php", query:["error" => "invalidrequest"]);
}
else{
                                                                                                                                                                                                                    
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];


    if(empty($password) || empty($email) || empty($gender)) {
        $error = [
            'error' => "emptyfields"
        ];
        
        redirect(baseUrl("auth/register_student.php", $error));
    }
    else {

        // Hash user password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $isAdmin = 0;

        // Create Users

        $query = "INSERT INTO users(is_admin, email, gender, password) VALUES($isAdmin, '$email', '$gender',  '$hashedPassword')";

        $result = mysqli_query($connection, $query);

        if($result) {
            $message = [
                'success' => "usercreated"
            ];

            redirect(baseUrl("auth/login_student.php", $message));
        
        }else {

            $error = [
                'error' => "usernotcreated"
            ];
            
            redirect(baseUrl("auth/register_student.php", $error));
        }

    }


}


?>