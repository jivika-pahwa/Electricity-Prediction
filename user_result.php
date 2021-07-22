<?php
  session_start();
  include 'db_conn.php';
 ?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dashboard/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="dashboard/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="dashboard/assets/libs/css/style.css">
    <link rel="stylesheet" href="dashboard/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="dashboard/assets/vendor/charts/c3charts/c3.css">
    <title>Dataset Visualization</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="">Electricity Prediction</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                        </li>
                            <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="dashboard/assets/images/admin-1.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">

                                    <h2 class="pageheader-title" style="color:white;"><?php echo 'Welcome '.$_SESSION['name']; ?></h2>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Dataset Visualization</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Graphs</a></li>                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                  <?php
                  $id = $_GET['id'];
                  $sql = "select * from owner_registeration where owner_id ='$id' ";
                  $query = mysqli_query($conn,$sql);
                  $rows = mysqli_num_rows($query);
                  if($rows > 0) {
                      while($fetch = mysqli_fetch_assoc($query)){

                   ?>
                    <!-- ============================================================== -->
                    <!--  area chart  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Line Graph - Result of Train Loss and Test Loss during the training of the model</h5>
                            <div class="card-body">
                                <div id="">
                                  <img src = "<?php echo $fetch['train_loss']; ?>" alt="<?php echo $fetch['train_loss']; ?>" width="550px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!--  end area chart  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!--  spline chart  -->
                    <!-- ============================================================== -->

                    <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Line Graph - Predicted values with respect to the dataset</h5>
                            <div class="card-body">
                                <div>
                                  <img src="<?php echo $fetch['GAP_200']?>" alt="<?php echo $fetch['']; ?>" width="550px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end  spline chart  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!--  zoom chart  -->
                    <!-- ============================================================== -->
                     <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Line Graph - Future Predicted values with respect to the dataset</h5>
                            <div class="card-body">
                                <div>
                                  <img src = "<?php echo $fetch['GAP_25']; ?>" alt="<?php echo $fetch['GAP_25']; ?>" width="550px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                  }
                  else{
                    echo " Kindly visit your portal in the next 48 hours.";
                  }
                   ?>
                    <!-- <div class="alert alert-danger">
                      <strong>Kindly visit your portal in the next 48 hours.</strong>
                    </div>


                    <!-- ============================================================== -->
                    <!--  end zoom chart  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!--  scatter chart  -->
                    <!-- ============================================================== -->
                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Scatter Plot</h5>
                            <div class="card-body">
                                <div id="c3chart_scatter"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- ============================================================== -->
                <!--  end scatter chart  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!--  stacked chart  -->
                    <!-- ============================================================== -->
                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Stacked Bar </h5>
                            <div class="card-body">
                                <div id="c3chart_stacked"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- ============================================================== -->
                    <!--  end stacked chart  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!--  combination chart  -->
                    <!-- ============================================================== -->
                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Combination Chart </h5>
                            <div class="card-body">
                                <div id="c3chart_combine"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- ============================================================== -->
                    <!--  end combination chart  -->
                    <!-- ============================================================== -->
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- pie chart  -->
                    <!-- ============================================================== -->
                    <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Pie Chart </h5>
                            <div class="card-body">
                                <div id="c3chart_pie"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- ============================================================== -->
                    <!-- end pie chart  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- dount chart  -->
                    <!-- ============================================================== -->
                    <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Donut Chart </h5>
                            <div class="card-body">
                                <div id="c3chart_donut"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- ============================================================== -->
                    <!-- end dount chart  -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- dount gauge  -->
                    <!-- ============================================================== -->
                    <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Donut Guage </h5>
                            <div class="card-body">
                                <div id="c3chart_gauge"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- ============================================================== -->
                    <!-- end dount gauge  -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2021 Electricity Prediction. All rights reserved.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="dashboard/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="dashboard/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="dashboard/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="dashboard/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="dashboard/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="dashboard/assets/libs/js/main-js.js"></script>
</body>

</html>
