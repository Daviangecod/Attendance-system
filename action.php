<?php

require __DIR__."../config/database.php";
require __DIR__."/Students/helper/redirect.php";


if($_SERVER['REQUEST_METHOD'] !== "POST"){
    redirect(path: "register.php", query:["error" => "invalidrequest"]);
}
else{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$batch = $_POST['batch'];
$gender = $_POST['gender'];
$password = $_POST['password'];

    // Write an Insert Query

    /* Insert into table_name (column1, column2, column3,..) 
    
    VALUES(value1, value2, value3,...)
    */

    if(empty($username) || empty($password) || empty($email) || empty($fullname) || empty($batch) || empty($gender)) {
        $error = [
            'error' => "emptyvalues"
        ];
        
        redirect('register.php', $error);
    }
    else {

        // Hash user password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Create Users

        $query = "INSERT INTO signin(fullname, username, email, batch, gender, password) VALUES('$fullname','$username', '$email', '$batch', 'gender', '$hashedPassword')";

        $result = mysqli_query($connection, $query);

        if($result) {
            $message = [
                'success' => "usercreated"
            ];
            
            redirect('Students/dashboard.php', $message);
        }else {

            $error = [
                'error' => "usernotcreated"
            ];
            
            redirect('register.php', $error);
        }

    }


}


?>