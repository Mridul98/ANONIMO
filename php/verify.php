<?php
require 'access.php';
if(isset($_POST['username']) && isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT Password FROM user WHERE Username = '$username'  ";
$connection = new mysqli($host,'root','',$db);
if($connection->connect_error== false){
    $passRes = $connection->query($query);

    if($passRes->num_rows >0){
        while($row = $passRes->fetch_assoc()){
            if(password_verify($password,$row['Password'])){
                session_start();
                $_SESSION['username'] = $username;
                
                echo "session started";
                header('location:http://localhost/anonimo/php/continue.php');
                $connection->close();

        }
        else echo "YOU DIDNT REGISTER YET!";
    }
}
} else echo "connection error";

} else echo "username and password not set";




?>