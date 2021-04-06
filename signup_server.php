<?php

include 'db_connection/db_connect.php';

if (isset($_POST['register'])) {
	
	$username   = $_POST['username'];
	$email      = $_POST['email'];
	$contact    = $_POST['contact'];
	$password   = $_POST['password'];
	$c_password = $_POST['c_password'];

	$check = "SELECT * from `user_table` where `email` = '$email'";
	$exe   = mysqli_query($db,$check);
	$rows  = mysqli_num_rows($exe);
	if ($rows > 0) {
		
		header('location: signup.php?Invalid="User already exists with this email"');
	}
	else
	{

		$query = "INSERT INTO `user_table` (`id`, `username`, `email`, `contact`, `password`) VALUES (NULL, '$username', '$email', '$contact', '$password')";
		$run   = mysqli_query($db,$query);

		header('location: login.php?reg=Account Resgisterd Successfully');
	}

}

?>