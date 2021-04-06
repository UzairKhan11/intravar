<?php 
include 'db_connection/db_connect.php';
session_start();

if (isset($_POST['login'])) 
{
	if(empty($_POST['email']) || empty($_POST['password']))
	 {
		 header("location:login.php?Invalid= Please Fill in the Fields");
     }
     else
     {
		$email=$_POST['email'];
		$password=$_POST['password'];
		$query = "SELECT * FROM `user_table` WHERE  (email='".$_POST['email']."' and password='".$_POST['password']."') ";
		$result=mysqli_query($db,$query);
        
        if(mysqli_fetch_assoc($result))
            {
                $_SESSION['login_user']=$_POST['email'];
                header("location:profile.php");
            }
            else
            {
                header("location:login.php?Invalid= Invalid User Email and Password ");
            }
		
	  }
}

 ?>