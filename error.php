<?php require 'db_conn.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
<style>

	#thankyou{
		margin-top:-20px;
	}

</style>
    <meta charset="utf-8">
    <title>Error Ocurred</title>
  </head>
  <body>

    <div class="jumbotron text-center" id="thankyou">
      <h1 class="display-3">Ooppsss!</h1>
      <p class="lead">Something went Wrong.</p>
      <hr>
      <p>
        Having trouble? <a href="contactus.jsp">Contact us</a>
      </p>
      <p class="lead">
        <!-- <a class="btn btn-primary btn-sm" href="Logout" role="button">Want to Logout ?</a> -->
      </p>
    </div>
</body>
</html>
