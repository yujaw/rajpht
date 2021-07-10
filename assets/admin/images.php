<?php

include('includes/header.php');
include('includes/navbar.php');

?>

<div class="container-fluid">

                <div class="card-body">

                        <div class="table-responsive">

                            <?php

                                require 'database/dbconfig.php';

                                $query = "SELECT * FROM gallery";
                                $query_run = mysqli_query($connection, $query);

                            ?>

                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                           <th>ID</th>
                                            <th>NAME</th>
                                            <th>PREVIEW</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
    
                                            if(mysqli_num_rows($query_run) > 0){

                                            while($row = mysqli_fetch_assoc($query_run)){

                                        ?>

                                            <tr class="text-center">
                                                <td class="align-middle">
                                                    <?php echo $row['id'] ?>
                                                </td>
                                                <td class="align-middle">
                                                    <?php echo $row['imgname'] ?>
                                                </td>
                                                <td class="align-middle">
                                                    <?php echo '<img src="upload/'.$row['img'].' " width="200px" class="img-fluid">' ?>
                                                </td>
                                            </tr>

                                            <?php

                                                    }

                                                }

                                                else{

                                                    $_SESSION['status'] = "No Record Found";
                                                    $_SESSION['status_code'] = "error";

                                                }
                                        
                                            ?>

                                    </tbody>
                                </table>

                        </div>
                </div>
            </div>

        </div>

<?php

include('includes/scripts.php');
include('includes/footer.php');

?>