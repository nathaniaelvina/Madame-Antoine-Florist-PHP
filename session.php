<?php

include 'dal.php';

session_start();// Starting Session
// Storing Session

$user_check=$_SESSION['login'];

$stmt = $conn->prepare("SELECT * FROM `user-admin` WHERE username = '$user_check' LIMIT 1");
			$stmt->execute();
			$row = $stmt->fetch();
			


$login_session =$row['username'];
if(!isset($login_session)){
//mysql_close($connection); // Closing Connection
header('Location: login-admin.php'); // Redirecting To Home Page
}
?>