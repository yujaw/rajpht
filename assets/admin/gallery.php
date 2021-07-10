<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gallery | Admin</title>

    </head>

    <body>

        <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Images</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="code.php" method="POST" enctype="multipart/form-data">

                        <div class="modal-body">

                            <div class="form-group">
                                <label> Name </label>
                                <input type="text" name="imgname" class="form-control" placeholder="Enter Image Name">
                            </div>
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="images" aria-describedby="inputGroupFileAddon01" accept="image/*">
                                <label class="custom-file-label" for="inputGroupFile01">Choose Profile Image</label>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="image_btn" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Gallery
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                            Upload Images
                        </button>

                    </h6>

                </div>

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
                                            <th>IMAGE</th>
                                            <th>EDIT</th>
                                            <th>DELETE</th>
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
                                                <?php echo '<a href="upload/'.$row['img'].'" data-lightbox="img">
                                                    <img src="upload/'.$row['img'].'" width="200px">
                                                </a>' ?>
                                                </td>
                                                <td class="align-middle">
                                                    <form action="gallery_edit" method="post">
                                                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                                    </form>
                                                </td>
                                                <td class="align-middle">
                                                    <form action="code" method="post">
                                                        <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                                                        <input type="hidden" name="delete_name" value="<?php echo $row['img'] ?>">
                                                        <button type="submit" name="img_delete_btn" class="btn btn-danger"> DELETE </button>
                                                    </form>
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
        <!-- /.container-fluid -->

    </body>

    </html>

    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>