<?php
// mysqli_connect() function opens a new connection to the MySQL server.

require_once 'db_connection/db_connect.php';

session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$quere = "SELECT * from `user_table` where `email` = '$user_check' ";
$ses_sql = mysqli_query($db, $quere);
$roww = mysqli_fetch_assoc($ses_sql);
$login_session = $roww['email'];
?>