<?php 
require_once 'dbConfig.php';

session_start();

$username = $_SESSION['username'];
$sql = "SELECT * FROM userdetails WHERE username = '$username'";
$result = mysqli_query($link, $sql);
$name = "";
$batch = "";

if($result)
{
    while($row = mysqli_fetch_assoc($result)) 
    {
        $name =  $row["NAME"];
        $batch = $row["BATCH"];
    }
$_SESSION['name'] = $name;
$_SESSION['batch'] = $batch;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partnersInCrime | Profile</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel = "icon" href = "logo.png" type = "image/x-icon">
    <style>
        body
        {
            background-color:#121212;
        }
        @keyframes logo {
            0%{
                content: "< partnersInCrime />";
            }
            50%
            {
                content: "< partnersInCrime |>" ;
            }
            100%
            {
                content: "< partnersInCrime \005C >" ;
            }
        }
        #logo
        {
           
            font-family: 'Source Code Pro', monospace;
            font-size: 25px;
            transform: translate(0,-45%);
            
            height:3rem;
        }
        #logo a
        {
            text-decoration: none;
            color:#03DAC5;
        }
       #logo h1::after
       {
           content: "<partnersInCrime>";
       }
       #logo h1:hover::after
       {
           animation: logo 0.35s;
           animation-iteration-count: infinite;
           
       }
        nav
        {
            max-width: 100%;
        }
        nav ul
        {
            font-family: 'Source Code Pro', monospace;
            float:center;
            margin:none;
            background-color: #1F1B24 ;
        }
        nav li {
            
            display:inline-block;
            margin:none;
            padding:none;
        }
        nav li a,nav li span{
            box-sizing: border-box;
            display:inline-block;
            margin:none;
            padding:0em 1.5em;
            text-align:center;
            font-family:"Roboto",sans-serif;
            font-weight:600; 
            line-height:60px;
            text-decoration:none;
        }
        nav li a{
            position: relative;
            color:#03DAC5;
            
            
        }
        nav li span
        {

            min-width: 500px;
            max-width: 500px;
            margin-right: 500px;
        }
        nav li:hover a{
            color:#1F1B24;
            background:#03DAC5;
            border-radius: 3px;
            text-decoration:none;
        }
        #center
        {
            float: left;
            width: 50%;
        }
        #container{
            
            background-color: #1F1B24;
            
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 20px;
            padding-bottom: 20px;
            margin-bottom: 30px;
            box-sizing: border-box;
            color:#03DAC5;
            font-family: 'Roboto',sans-serif;
            box-shadow: 4px 8px 16px 0 rgba(124, 124, 124, 0.2);
            


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
        }#imgContainer
        {
            width:20%;
            float: left;
            background-color: #1F1B24;
            margin-left: 150px;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 20px;
            
            margin-right: 10px;
            box-sizing: border-box;
            color:#03DAC5;
            font-family: 'Roboto',sans-serif;
            height: 368px;
            box-shadow: 0px 8px 16px 0 rgba(124, 124, 124, 0.2);
            
        }
        #imgContainer img
        {
            display: block;
            margin-top: 55px;
            margin-left: 25px;
            border:#03DAC5 solid 1px;
            border-radius: 200px;
            box-shadow: 0 2px 5px 0  #03DAC5;
            height: 180px;
            width: 180px;
            
        }
        
        #imgContainer label {
            background-color: #03DAC5;
            color: #000;
            padding: 0.25rem;
            font-family: sans-serif;
            border-radius: 0.3rem;
            cursor: pointer;
            margin-left: 50px;
           }
           #imgContainer label:hover {
            background-color: #1F1B24;
            color: #03DAC5;
           }




    </style>
        </style>
</head>
<body>
    <div id = logo>
        <a href = "main.html"><h1></h1></a>
        
    </div>
   
    <nav>
        
        <ul>
            <li><span><p style="color:  #03DAC5;" id = "nameId">printf("Hello <?php echo htmlspecialchars($_SESSION["name"]); ?>")</p></span></li>
            <li><a href="main.php">Home</a></li>
            <li><a href = "profiler.php">Profile</a></li>
            <li><a href = "logout.php"> Logout </a></li>
            
        </ul>
        
    </nav>
    <h1 style="color:  #03DAC5;font-family: 'Source Code Pro', monospace; text-align: center;">Your Profile</h1>
    <div id = "imgContainer"><h1 style="font-family:'Source Code Pro';font-size: 7.5vh;">UPDATE <br>YOUR<br>PROFILE</h1></div>
    <div id = "center">
        <?php 

require_once 'dbConfig.php';


$username = $_SESSION['username'];

$sql = "SELECT * FROM userdetails WHERE username = '$username'";
    $result = mysqli_query($link, $sql);
    $name = "";
    $batch = "";
    $skills = "";
    $phone = "";
    $insta = "";
    if($result)
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
            $name =  $row["NAME"];
            $batch = $row["BATCH"];
            $skills = $row["skills"];
            $phone = $row["PHONE"];
            $insta = $row["INSTA"];
        }
    }

       echo '<form action = "update.php" method="POST">
            <!--Basic Details-->
            <div id = "container">
                <h1 style = "font-family: \'Source Code Pro\', monospace;">
                    Basic Details
                </h1>
                
            
                    
                    <p>Name</p>
                    <input type="text" id = "nameId" name = "name" placeholder="'.$name.'">
                    <p>Batch</p>
                    <input type="text" id="batchID" name="batch" placeholder="'.$batch.'">
                    
                
            </div>
            <!--Skills-->
            <div id = "container">
                <h1 style = "font-family: \'Source Code Pro\', monospace;">
                    Skills
                </h1>
                    <p>Your Skills</p>
                    <input type="text" id = "skillId" name = "skill" placeholder="'.$skills.'">
                    
                
            </div>
            <!--Contact Links-->
            <div id = "container">
                <h1 style = "font-family: \'Source Code Pro\', monospace;">
                    Contact Links
                </h1>
                    <p>Contact Number</p>
                    <input type="text" id = "contactId" name = "contact" placeholder="For DMs">
                    <p>Instagram Handle</p>
                    <input type="text" id="instaID" name="insta" placeholder="Your Insta handle for Instagram Direct">
                    <center><input type="submit" value="Save" name = "submit"></center>
                
            </div>'; ?>
        </form>
        <div id = "container"><form action="delete.php" method="POST">
            <center><input type="submit" value="Delete My Account" name = "delete" style="background-color: #f44336;border-radius: 2.5px;padding-left: 5vh;padding-right: 5vh;"></center>
        </form>
    </div>
        
    </div> 
    
    <script>
        function changeName() {
            var names = ["print('Hello Shashank Srivastava')","System.out.println('Hello Shashank Srivastava');","cout << 'Hello Shashank Srivastava';"," console.log('Hello Shashank Srivastava');","&lt;h1&gt;Hello Shashank Srivastava&lt;/h1&gt;","printf('Hello Shashank Srivastava');"," Console.WriteLine ('Hello Shashank Srivastava');"]
            var index = Math.floor(Math.random()*7);
            var name = names[index];
                document.getElementById("nameId").innerHTML = name;
                
        }
        
        setInterval(function(){changeName()},1000);
    </script>
    
</body>
</html>