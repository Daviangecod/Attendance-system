<?php
 
 require __DIR__."/../config/database.php";

 if($_SERVER['REQUEST_METHOD']!== "POST"){
    redirect(path:"dashboard.php", query:["error" => "invalidrequest"]);
 }
 else{
    $name= $_POST['name'];
    $attendance= $_POST['attendance'];
    $date= $_POST['date'];



        $query= "INSERT INTO attends(name, attendance, date) 
        VALUES('$name', '$attendance', '$date')";
        $result = mysqli_query($connection,$query);

    if($result == true){
      header('location:dashboard.php');
      exit();

    }

 }
