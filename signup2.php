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
        #container a:hover
        {
            text-decoration: underline;
            color:aqua;
        }
        #buttons button
  		{
            cursor: pointer;
  			border-style: solid;
  			border-color: #03DAC5;
  			border-radius: 50px;
  			padding: 10px 20px;
  			margin: 10px 20px 10px 0px;
  			text-decoration: none;
  			color:#03DAC5;
  			display: inline-block;
  			font-size: 15px;
            background-color: #1F1B24;
  		}
  		#buttons button:hover
  		{
  			color:#1F1B24;
  			background-color: #03DAC5;
  		}



    </style>
    <script>
        function addContent(content)
        {
            var field = document.getElementById('skillId');
            field.value += content + ' '; 
        }
    </script> 
</head>
<body>
    <div id = logo>
        <h1>&lt;partnersInCrime&gt;</h1>
    </div>
    <center>
    <div id = 'container'>
        <center><h2 style="font-family: 'Source Code Pro', monospace;">
        _SignUp_
        </h2></center>
        <form action = "signup2_a.php" method="POST">            
        <p style="text-align: left;">Your Skills</p>
        <input type="text" name="skill" id = "skillId" placeholder="Show Your Skills">
        <input type= "submit" value="Get Started">
    </form>
    <p align = 'left'>One Click add </p>
        <div id = "buttons" align = 'left'>
            <button onclick= "addContent('Frontend Developer')" >Frontend Developer</button>
            <button onclick= "addContent('Backend Developer')" >Backend Developer</button>
            <button onclick= "addContent('Game Developer')" >Game Developer</button>
            <button onclick= "addContent('Data Science')" >Data Science</button>
            <button onclick= "addContent('Python')" >Python</button>
            <button onclick= "addContent('Django')" >Django</button>
            <button onclick= "addContent('Asp.net')" >Asp.net</button>
            <button onclick= "addContent('Angular')" >Angular</button>
            <button onclick= "addContent('node.js')" >node.js</button>
            <button onclick= "addContent('React.js')" >React.js</button>
            <button onclick= "addContent('C')" >C</button>
            <button onclick= "addContent('CPP')" >CPP</button>
            <button onclick= "addContent('C#')" >C#</button>
            <button onclick= "addContent('Java')" >Java</button>
        </div>
    <a href="signup.html">Go Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="index.html">Go Home</a>
    </div>
</center>

</body>
</html>