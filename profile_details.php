<?php
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
   <title>Energy Forecasting - Admin Dashboard</title>
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
               <a class="navbar-brand" href="admin.php">Energy Forecasting</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse " id="navbarSupportedContent">
                   <ul class="navbar-nav ml-auto navbar-right-top">
                       <li class="nav-item">
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
                                         <a class="nav-link" href="#">Admin Profile</a>
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
                               <h2 class="pageheader-title">Admin Dashboard</h2>
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
                   <!-- Registered User -->
                       <div class="row">
                           <div class="col-xxl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                               <div class="card">
                                   <h5 class="card-header">Registered Users</h5>
                                   <div class="card-body p-0">
                                       <div class="table-responsive">
                                           <table class="table">
                                               <thead class="bg-light">
                                                   <tr class="border-0">

                                                     <th class="border-0">#</th>
                                                     <th class="border-0">Owner ID</th>
                                                     <th class="border-0">Dataset Name</th>
                                                     <th class="border-0">Country</th>
                                                     <th class="border-0">City</th>
                                                     <th class="border-0">Pincode</th>
                                                     <th class="border-0">Contact Number</th>
                                                     <th class="border-0">Email Address</th>

                                                   </tr>
                                               </thead>
                                               <?php

                                               $sql = "select * from owner_registeration";
                                               $query = mysqli_query($conn,$sql);
                                               $rows = mysqli_num_rows($query);

                                                ?>

                                               <tbody>
                                                   <tr>
                                                     <?php if($rows > 0 ) {
                                                       while($fetch = mysqli_fetch_assoc($query)) { ?>
                                                         <td><?php echo $fetch['sr_no'];?></td>
                                                       <td><?php echo $fetch['owner_id']; ?></td>
                                                       <td><?php echo $fetch['dataset_name']; ?></td>
                                                       <td><?php echo $fetch['country']; ?></td>
                                                       <td><?php echo $fetch['city']; ?></td>
                                                       <td><?php echo $fetch['pincode']; ?></td>
                                                       <td><?php echo $fetch['phone']; ?></td>
                                                       <td><?php echo $fetch['email']; ?></td>

                                                       <td colspan="9"><a href="profile_manage.php?id=<?php echo $fetch['owner_id']; ?>" class="btn btn-primary float-right">Manage</a></td>
                                                       <td><a href="profile_delete.php?id=<?php echo $fetch['owner_id']; ?>" class="btn btn-danger float-right">Delete</a></td>
                                                   </tr>
                                                   <?php
                                                 }
                                               }
                                               else {
                                                 echo "no record found";
                                               }
                                                    ?>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- row ended -->

           </div>
           <!-- ============================================================== -->
           <!-- footer -->
           <!-- ============================================================== -->
           <div class="footer">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Energy Forecasting © 2021 . All rights reserved.
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
