<?php
require "db_conn.php";

$owner_id = $_POST['id'];
$dataset_name = $_POST['dataset_name'];
$country = $_POST['country'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['pass'];

$sql = "insert into owner_registeration(owner_id,dataset_name,country,city,pincode,phone,email,pass) values ('$owner_id','$dataset_name','$country','$city','$pincode','$phone','$email','$password')";

if(mysqli_query($conn,$sql)){
  header('Location:admin.php');
}
else {
  header('Location:error.php');
}
mysqli_close($conn);
 ?>
