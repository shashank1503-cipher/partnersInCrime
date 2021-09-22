<?php

session_start();

require_once 'dbConfig.php';

$errStatement = "";
$err = FALSE;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $username = trim($_POST["email"]);
    $password = trim($_POST["pwd"]);
    $confirmPassword = trim($_POST["Cpwd"]);
    $name = trim($_POST["name"]);
    $batch = trim($_POST["batch"]);
   
    if(empty($username) || empty($password) || empty($confirmPassword) || empty($name) || empty($batch) )
    {
        
        $errStatement = "Please Fill all the fields";
        $err = TRUE;

    }
    elseif($password != $confirmPassword)
    {
        $errStatement = "Passwords Don't match";
        $err = TRUE;

    }
    
   
    else
    {
        
        $sql = "Select * from users where username='$username'";
        $result = mysqli_query($link, $sql);
        $num = mysqli_num_rows($result); 
        
        if($num != 0)
        {
            $errStatement = "User Statement";
            $err = TRUE;

        }
        else
        {
            
            $hashedPassword = md5($password);
            
           $sql = "INSERT INTO users  VALUES ('$username', 
                '$hashedPassword', current_timestamp())";
    
            $result = mysqli_query($link, $sql);
            if($result)
            {
                $sql = "INSERT INTO userdetails  VALUES ('$username', 
                '$name', '$batch',NULL,NULL,NULL)"; 
                $result = mysqli_query($link, $sql);
                if($result)
                {
                $_SESSION['username'] = $username;    
                header("Location: signup2.php");
                $_SESSION['loggedin'] = true;                    
                }           
                else
                {
                    $errStatement = "Something went wrong";
                    $err = TRUE;

                }
            }
            else
                {
                    $errStatement = "Something went wrong";
                    $err = TRUE;
                }
                
        }

    }
}
?>