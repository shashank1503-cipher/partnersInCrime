<?php 

require_once 'dbConfig.php';

session_start();
$username = $_SESSION['username'];
$Oname =  "";
$Obatch = "";
$Oskills = "";
$Ophone = "";
$Oinsta = "";
$sql = "SELECT * FROM userdetails WHERE username = '$username'";
$result = mysqli_query($link, $sql);

if($result)
{
    while($row = mysqli_fetch_assoc($result)) 
    {
        $Oname =  $row["NAME"];
        $Obatch = $row["BATCH"];
        $Oskills = $row["skills"];
        $Ophone = $row["PHONE"];
        $Oinsta = $row["INSTA"];
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name = trim($_POST['name']);
    $batch = trim($_POST['batch']);
    $skills = trim($_POST['skills']);
    $phone = trim($_POST['contact']);
    $insta = trim($_POST['insta']);
    if(empty($name))
    {
    	$name = $Oname;
    }
    elseif (empty($batch)) {
    	$batch = $Obatch;
    }
    elseif (empty($skills)) {
    	$skills = $Oskills;
    }
    elseif (empty($phone)) {
    	$phone = $Ophone;
    }
    elseif (empty($insta)) {
    	$insta = $Oinsta;
    }
    $sql = "UPDATE userdetails SET NAME = '$name', BATCH = '$batch', skills = '$skills', PHONE = '$phone',INSTA = '$insta' WHERE username = '$username'";
    $result = mysqli_query($link,$sql);
    if($result)
    {
    	header('Location: main.php');
    }

}


?>