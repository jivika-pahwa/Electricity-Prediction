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
                                           <a class="nav-link active" href="pages/form-elements.html">Registeration</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/form-validation.html">Profile Management</a>
                                       </li>
                                       <li class="nav-item">
                                           <a class="nav-link" href="pages/multiselect.html">Removal of Profile</a>
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
                             <h5 class="card-header">Create User Profile</h5>
                         </div>
                     </div>
                 </div>
             <div class="container">
                       <div class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                             <div class="panel panel-info">
                                 <div class="panel-body" >

                                     <form class="form-horizontal"  method="POST" action="new_userDB.php">

                                       <div class="form-group">
                                           <label for="firstname" class="col-md-3 control-label">Dataset Owner</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control" name="id" placeholder="Enter your name" required>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <label for="lastname" class="col-md-3 control-label">Dataset Name</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control" name="dataset_name" placeholder="Enter Dataset name" required>
                                           </div>
                                       </div>


                                       <div class="form-group">
                                           <label for="email" class="col-md-3 control-label">Country</label>
                                           <div class="col-md-9">
                                               <input type="text" class="form-control" name="country" placeholder="Enter country" required>
                                           </div>
                                       </div>


                                         <div class="form-group">
                                             <label for="email" class="col-md-3 control-label">City</label>
                                             <div class="col-md-9">
                                               <input type="text" class="form-control" name="city" placeholder="Enter city" required>
                                             </div>
                                           </div>

                                       <div class="form-group">
                                           <label for="email" class="col-md-3 control-label">City Pincode</label>
                                           <div class="col-md-9">
                                               <input type="number" class="form-control" name="pincode" placeholder="Enter City Pincode">
                                           </div>
                                       </div>


                                       <div class="form-group">
                                           <label for="email" class="col-md-3 control-label">Phone Number</label>
                                           <div class="col-md-9">
                                               <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number" required>
                                           </div>
                                       </div>


                                       <div class="form-group">
                                           <label for="email" class="col-md-3 control-label">Email Address</label>
                                           <div class="col-md-9">
                                               <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required>
                                           </div>
                                       </div>


                                       <div class="form-group">
                                           <label for="password" class="col-md-3 control-label">Password</label>
                                           <div class="col-md-9">
                                               <input type="password" id="pass" class="form-control" name="pass" onkeyup='check();' placeholder="Enter Password" required>
                                           </div>
                                       </div>


                                       <div class="form-group">
                                           <label for="password" class="col-md-3 control-label">Re-type Password</label>
                                           <div class="col-md-9">
                                               <input type="password" id="repass" class="form-control" name="repass" onkeyup='check();'  placeholder="Enter Re-Type Password" required>
                                             <span id="check"></span>
                                           </div>
                                       </div>



                                         <div class="form-group">
                                             <!-- Button -->
                                             <div class="col-md-offset-3 col-md-9">
                                                 <button id="btn-signup" type="submit" class="btn btn-warning"><i class="icon-hand-right"></i>Register</button>
                                             </div>
                                         </div>


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
</body>


<script type="text/javascript">

document.getElementById('btn-signup').disabled = true;

function check(){
	var pass = document.getElementById("pass").value;
	var repass = document.getElementById("repass").value;
	if(pass == repass){
	    document.getElementById('check').style.color = 'green';
		document.getElementById("check").innerHTML = "Password Matched";
		document.getElementById('btn-signup').disabled = false;

	}
	else {
	    document.getElementById('check').style.color = 'red';
		document.getElementById("check").innerHTML = " Password Not Matched";
	}
}
	$(window).bind("pageshow", function() {
		var form = $('form');
		// let the browser natively reset defaults
		form[0].reset();
	});

</script>

</html>
