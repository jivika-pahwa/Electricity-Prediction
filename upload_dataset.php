<?php
session_start();
require 'db_conn.php';

$user = $_GET['id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$data_desc = $_POST['dataset_desc'];
$dataset_file = $_FILES['zip_file']['name'];

$_SESSION['name'] = (string)$user;
$username = $_SESSION['name'];

if($_FILES['zip_file']['name'] != '')
{
		 $file_name = $_FILES['zip_file']['name'];
		 $array = explode(".", $file_name);
		 $name = $array[0];
		 $ext = $array[1];
		 if($ext == 'zip')
		 {
			 		$dir = mkdir('files_upload/'.$username);
					$path = 'files_upload/'.$username;
					$location = $path . $file_name;
					
					if(move_uploaded_file($_FILES['zip_file']['tmp_name'], $location))
					{
							 $zip = new ZipArchive;
							 if($zip->open($location))
							 {
										$zip->extractTo($path);
										$zip->close();
							 }
							 $files = scandir($path . $name);
							 //$name is extract folder from zip file
							 foreach($files as $file)
							 {
										$file_ext = end(explode(".", $file));
										$allowed_ext = array('xlsx', 'csv');
										if(in_array($file_ext, $allowed_ext))
										{
												 $new_name = md5(rand()).'.' . $file_ext;
												 copy($path.$name.'/'.$file, $path . $new_name);
												 unlink($path.$name.'/'.$file);
										}
							 }
							 unlink($location);
							 rmdir($path . $name);
					}
		 }
}


$sql = "insert into owner_dataset(user_name,start_date,end_date,data_desc,file_upload) values ('$user','$start_date','$end_date','$data_desc','$dataset_file')";

if(mysqli_query($conn,$sql)) {
  header('Location:user_result.php?id='.$user);
}
else {
  echo "not inserted".mysqli_error($conn);
}


mysqli_close($conn);
 ?>
