<?php
session_start();
if(isset($_SESSION['username'])){
     $_SESSION['username'];
}


session_destroy();
echo "session_destroyed";
//header('location:http://localhost/anonimo/html/mainpage.html');




?>
