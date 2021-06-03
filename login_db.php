<?php
session_start();
require 'db_conn.php';
include 'header.php';

$username = stripslashes($_POST['name']);
$password = stripslashes($_POST['pass']);

mysqli_real_escape_string($conn,$username);
mysqli_real_escape_string($conn,$password);

$_SESSION['name'] = $username;
$name = $_SESSION['name'];
// $session = $_SESSIONS['name'];

$sql = "select * from owner_registeration where owner_id = '$username' and pass = '$password'";

$query = mysqli_query($conn,$sql);

$rows = mysqli_num_rows($query);

if($rows > 0){

  while($fetch = mysqli_fetch_array($query)) {
    header('Location:user_dashboard.php?id='.$name);
    //echo "<h1>Welcome user : ".$_SESSION['name']."</h1>";
  }
}
else{
  header('Location:error.php');
}


mysqli_close($conn);

?>
