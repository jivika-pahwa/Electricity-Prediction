<?php
include 'db_conn.php';
?>
<!doctype html>
<html lang="en">

<head>

    <style>
    #formID label{
      color:dodgerblue;
    }
    </style>
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
                           <!-- <div id="custom-search" class="top-search-bar">
                               <input class="form-control" type="text" placeholder="Search..">
                           </div> -->
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
                                           <a class="nav-link" href="profile_details.php">Registeration</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link active" href="#">Profile Management</a>
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
       <div id="formID" class="dashboard-wrapper">
           <div class="dashboard-ecommerce">
                    <!-- Updating User profile -->
                        <div class="row">
                            <div class="col-xxl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Update Profile</h5>
                                </div>
                            </div>
                        </div>
                 <div class="container">
                           <div class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                 <div class="panel panel-info">
                                     <div class="panel-body" >
                                       <?php
                                       $id = $_GET['id'];
                                       $sql = "select * from owner_registeration where owner_id= '$id' ";
                                       $query = mysqli_query($conn,$sql);
                                       $rows = mysqli_num_rows($query);
                                       if($rows > 0 ) {
                                         while($fetch = mysqli_fetch_assoc($query)){

                                         ?>
                                         <form class="form-horizontal"  method="POST" action="manage_profileDB.php?id=<?php echo $id ;?>" enctype="multipart/form-data">


                                           <div class="form-group">
                                               <label for="lastname" class="col-md-3 control-label">Dataset Owner</label>
                                               <div class="col-md-9">
                                                   <input type="text" class="form-control" name="owner_id"  id="owner" value = "<?php echo $fetch['owner_id'] ?>" required>
                                               </div>
                                           </div>
                                             <div class="form-group">
                                                 <label for="lastname" class="col-md-3 control-label">Datset Name</label>
                                                 <div class="col-md-9">
                                                     <input type="text" class="form-control" name="dataset_name" value = "<?php echo $fetch['dataset_name'] ?>" required>
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label for="email" class="col-md-5 control-label">Country</label>
                                                 <div class="col-md-9">
                                                     <input type="text" class="form-control" name="country" value="<?php echo $fetch['country'] ?>" required>
                                                 </div>
                                             </div>
                                             <div class="form-group">
                                                 <label for="email" class="col-md-5 control-label">City</label>
                                                 <div class="col-md-9">
                                                     <input type="text" class="form-control" name="city" value="<?php echo $fetch['city'] ?>" required>
                                                 </div>
                                             </div>

                                             <div class="form-group">
                                                 <label for="email" class="col-md-3 control-label">Pincode</label>
                                                 <div class="col-md-9">
                                                     <input type="number" class="form-control" name="pincode" value="<?php echo $fetch['pincode'] ?>" required>
                                                 </div>
                                             </div>


                                             <div class="form-group">
                                                 <label for="email" class="col-md-3 control-label">Phone Number</label>
                                                 <div class="col-md-9">
                                                     <input type="number" class="form-control" name="phone" value="<?php echo $fetch['phone'] ?>" required>
                                                 </div>
                                             </div>


                                             <div class="form-group">
                                                 <label for="email" class="col-md-3 control-label">Email Address</label>
                                                 <div class="col-md-9">
                                                     <input type="email" class="form-control" name="email" value="<?php echo $fetch['email'] ?>" required>
                                                 </div>
                                             </div>

                                             <div class="form-group">
                                                 <label for="pass" class="col-md-5 control-label">Global Active Power - 200 Time Step</label>
                                                 <div class="col-md-9">
                                                     <input type="file" class="form-control" name="GAP_200" value="" required >
                                                 </div>
                                             </div>
                                              <div class="form-group">
                                                  <label for="pass" class="col-md-5 control-label">Global Active Power - 25 Time Step</label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control" name="GAP_25" value="" required >
                                                    </div>
                                              </div>

                                             <div class="form-group">
                                                 <label for="pass" class="col-md-5 control-label">Train Loss and Test Loss</label>
                                                 <div class="col-md-9">
                                                     <input type="file" class="form-control" name="train_loss" value="" required >
                                                </div>
                                             </div>


                                             <div class="form-group">
                                                 <label for="pass" class="col-md-3 control-label">Current Password</label>
                                                 <div class="col-md-9">
                                                     <input type="text" class="form-control" name="pass" value="<?php echo $fetch['pass'] ?>" required>
                                                 </div>
                                             </div>

                                             <div class="form-group">
                                                 <!-- Button -->
                                                 <div class="col-md-offset-3 col-md-9">
                                                     <button id="btn-signup" type="submit" class="btn btn-warning"><i class="icon-hand-right"></i>Update Profile</button>
                                                 </div>
                                             </div>
                                             <?php
                                           }
                                           }
                                           ?>

                                         </form>
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

   <script type="text/javascript">
      const owner = document.getElementById('owner');
      owner.disabled = true;
   </script>


</body>

</html>
