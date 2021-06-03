<?php
session_start();
if(isset($_SESSION['username'])){
  session_destroy();
  // echo 'session destroyed';
  header('Location:admin_login.php');
}
else {
  echo 'session not created';
}
 ?>
