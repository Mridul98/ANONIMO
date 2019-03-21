<?php

if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
     
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    echo "".$email.$username.$password;

    header("Location: ../html/login.html");

}



?>