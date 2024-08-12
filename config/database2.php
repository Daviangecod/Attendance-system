<?php

// connection variables
$hostname = "localhost";
$username = "root";
$password = "";
$database = "admin";


// connect to database
$connection = mysqli_connect($hostname, $username, $password, $database);


// check if connection is succesful
if($connection == false){
    // stop everything and show error
    die("Connection error" . mysqli_connect_error());
}

?>