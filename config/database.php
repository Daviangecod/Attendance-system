<?php

function dbConnect()
{
    $dbConfig = [

// connection variables
        'hostname' = "localhost";
        'username' = "root";
        'password' = "";
        'database' = "attendance";
    ];

// connect to database
$connection = mysqli_connect(
    $dbConfig['host'],
    $dbConfig['username'],
    $dbConfig['password'],
    $dbConfig['database']
);


// check if connection is succesful
if($connection){
    // stop everything and show error
    die("Connection failed:" . mysqli_connect_error());
}

return $connection;

}
?>