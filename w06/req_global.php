<?php
/*---------------------
  1. Create a connection
-----------------------*/

$server = "localhost";
$user = 'root';
$pass = 'root';
$db = 'des463_project';
$conn = mysqli_connect($server, $user, $pass, $db);

//test actual connection
if ($message = mysqli_connect_errno()){
	echo 'connection Failed' . $message;

}
$siteTitle = 'Peek A Boo Website';
$pageTitle = 'Welcome to Our Website';
$tagline = 'Peeing your pants is the coolest';
?>