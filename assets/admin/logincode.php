<?php

include('security.php');
require 'database/dbconfig.php';

if(isset($_POST['login_btn'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE email='$email' AND password='$password' ";
    $query_run = mysqli_query($connection, $query);
    
    if(mysqli_fetch_array($query_run)){

        $_SESSION['start'] = "true";
        $_SESSION['username'] = $username;
        header('Location: index');
        
    }

    else{

        $_SESSION['status'] = "Invalid Credentials";
        header('Location: login');

    }

}


?>