<?php

if(isset($_POST['logout_btn'])){

    session_destroy();
    header('Location: login.php');

}

?>