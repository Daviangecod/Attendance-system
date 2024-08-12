<?php 

session_start();

require "../config/database.php";
require "../helper/redirect.php";
require "../helper/debug.php";


if($_SERVER['REQUEST_METHOD'] !== "POST") {
    $error = [
        'error' => "invalidrequest"
    ];
    redirect('../dashboard.php', $error);
}
else {

   
    session_destroy();
    
    $message = [
        'success' => "logoutsuccess"
    ];
    
    redirect('../index.php', $message);

}




