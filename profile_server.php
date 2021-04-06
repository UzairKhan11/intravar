<?php
require_once 'db_connection/db_connect.php';

if (isset($_POST['save'])) {
	
	$id		  = $_POST['id'];
	$image    = $_FILES["image"]["name"];
	$username = $_POST['username'];
	$contact  = $_POST['contact'];
	$password = $_POST['password'];
	$massenger= $_POST['massenger'];
	$wechat   = $_POST['wechat'];
	$skype	  = $_POST['skype'];
	$website  = $_POST['website'];

	 $target  = "assets/images/".basename($image);

	 	 $up  = "UPDATE `user_table` SET `image`='$image',`username`= '$username' ,`contact`= '$contact',`password`= '$password',`massenger`= '$massenger',`skype`= '$skype',`website`= '$website' ,`wechat`= '$wechat' WHERE `id`= '$id'";
	 $exe_up  = mysqli_query($db,$up);


    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    header('location: share.php'); 
}


?>