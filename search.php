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
    <title>partnersInCrime | Search Results</title>
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
        #Box
        {
            overflow: hidden;
            width:50%;
	        height:25vh;
            float: left;
            margin-bottom: 3em;
            margin-left: 22em;
            background-color: #1F1B24;
            box-sizing: border-box;
            padding: 10px;
            font-family: 'Roboto',sans-serif;
            color:#03DAC5;
            box-shadow: 4px 8px 16px 0 rgba(124, 124, 124, 0.2);
        }
        

      
        
        #Box a{
            text-decoration: none;
            border:none;
            outline:none;
            background:#03DAC5;
            color: #1F1B24;
            
            font-family: 'Source Code Pro', monospace;
            font-size:18px;
            border-radius:20px;
            margin-left: 600px;
            
            padding: 10px;
        }
        #Box a:hover
        {   border: #03DAC5 solid 1px;
            
            cursor:pointer;
            background: #1F1B24;
            color:#03DAC5;
        }
        
</style>

</head>

<body >
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
    <h1 style = "font-family: 'Source Code Pro', monospace; text-align: center;color:#03DAC5; ">
        These came back from the search
    </h1>
    <?php

require_once 'dbConfig.php';

$query = $_GET['search'];

$sql = "SELECT * FROM USERDETAILS WHERE skills LIKE '$query' OR NAME LIKE '$query' OR BATCH LIKE '$query'";
$result = mysqli_query($link, $sql);
 while($rows=mysqli_fetch_assoc($result))
            {     
             echo '<div id = "Box"><h3>'.$rows["NAME"].'</h3>
        <p>Skills:'.$rows["skills"].'</p> <a href = "viewProfile.php?u='.$rows["USERNAME"].'">
            View
        </a></div>'; 
         }
?>        
         
    
    
    
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