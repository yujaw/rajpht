<?php

    include('security.php');
    include('includes/header.php');
    include('includes/navbar.php');
    
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admins</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php

                                                require 'database/dbconfig.php';
                                            
                                                $query = "SELECT id FROM register ORDER BY id";
                                                $query_run = mysqli_query($connection, $query);

                                                $row = mysqli_num_rows($query_run);

                                                echo $row;

                                            ?>

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Owner</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rajesh Mdhr</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Uploaded Photos</div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                
                                                <?php

                                                    require 'database/dbconfig.php';

                                                    $query = "SELECT id FROM gallery ORDER BY id";
                                                    $query_run = mysqli_query($connection, $query);

                                                    $row = mysqli_num_rows($query_run);

                                                    echo $row;

                                                ?>
                                                
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-camera fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Made By</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Yujaw</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-laptop-code fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>