<?php

require_once 'access.php';

if(isset($_POST['tweet']) && isset($_GET['user'])){
    $tweet = $_POST['tweet'];
    $user = $_GET['user'];
    $conn = new mysqli($host,$username,$password,$db);
    if($conn->connect_error){
        die("Server Down");
    }
    $sql = "INSERT INTO tweets(user,message) VALUES('$user','$tweet')";
    if($conn->query($sql)=== TRUE){
        $conn->close();
        header('location:http://localhost/anonimo/html/commentpage.php?user=$user');
        exit();
    }

}
 else echo "no tweet";



?>