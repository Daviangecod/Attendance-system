<?php
require __DIR__."/../config/database.php";

if($_SERVER['REQUEST_METHOD']!== "POST"){
   redirect(path:"dashboard.php", query:["error" => "invalidrequest"]);
}
else{
   $name= $_POST['name'];
   $email= $_POST['email'];



       $query= "INSERT INTO signup(name, email) 
       VALUES('$name', '$email')";
       $result = mysqli_query($connection,$query);

   if($result == true){
     header('location:totalStud.php');
     exit();

   }

}
?>