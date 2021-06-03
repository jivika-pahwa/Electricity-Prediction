<?php

session_start();

if(isset($_SESSION['name'])) {
  session_destroy();
  // echo "session destroyed";
  header('Location:login.php');
}

 ?>
