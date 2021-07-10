<?php

session_start();

include('database/dbconfig.php');

if(!(isset($_SESSION['start']))){

    header('Location: login');

}

?>