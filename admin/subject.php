<?php
 
 require __DIR__."/../config/database.php";

 if($_SERVER['REQUEST_METHOD']!== "POST"){
    redirect(path:"/../config/database.php", query:["error" => "invalidrequest"]);
 }
 else{
    $subject= $_POST['subject'];
    $date= $_POST['date'];
    



        $query= "INSERT INTO subject(subject, date) 
        VALUES('$subject', '$date')";
        $result = mysqli_query($connection,$query);

    if($result == true){

    }

 }
