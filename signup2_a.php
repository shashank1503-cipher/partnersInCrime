<?php
session_start();
require_once 'dbConfig.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$skills = trim($_POST["skill"]);
	$username = $_SESSION['username'];
	$sql = "UPDATE userdetails SET skills = '$skills' WHERE username = '$username'"; 
    $result = mysqli_query($link, $sql);
    if($result)
    {
    	header('Location: main.php');
        $_SESSION['loggedin'] = true;
    }
    else
    {
    	echo "Something went wrong";
    }
}
?>