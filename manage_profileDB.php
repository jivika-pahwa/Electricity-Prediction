<?php
require "db_conn.php";

$owner_id = $_GET['id'];
$dataset_name = $_POST['dataset_name'];
$country = $_POST['country'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['pass'];


$query = " update  owner_registeration  set  dataset_name='$dataset_name',
country='$country',city='$city' ,pincode = '$pincode',phone = '$phone',email='$email',pass='$password' where owner_id='$owner_id' ";

$result = mysqli_query($conn,$query);

if($result){
  echo "profile updated !!";

}
else{
  echo "error in updation";
}

mysqli_close($conn);
?>
