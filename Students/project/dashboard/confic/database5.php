<?php

//MySQLi Procedural Method--> what we'll be using
//MySQLi Object oriented method
//PDO Method


//Database connection variables
$hostname="localhost";
$username="root";
$password="";
$database="attend";

//connecting to the database

$connection= mysqli_connect($hostname, $username, $password, $database);

//checking if connection fails
if(!$connection){
    die("connection error:" .mysqli_connect_error());
}
?>