<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">EDIT | Admin Profile</h6>
            </div>
            <div class="card-body">

                <?php

                $connection = mysqli_connect("localhost", "root", "", "adminpanel");
            
                if(isset($_POST['edit_btn'])){

                    $id = $_POST['edit_id'];
                    
                    $query = "SELECT * FROM gallery WHERE id = '$id' ";
                    $query_run = mysqli_query($connection, $query);

                    foreach($query_run as $row){

                ?>

                    <form action="code" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="gallery_id" value="<?php echo $row['id'] ?>">

                        <div class="form-group">
                            <label> Image Name </label>
                            <input type="text" name="edit_imgname" value="<?php echo $row['imgname'] ?>" class="form-control" placeholder="Enter Username" required>
                        </div>
                        <div class="form-group">
                            <label> Image </label>
                            <input type="file" name="edit_img" id="images" value="<?php echo $row['img'] ?>" aria-describedby="inputGroupFileAddon01" accept="image/*" required>
                        </div>
                        
                        <a href="gallery" class="btn btn-danger"> CANCEL </a>
                        <button type="submit" name="update_btn" class="btn btn-primary"> UPDATE </button>

                    </form>

                    <?php

                            }
                        
                        }
            
                    ?>

            </div>
        </div>
    </div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>