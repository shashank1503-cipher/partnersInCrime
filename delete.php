<?php 

require_once 'dbConfig.php';

session_start();
$username = $_SESSION['username'];
$sql = "DELETE FROM userdetails WHERE username = '$username'";
$result = mysqli_query($link, $sql);

if($result)
{
	$sql = "DELETE FROM users WHERE username = '$username'";
	$result = mysqli_query($link, $sql);

	if($result){
	header('Location: logout.php');		
	}
}