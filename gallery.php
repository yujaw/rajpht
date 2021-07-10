<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rajesh Photography</title>
    <link rel="stylesheet" href="assets/scss/styles.css" />
    <link rel="stylesheet" href="assets/scss/lightbox.min.css">
    <script src="https://kit.fontawesome.com/ef831aefca.js" crossorigin="anonymous"></script>
    <link rel="icon" href="assets/img/icon.png" />

</head>

<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <h2 class="logo"><a href="index">Rajesh</a></h2>

            <ul class="nav_bar">
                <li class="nav_links">
                    <a href="index#home">Home</a>
                </li>
                <li class="nav_links">
                    <a href="index#about">About</a>
                </li>
                <li class="nav_links">
                    <a href="index#skills">Skills</a>
                </li>
                <li class="nav_links">
                    <a href="index#work">Work</a>
                </li>
                <li class="nav_links">
                    <a href="index#contact">Contact</a>
                </li>
                <li class="nav_links">
                    <a href="gallery">Gallery</a>
                </li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>

    <!-- Body -->
    <main class="main">

        <div class="container">

            <div class="gall_container">

                <div class="gallery">

                    <h1 class="page_title">Gallery</h1>

                    <?php

                        $server_name = "localhost";
                        $db_username = "root";
                        $db_password = "";
                        $db = "adminpanel";

                        $connection = mysqli_connect($server_name, $db_username, $db_password);
                        $dbconfig = mysqli_select_db($connection, $db);

                        $query = "SELECT * FROM gallery";
                        $query_run = mysqli_query($connection, $query);
                        
                        if(mysqli_num_rows($query_run) > 0){

                        while($row = mysqli_fetch_assoc($query_run)){

                    ?>


                            <?php 
                                            echo '<a href="assets/admin/upload/'.$row['img'].'" data-lightbox="mygallery"><img src="assets/admin/upload/'.$row['img'].'"></a>'
                                        
                                    ?>


                            <?php

                        }

                        }

                        else{

                            $_SESSION['status'] = "No Record Found";
                            $_SESSION['status_code'] = "error";

                        }

                    ?>

                </div>

            </div>
        </div>

        <div class="footer">

            &copy;
            <script>
                var year = new Date().getFullYear();
                document.write(year);
            </script>
            copyright all rights reserved

        </div>

    </main>

    <!-- Footer -->

    <script src="assets/js/main.js"></script>
    <script src="assets/js/lightbox-plus-jquery.min.js"></script>
    <script>
        lightbox.option({

            'fadeDuration': 150,
            'fitImagesInViewport': true,
            'alwaysShowNavOnTouchDevices': true,
            'imageFadeDuration': 150,
            'maxHeight': 570,
            'disableScrolling': true,
            'imageFadeDuration': 150,
            'resizeDuration': 150,
            'showImageNumberLabel': false

        })
    </script>
</body>

</html>