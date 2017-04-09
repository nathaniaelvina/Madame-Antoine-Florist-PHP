<?php
session_start();
unset($_SESSION['login']); // Menghancurkan session dengan nama tertentu
session_destroy();		
header("Location: login-admin.php"); // Redirecting To Home Page
?>