
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partnersInCrime | Signup</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@900&display=swap" rel="stylesheet"> 
    
    <style>
        body
        {
            background-color:#121212;
        }
        #logo
        {
            overflow: hidden;
            font-family: 'Source Code Pro', monospace;
            font-size: 25px;
            transform: translate(0,-45%);
            color:#03DAC5;
            height:6rem;
        }
        #container{
            background-color: #1F1B24;
            
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 20px;
            padding-bottom: 20px;
            width: 50rem;
            box-sizing: border-box;
            color:#03DAC5;
            font-family: 'Roboto',sans-serif;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0  #03DAC5;
            


        }
         
        #container input{
            padding:none;

            font-family: 'Roboto',sans-serif;

        }
        #container input[type = "text"] ,input[type = 'password']{
            border: none;
            margin-left:10px;
            border-bottom:1px solid #03DAC5;
            background:transparent;
            outline:none;
            color:#fff;
            height:40px;
            font-size:16px;
            width:100%;
        }
        #container input[type="submit"]{
            border:none;
            outline:none;
            background:#03DAC5;
            color:#000;
            margin-top: 35px;
            height:40px;
            font-family:'Poppins',sans-serif;
            font-size:18px;
            border-radius:20px;
            
        }
        #container input[type= "submit"]:hover{
            cursor:pointer;
            background:transparent;
            color:#03DAC5;
            
        }
        #container a{
            
            text-decoration:none;
            color:#03DAC5;
            font-family: 'Roboto',sans-serif;
        }
         .alert 
        {

            display: block;
            padding: 20px;
            background-color: #f44336;
            color: black;
            width: 100vh;
            font-family: 'Roboto',sans-serif;
            margin-bottom: 2vh;
            
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
      
    <div id = logo>
        <h1>&lt;partnersInCrime&gt;</h1>
    </div>
    <?php include 'signup_a.php';
       if($err) {
        echo '<center> <div class="alert"> <span class="closebtn" onclick="this.parentElement.style.display= \'none\';">&times;</span> 
        <strong>'.$errStatement.'</strong> 
      </div></center>'; 
    }
?>  
    <center>
    <div id = 'container'>
        <center><h2 style="font-family: 'Source Code Pro', monospace;">
        _SignUp_
        </h2></center>
        <form action = "signup.php" method="POST">            
        <p style="text-align: left;">Enter your name</p>
        <input type="text" name="name" id = "nameId" placeholder="We'll call you by this">
        <p style="text-align: left;">Your Batch</p>
        <input type="text" name="batch" id = "nameId" placeholder="For your batchmates">
        <p style="text-align: left;">Password</p>
        <input type="password" name = "pwd" id = "pwdId" placeholder="Don't disclose it to anyone">
        <p style="text-align: left;">Confirm Password</p>
        <input type="password" name = "Cpwd" id = "CpwdId" placeholder="Just to make sure we're good to go">
        <p style="text-align: left;">Email</p>
        <input type="text" name = "email" id = "email" placeholder="Use your college mail">
        <input type= "submit" value="Next Page">
    </form>
    <p>Already have an account? <a href="index.html">Login</a> </p>
    
    </div>
   <!--<div class="alert" >
        
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Invalid Credentials!!</strong> 
        
      </div>-->
</center> 
</body>
</html>