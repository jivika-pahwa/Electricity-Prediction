<?php
session_start();
include 'db_conn.php';

$username = stripslashes($_POST['user']);
$password = stripslashes($_POST['pass']);

mysqli_real_escape_string($conn,$username);
mysqli_real_escape_string($conn,$password);

$_SESSION['username'] = $username;




$query = "select * from admin where username = '$username' and password = '$password'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result);
if($rows > 0){
  // echo "welcome admin";

  header('Location:admin.php');
}
else {
  echo "invalid user ";
}
mysqli_close($conn);

 ?>
