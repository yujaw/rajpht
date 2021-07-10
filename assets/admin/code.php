<?php

    include('security.php');

    require 'database/dbconfig.php';

    if(isset($_POST['registerbtn'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirmpassword'];
       
        if($password === $cpassword){

            
                $query = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";
                $query_run = mysqli_query($connection, $query);

                if($query_run){

                    $_SESSION['status'] = "Successfully Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: register.php');
                   
                }

                else{

                    $_SESSION['status'] = "Not Added";
                    $_SESSION['status_code'] = "error";
                    header('Location: register.php');

                }

        }

        else{

            $_SESSION['status'] = "Password and confirm password dosen't match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');

        }

    }

    if(isset($_POST['delete_btn'])){

        $id = $_POST['delete_id'];
    
        $query = "DELETE FROM register WHERE id = '$id' ";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run){
    
            $_SESSION['status'] = "Successfully Deleted";
            $_SESSION['status_code'] = "success";
            header('Location: register.php');
    
        }
    
        else{
    
            $_SESSION['status'] = "Not Deleted";
            $_SESSION['status_code'] = "error";
            header('Location: register.php');
    
        }
    
    }

    if(isset($_POST['updatebtn'])){

        $id = $_POST['edit_id'];
        $username = $_POST['edit_username'];
        $email = $_POST['edit_email'];
        $password = $_POST['edit_password'];
        
        $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run){

            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code'] = "success";
            header('Location: register.php');

        }

        else{

            $_SESSION['status'] = "Your Data is Not Updated";
            $_SESSION['status_code'] = "error";
            header('Location: register.php');

        }

    }

    if(isset($_POST['image_btn'])){

        $name = $_POST['imgname'];
        $img = $_FILES["img"]['name'];

        
            $query = "INSERT INTO gallery (`imgname`, `img`) VALUES ('$name', '$img') ";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run){

                move_uploaded_file($_FILES["img"]['tmp_name'], "upload/".$_FILES["img"]["name"]);
                $_SESSION['status'] = "Successfully Added";
                $_SESSION['status_code'] = "success";
                header('Location: gallery.php');

            }

            else{

                $_SESSION['status'] = "Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: gallery.php');

            }

    
    }

    if(isset($_POST['update_btn'])){

        $id = $_POST['gallery_id'];
        $edit_name = $_POST['edit_imgname'];
        $edit_img = $_FILES["edit_img"]['name'];

        $query = "UPDATE gallery SET imgname='$edit_name', img='$edit_img' WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run){

                move_uploaded_file($_FILES["edit_img"]['tmp_name'], "upload/".$_FILES["edit_img"]["name"]);
                $_SESSION['status'] = "Your Data is Updated";
                $_SESSION['status_code'] = "success";
                header('Location: gallery.php');

        }

        else{

            $_SESSION['status'] = "Your Data is Not Updated";
            $_SESSION['status_code'] = "error";
            header('Location: gallery.php');

        }

    }

    if(isset($_POST['img_delete_btn'])){

        $id = $_POST['delete_id'];
        $file_name = $_POST['delete_name'];

        $query = "DELETE FROM gallery WHERE id='$id' ";
        $query_run = mysqli_query($connection, $query);
        $script = "ALTER TABLE gallery AUTO_INCREMENT=1";
        $work = mysqli_query($connection, $script);

        unlink('upload/'.$file_name);

        if($query_run){

            $_SESSION['status'] = "Successfully Deleted";
            $_SESSION['status_code'] = "success";
            header('Location: gallery.php');

        }

        else{

            $_SESSION['status'] = "Not Deleted";
            $_SESSION['status_code'] = "error";
            header('Location: gallery.php');

        }

    }
    
?>