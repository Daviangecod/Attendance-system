<?php

require __DIR__."/../config/database.php";

if($_SERVER['REQUEST_METHOD'] !== "POST"){
    redirect(path: "../signupAdmin.php", query:["error" => "invalidrequest"]);
}
else{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
$username = $_POST['username'];
$password = $_POST['password'];

    // Write an Insert Query

    /* Insert into table_name (column1, column2, column3,..) 
    
    VALUES(value1, value2, value3,...)
    */

    $query = "INSERT INTO admin( username, password) VALUES( '$username', '$password')";

    $result = mysqli_query($connection, $query);

if($result == true){
    header('Location: dashboard.php?success=1');
    exit();
}


}

session_start();
require __DIR__.'/../config/database.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check for admin credentials
    $admin_query = "SELECT * FROM roles WHERE username = '$username' AND password = '$password' AND role = 'admin'";
    $admin_result = mysqli_query($connection, $admin_query);

    if (mysqli_num_rows($admin_result) > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'admin';
        header("location: dashboard.php"); 
        exit; 
    } else {
        // Check for regular user credentials
        $user_query = "SELECT * FROM signup WHERE email = '$username' AND password = '$password'";
        $user_result = mysqli_query($connection, $user_query);

        if (mysqli_num_rows($user_result) > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'user';
            header("location: user_dashboard.php"); 
            exit; 
        } else {
            echo "Invalid Login Credentials.";
        }
    }
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        // Redirect to a non-admin page or display an error message.
        header("location: signupAdmin.php"); 
        exit; 
    }
}

?>




?>