<?php
require_once 'access.php';
session_start();
if(isset($_SESSION['username'])){
     $ml = $_SESSION['username'];
     $connection = $connection = new mysqli($host,$username,'',$db);
     if($connection->connect_error == false){
         $query = "INSERT INTO tweets (user,message) values('$ml','you are very good')";

         if($connection->query($query)===TRUE) {echo "success";}
               else echo $connection->error;

     } 

}
echo session_id();
unset($_SESSION['username']);
session_destroy();
echo session_id();
//header('location:http://localhost/anonimo/html/mainpage.html');




?>
