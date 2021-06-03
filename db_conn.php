<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "electricity";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
	echo "connection can't be estabilished to the database !";
}
// else{
// 		echo "connection estabilished to the database!";
// }

 ?>
