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
   <link rel="stylesheet" href="dashboard/assets/vendor/charts/chartist-bundle/chartist.css">
   <link rel="stylesheet" href="dashboard/assets/vendor/charts/morris-bundle/morris.css">
   <link rel="stylesheet" href="dashboard/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="dashboard/assets/vendor/charts/c3charts/c3.css">
   <link rel="stylesheet" href="dashboard/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <title>Electricity Prediction - User Dashboard</title>
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
                               <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                               <div id="submenu-1" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                     <li class="nav-item">
                                         <a class="nav-link" href="#">User Profile</a>
                                     </li>
                                   </ul>
                               </div>
                           </li>

                           <li class="nav-item ">
                               <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>User Profile</a>
                               <div id="submenu-4" class="collapse submenu" style="">
                                   <ul class="nav flex-column">
                                       <li class="nav-item">
                                           <a class="nav-link active" href="profile_details.php">Registeration</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="#">Profile Management</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="#">Removal of Profile</a>
                                       </li>
                                   </ul>
                               </div>
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
           <div class="dashboard-ecommerce">
               <div class="container-fluid dashboard-content ">
                   <!-- ============================================================== -->
                   <!-- pageheader  -->
                   <!-- ============================================================== -->
                   <div class="row">
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="page-header">
                               <h2 class="pageheader-title">Welcome  <?php echo $_SESSION['name']; ?></h2>
                               <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                               <div class="page-breadcrumb">
                                   <nav aria-label="breadcrumb">
                                       <ol class="breadcrumb">
                                           <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                           <li class="breadcrumb-item active" aria-current="page">Registered User Profile</li>
                                       </ol>
                                   </nav>
                               </div>
                           </div>
                       </div>
                   </div>

                   <!-- Dataset upload Form -->
                   <?php
                   $id = $_GET['id'];
                    ?>
                       <div class="container">
                                 <div class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                       <div class="panel panel-info">
                                           <div class="panel-body" >

                                              <div class="alert alert-danger">
                                                <strong>Reminder!</strong>
                                                <ul>
                                                  <li>Your Files should have  ' .csv ' extension. (CSV File)</li>
                                                  <!-- <li>There should a delimiter ' ; ' between all the columns.</li> -->
                                                  <li>Your Dataset should only contain three factors <br>(name of attributes should be same) as shown below :  </li>
                                                  <li>Date</li>
                                                  <li>Time</li>
                                                  <li>Global_active_power</li>
                                                  <li>Your Dataset should have minimum of 2 Lac entries.</li>
                                                  </ul>
                                                  <strong>Otherwise, Prediction with respect to your
                                                 Dataset will not be proceeded further. <br>
                                                 Below, is the sample Dataset for your reference.
                                               </strong>

                                              </div>

                                              <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                                  <div class="card">
                                                      <h5 class="card-header">Sample Dataset For Household Power Consumption</h5>
                                                      <div class="card-body">
                                                          <div id="">
                                                            <img src = "sample.PNG" alt="" width="550px;" style="cursor:pointer;" onclick="window.open(this.src);"/>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>

                                               <form class="form-horizontal"  method="POST" action="upload_dataset.php?id=<?php echo $id;?>" enctype="multipart/form-data">
                                                 <div class="form-group">
                                                     <label for="lastname" class="col-md-6 control-label">Enter Time Interval of your Dataset : </label>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="lastname" class="col-md-3 control-label">Start Date : </label>
                                                     <div class="col-md-5">
                                                         <input type="date" class="form-control" name="start_date"  value = "" required>
                                                     </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="lastname" class="col-md-3 control-label">End Date : </label>

                                                     <div class="col-md-5">
                                                         <input type="date" class="form-control" name="end_date"  value = "" required />
                                                     </div>
                                                 </div>

                                                   <div class="form-group">
                                                       <label for="lastname" class="col-md-6 control-label">Dataset Description : </label>
                                                       <div class="col-md-9">
                                                           <textarea class="form-control"  rows="4" columns="30" name="dataset_desc" value = "" placeholder="Enter Dataset Description" required ></textarea>
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <label for="email" class="col-md-6 control-label">Upload Dataset (zip file) : </label>
                                                       <div class="col-md-9">
                                                           <input type="file" class="form-control" accept=".zip" name="zip_file" value="" required />
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <!-- Button -->
                                                       <div class="col-md-offset-3 col-md-9">
                                                           <button id="btn-signup" type="submit" name="submit" class="btn btn-warning"><i class="icon-hand-right"></i>Upload</button>
                                                       </div>
                                                   </div>

                                               </form>
                                            </div>
                                       </div>

                            </div>
                       </div>


           </div>
           <!-- ============================================================== -->
           <!-- footer -->
           <!-- ============================================================== -->
           <div class="footer">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Electricity Prediction © 2021 . All rights reserved.
                       </div>
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
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
       <!-- ============================================================== -->
       <!-- end wrapper  -->
       <!-- ============================================================== -->
   </div>
   <!-- ============================================================== -->
   <!-- end main wrapper  -->
   <!-- ============================================================== -->
   <!-- Optional JavaScript -->
   <!-- jquery 3.3.1 -->
   <script src="dashboard/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
   <!-- bootstap bundle js -->
   <script src="dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
   <!-- slimscroll js -->
   <script src="dashboard/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
   <!-- main js -->
   <script src="dashboard/assets/libs/js/main-js.js"></script>
   <!-- chart chartist js -->
   <script src="dashboard/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
   <!-- sparkline js -->
   <script src="dashboard/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
   <!-- morris js -->
   <script src="dashboard/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
   <script src="dashboard/assets/vendor/charts/morris-bundle/morris.js"></script>
   <!-- chart c3 js -->
   <script src="dashboard/assets/vendor/charts/c3charts/c3.min.js"></script>
   <script src="dashboard/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
   <script src="dashboard/assets/vendor/charts/c3charts/C3chartjs.js"></script>
   <script src="dashboard/assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>
