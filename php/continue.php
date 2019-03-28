<?php
require_once 'access.php';
class Person{
     public $user , $messages;
}
$person = new Person;

$tweets = array();

session_start();
if(isset($_SESSION['username'])){
     $ml = $_SESSION['username'];

     $connection = $connection = new mysqli($host,$username,'',$db);
    
     if($connection->connect_error == false){
         $query = "SELECT message FROM tweets WHERE user = '$ml'";

         $result  = $connection->query($query);
         if($result->num_rows>0){
              while($rows = $result->fetch_assoc()){
                   array_push($tweets,$rows['message']);
                   
              }
              $person->user = $ml;
              $person->messages = $tweets;
              //header('location:http://localhost/anonimo/html/mainpage.html');
              echo json_encode($person);
              
         }

         $connection->close();
               

     } 

}
//echo session_id();
//unset($_SESSION['username']);
//session_destroy();
//
//header('location:http://localhost/anonimo/html/mainpage.html');






?>
