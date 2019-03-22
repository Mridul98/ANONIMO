<?php
require_once 'access.php';
if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
     
    $email = $_POST['email'];
    $userName = $_POST['username'];
    $passWord = $_POST['password'];
    $salt1 = '234j2n';
    $salt2 = '123'; 
    $token = password_hash($passWord,PASSWORD_BCRYPT);
    // $token = hash('ripemd128','$password');


    $connection = new mysqli($host,$username,'',$db);
    if($connection->connect_error==false) {


       $query = "INSERT INTO user (Email, Username, Password) values('$email','$userName','$token')";
       if($connection->query($query)===TRUE){
           echo "inserted to the database";
           

           header('location:http://localhost/anonimo/html/login.html');
       } else echo $connection->error;
    

    } 
    

   // header("Location: ../html/login.html");

}



?>