<link href="../css/sb-admin-2.min.css" rel="stylesheet">

<?php

    $server_name = "localhost";
    $db_username = "root";
    $db_password = "";
    $db = "adminpanel";

    $connection = mysqli_connect($server_name, $db_username, $db_password);
    $dbconfig = mysqli_select_db($connection, $db);
    
    if($dbconfig){

        //connected

    }

    else{

        echo '
        
        <div class="container">

            <div class="row">
    
                <div class="col md-12 text-center">
    
                    <h2 class="text-primary mb-5"> Database Connection Failed! </h2>
        
                    <a href="../index.php" class="btn btn-danger text-white p-2 pb-2 rounded"> Go back to home page </a>
    
                </div>
        
            </div>
        
        </div>

        ';

    }

?>
