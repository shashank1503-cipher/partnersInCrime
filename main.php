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
    <title>partnersInCrime | Index</title>
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
            width:350px;
	        height:450px;
            float: left;
            position: fixed;
            margin-top: 4.5rem;
            margin-left: 10rem;
            background-color: #1F1B24;
            box-sizing: border-box;
            text-align: center; 
            font-family: 'Roboto',sans-serif;
            color:#03DAC5;
            box-shadow: 4px 8px 16px 0 rgba(124, 124, 124, 0.2);
        }
        #Box p{
	        padding:0px;
	        margin-bottom:5px;
	        text-align:center;
        }

        
        #Box a{
            text-decoration: none;
            border:none;
            outline:none;
            background:#03DAC5;
            color: #1F1B24;
            height:40px;
            font-family: 'Source Code Pro', monospace;
            font-size:18px;
            border-radius:20px;
            margin-top: 20px;
            padding: 10px;
        }
        #Box a:hover
        {   border: #03DAC5 solid 1px;
            
            cursor:pointer;
            background: #1F1B24;
            color:#03DAC5;
        }
        ::selection{
            color: #121212;
            background: #664AFF;
            }
            .search-box{
            float: left;
            margin-top: 200px;
            margin-left: 865px;
            position: fixed;
            height: 60px;
            width: 60px;
            border-radius: 50%;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0  #03DAC5;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);

            }
            .search-box.active{
            width: 350px;
            }
            .search-box input{
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 50px;
            background: #121212;
            outline: none;
            padding: 0 60px 0 20px;
            font-size: 18px;
            opacity: 0;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            color: #03DAC5;
            }
            .search-box input.active{
            opacity: 1;
            }
            .search-box input::placeholder{
            color: #a6a6a6;
            }
            .search-box .search-icon{
            position: absolute;
            right: 0px;
            top: 50%;
            transform: translateY(-50%);
            height: 60px;
            width: 60px;
            background: #121212;
            border-radius: 50%;
            text-align: center;
            line-height: 60px;
            font-size: 22px;
            color: #03DAC5;
            cursor: pointer;
            z-index: 1;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            }
            .search-box .search-icon.active{
            right: 5px;
            height: 50px;
            line-height: 50px;
            width: 50px;
            font-size: 20px;
            background: #03DAC5;
            color: #121212;
            transform: translateY(-50%) rotate(360deg);
            }
            .search-box .cancel-icon{
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 25px;
            color: #03DAC5;
            cursor: pointer;
            transition: all 0.5s 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            }
            .search-box .cancel-icon.active{
            right: -40px;
            transform: translateY(-50%) rotate(360deg);
            }
            .search-box .search-data{
            text-align: center;
            padding-top: 7px;
            color: #03DAC5;
            font-size: 18px;
            word-wrap: break-word;
            }
            .search-box .search-data.active{
            display: none;
            }
            
            h2
            {
                overflow: hidden;
                position: fixed;
                margin-top: 150px;
                margin-left: 865px;
                font-family: 'Source Code Pro', monospace;
                font-size: 25px;
                letter-spacing: 0.01em;
                color: #03DAC5;
            }
            .alert 
            {

                display: block;
                margin-left: 100px;
                padding: 20px;
                background-color: #00FF7F;
                text-align: center;
                color: black;
                width: 75%;
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
                color: #fff;
            }
        
        
        
</style>

</head>

<body >
    

    <div id = logo>
        <a href = "main.php"><h1></h1></a>
        
    </div>
   
    <nav>
        
        <ul>
            <li><span><p style="color:  #03DAC5;" id = "nameId">printf("Hello <?php echo htmlspecialchars($_SESSION["name"]); ?>")</p></span></li>
            <li><a href="main.html">Home</a></li>
            <li><a href = "profiler.php">Profile</a></li> 
            <li><a href = "logout.php"> Logout </a></li>
            
        </ul>
        
    </nav>

    <div id = "Box">
        <h1 style = "font-family: 'Source Code Pro', monospace;">
            Your batchmates  who just joined 
        </h1>
        <?php 
            require_once 'dbConfig.php';    
            $batch = $_SESSION['batch'];
            $sql = "SELECT NAME FROM USERDETAILS RIGHT JOIN USERS ON USERDETAILS.USERNAME = USERS.USERNAME WHERE BATCH = '$batch' ORDER BY USERS.CREATED_AT DESC LIMIT 5;";
            $result = mysqli_query($link, $sql);
        
         while($rows=mysqli_fetch_assoc($result))
            {     
             echo '<p>'.$rows["NAME"].'</p>'; 
         }
?>
        
        
    </div>
    <h2>Find a teammate here</h2>
    <form action = 'search.php' id = "searchFormId" method="GET">
    <div class="search-box">
        
        <input type="text" placeholder="Find Developers......" name = "search" id = "search">
        
        <div class="search-icon">
          <i class="fas fa-search"></i>
        </div>
    
  <div class="cancel-icon">
          <i class="fas fa-times"></i>
        </div>
  <div class="search-data">
  </div>
  </div>
</form>
<div class="alert" >
        
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong>Hey there!!!</strong> Head over to profile section to fill out some basic info :):):)
      </div>
    <script>
        const searchBox = document.querySelector(".search-box");
      const searchBtn = document.querySelector(".search-icon");
      const cancelBtn = document.querySelector(".cancel-icon");
      const searchInput = document.querySelector("input");
      const searchData = document.querySelector(".search-data");
      searchBtn.onclick =()=>{
        searchBox.classList.add("active");
        searchBtn.classList.add("active");
        searchInput.classList.add("active");
        cancelBtn.classList.add("active");
        searchInput.focus();
        if(searchInput.value != ""){
          document.getElementById("searchFormId").submit();
        }
      }
      cancelBtn.onclick =()=>{
        searchBox.classList.remove("active");
        searchBtn.classList.remove("active");
        searchInput.classList.remove("active");
        cancelBtn.classList.remove("active");
        searchData.classList.toggle("active");
        searchInput.value = "";
      }
        function changeName() {
            var names = ["print('Hello Shashank Srivastava')","System.out.println('Hello Shashank Srivastava');","cout << 'Hello Shashank Srivastava';"," console.log('Hello Shashank Srivastava');","&lt;h1&gt;Hello Shashank Srivastava&lt;/h1&gt;","printf('Hello Shashank Srivastava');"," Console.WriteLine ('Hello Shashank Srivastava');"]
            var index = Math.floor(Math.random()*7);
            var name = names[index];
                document.getElementById("nameId").innerHTML = name;
                
        }
        
        setInterval(function(){changeName('Shashank Srivastava')},1000);
    </script>
    
</body>
</html>