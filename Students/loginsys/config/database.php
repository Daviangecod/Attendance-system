<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "testdb";


$connection = mysqli_connect($hostname, $username, $password, $database);

if(!$connection) {
    die("Database Connection Error! " . mysqli_connect_error());
}