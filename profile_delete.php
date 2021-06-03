<?php

  include('db_conn.php');

  $id = $_GET['id'];

  $sql = "delete from owner_registeration where  owner_id = '$id'";
  $execute = mysqli_query($conn,$sql);

  if(!$execute){
    echo 'error..';
  }
  else {
    echo '<script>
    alert("Profile Deleted !!");
    window.location.href="http://localhost/electricity-consumption/profile_details.php";
    </script>
    ';
    // header('Location:profile_details.php');
  }
  mysqli_close($conn);
 ?>
