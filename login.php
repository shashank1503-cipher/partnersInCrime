<?php
require_once 'dbConfig.php';

session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=== true)
{
	header('location: main.html');
	exit;
}

else
{


$errStatement = "";
$err = FALSE;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username = trim($_POST['user']);
	$password = trim($_POST['pwd']);
	$hashedPassword = md5($password);

	if(empty($username) || empty($password))
	{
		$err = TRUE;
		$errStatement = "Please fill in the details";
	}
	else
	{
		$sql = "Select * from users where username='$username' and password = '$hashedPassword'";
        $result = mysqli_query($link, $sql);
        $num = mysqli_num_rows($result); 
        if ($num == 1)
        {
        	$_SESSION['loggedin'] = true;
        	$_SESSION['username'] = $username;
        	header('Location: main.php');
        	
        }
        else
        {
        	$errStatement = "Invalid Credentials";
        	$err = TRUE;
        	header('Location: index.php');
        }

	}

}
}
?>