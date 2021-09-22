    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partnersInCrime | Index</title>
    <link rel = "icon" href = "logo.png" type = "image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@900&display=swap" rel="stylesheet"> 
    <style>
        body
        {
            background-color:#121212;
        }
        #head
        {
            overflow: hidden;
            float: left;
            font-family: 'Source Code Pro', monospace;
            font-size: 50px;
            letter-spacing: 0.01em;
            padding-top: 12.5rem;
            padding-left:10rem;
            color: #03DAC5;            
        }
        #loginBox
        {
            width:350px;
	        height:450px;
            float: right;
            margin-top: 10rem;
            margin-right: 20rem;
            background-color: #1F1B24;
            box-sizing: border-box;
            text-align: center; 
            font-family: 'Roboto',sans-serif;
            color:#03DAC5;
            box-shadow: 4px 8px 16px 0 rgba(124, 124, 124, 0.2);
            
        }
        #loginBox p{
	        padding:0px;
	        margin-bottom:5px;
	        text-align:center;
        }
        #loginBox input{
	        padding:0px;
	        width:100%;
	        margin-bottom:20px;
            
        }
        #loginBox input[type="text"],input[type = "password"]{
            border: none;
            border-radius: 20px;
            margin: 10px;
            margin-left: 25px;
            border-bottom:1px solid #1F1B24;;
            background:transparent;
            outline:none;
            color:#03DAC5;
            height:40px;
            font-size:16px;
            
        }
        #loginBox a{
            
            text-decoration:none;
            color:#03DAC5;
            font-family: 'Roboto',sans-serif;
        }
        
        #loginBox input[type="submit"]{
            border:none;
            outline:none;
            background:#03DAC5;
            color: #1F1B24;
            height:40px;
            font-family: 'Source Code Pro', monospace;
            font-size:18px;
            border-radius:20px;
            margin-top: 20px;
            width: 250px;            
        }
        #loginBox input[type= "submit"]:hover{
            cursor:pointer;
            background: #1F1B24;
            color:#03DAC5;
            
        }
        @media only screen and (max-width:800px)
        {
            #head
            {
                padding: 0px;
                width:100%;
                font-size: 35px;
                margin-bottom:100px;
            }
            #loginBox
            {
                align-self: center;
                margin:0px;
            }
        }
        .alert 
        {

            display: block;
            padding: 20px;
            background-color: #f44336;
            color: black;
            width: 100%;
            font-family: 'Roboto',sans-serif;
            
        }

        .closebtn 
        {
            margin-left: 15px;
            color: black;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover 
        {
            color: #03DAC5;
        }
</style>
</head>

<body>
    <?php include 'login.php' ?>

    <div id = "head">
        <p style="color:  #03DAC5;">&lt;partnersInCrime&gt;</p>
        
    </div>
    <div id = "loginBox">
        <h1 style = "font-family: 'Source Code Pro', monospace;">
            Login 
        </h1>
        <form action = "login.php" method="POST">
            <p>Username</p>
            <input type="text" id = "userId" name = "user" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" id="pwdId" name="pwd" placeholder="Enter Password">
            <input type="submit" value="Login" name = "submit">
        </form>
        <a href="signup.php">Register Yourself</a>
    </div>
    <?php
    if($err)
    {
        echo '<div class="alert" >
        
        <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span> 
        <strong>Invalid Credentials!!</strong> 
        
      </div>';
    } 
      ?>
</body>
</html>