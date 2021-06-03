<?php
require 'db_conn.php';
require "header.php";
?>
<!DOCTYPE html>
<html>
	<head>

	<title>User Registeration</title>

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>
    <div class="container">
              <div id="signupbox" class="mainbox col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login.php">Sign In</a></div>
                        </div>
                        <div class="panel-body" >

                            <form class="form-horizontal"  method="POST" action="state_register.php">

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
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Sign Up</button>
                                    </div>
                                </div>


                            </form>
                         </div>
                    </div>

         </div>
    </div>


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
