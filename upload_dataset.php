<?php
session_start();
require 'db_conn.php';
$user = $_GET['id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$data_desc = $_POST['dataset_desc'];

$sql = "insert into owner_dataset(user_name,start_date,end_date,data_desc) values ('$user','$start_date','$end_date','$data_desc')";

if(mysqli_query($conn,$sql)) {
  // echo "data inserted ".$user;
  // header('Location:admin.php');
  header('Location:user_result.php');
}
else {
  echo "not inserted".mysqli_error($conn);
}

mysqli_close($conn);
 ?>
