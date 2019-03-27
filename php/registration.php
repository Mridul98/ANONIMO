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
    $send = file_get_contents('../html/redirect.html');

    $connection = new mysqli($host,$username,'',$db);
    if($connection->connect_error==false) {


      $query = "INSERT INTO user (Email, Username, Password) values('$email','$userName','$token')";
       $check = "SELECT * FROM user WHERE Username = '$userName'";
       
       $result = $connection->query($check);
       if(($result->num_rows > 0) || (!$connection->query($query))){
       
        header('location:http://localhost/anonimo/html/redirect.html');
     
       }
       else 
       {   header('location:http://localhost/anonimo/html/success.html');
           //echo file_get_contents('../html/success.html');
           $connection->close();
       }
       
       /*if($connection->query($query)===TRUE){
           echo "inserted to the database";
           
           $connection->close();
           //header('location:http://localhost/anonimo/html/login.html');
       } else echo $connection->error;
       */

    } 
    

   // header("Location: ../html/login.html");
   

}



?>