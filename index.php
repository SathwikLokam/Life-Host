
<?php
session_start(); 
if(empty($_SESSION))
{ 
echo   '
<!DOCTYPE html>
<html>
<head >  
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Life Host</title>
  <style>
*{
font-family: "Algerian";

}
    body{
      margin: 0;
      padding: 0;
      font-family: poppins;
      cursor: default;
    }
    header{
      overflow: hidden;
      height: inherit;
    }
    .vid-bg{
      position: absolute;
      right: 0;
      bottom: 0;
      min-height: 100%;
      min-width: 100%;
    }
    .nav-area{
      background: rgba(0,0,0,0.6);
      height: 60px;
      position: absolute;
      width: 100%;
    }
    .menu-area{
      float: right;
      list-style: none;
      margin: 20px;
    }
    .menu-area li{
      display: inline-block;
      margin: 0 5px;
    }
    .menu-area li a{
      text-decoration: none;
      color:white;
      padding: 5px 5px;
      letter-spacing: 2px;
    font-size: 23px;
  animation: glow 1s ease-in-out infinite alternate;
    }
     .menu-area li a .fas
    {
      color:white;
      
    }
    .menu-area li a:hover{
      color :deepskyblue;
    }
    .banner-text{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      text-align: center;
    }
    .banner-text h2{
      color :white;
      font-size: 40px;
      margin: 0;
    }
    .banner-text p{
      color :white;
      font-size: 18px;
      margin: 0;
      font-weight: bold;
    }
    .btn{
      display: inline-block;
      margin-top: 5%;
      background: transparent;
      border: 0;
      font-size: 20px;
      text-transform: uppercase;
      border:3px solid white;
      padding: 10px 25px;
      color:white;
      border-radius: 25px;
  animation: glow 1s ease-in-out infinite alternate;
    }
    .btn:hover
    {
      transform: 0.3s;
      background-color: black;
      font-size: 24px;
      color:deepskyblue;
      border-color:deepskyblue;
  animation: glow 1s ease-in-out infinite alternate;
      
    }
    .nar{
      float: inherit;
    }
    .nar a{
      text-decoration: none;
      color :white;
    }
    
    .glow {
      
      
  margin: 0 50px;
  height: 60px;
  color:white;
  font-size: 35px;
  text-transform: capitalize;
  font-weight: bold;
  letter-spacing: 2px;
  float: left;
  padding: 13px 0;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px deepskyblue, 0 0 20px deepskyblue, 0 0 30px deepskyblue, 0 0 40px deepskyblue ;
  }
  
  to {
    text-shadow: 0 0 20px skyblue, 0 0 30px skyblue, 0 0 40px skyblue, 0 0 50px skyblue;
  }
}

    
  </style>
  <script>
    function servicesec()
    {
      alert("Service section is under development");
    }
  </script>
</head>
 <body>
   <header>
      <video src="PixelFiles/Videos/planefloat2.mp4"  class="vid-bg" autoplay loop muted></video>
      <div class="nav-area">
        <div class="glow">Life Host</div>
        
        <ul class="menu-area">
          <li><a href="aboutus.html" title="Aboutus"><i class="fas fa-info-circle"></i></a></li>
          <li><a href="mailto:yalsmnvs@gmail.com" title="Click To Contact"><i class="fas fa-envelope"></i></a></li>
        </ul>
      </div>
      <div class="banner-text">
        <h2 class="glow" style="font-size : 3vw;">The World Needs your help</h2>
        <div class="nar">
        <a href="Login.html" class="btn">Login</a>
        <a href="Registration.html" class="btn">Register</a>
        </div>
   </div>
     </header>
  </body>
</html>'
;
}
elseif($_SESSION['login_user']=="WebsiteAdmin@mail.com")
{
 echo   '
<!DOCTYPE html>
<html>
<head >  
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Life Host</title>
  <style>
    body{
      margin: 0;
      padding: 0;
      font-family: poppins;
      cursor: default;
    }
    header{
      overflow: hidden;
      height: inherit;
    }
    .vid-bg{
      position: absolute;
      right: 0;
      bottom: 0;
      min-height: 100%;
      min-width: 100%;
    }
    .nav-area{
      background: rgba(0,0,0,0.6);
      height: 60px;
      position: absolute;
      width: 100%;
    }
    .menu-area{
      float: right;
      list-style: none;
      margin: 20px;
    }
    .menu-area li{
      display: inline-block;
      margin: 0 5px;
    }
    .menu-area li a{
      text-decoration: none;
      color:white;
      padding: 5px 5px;
      letter-spacing: 2px;
    font-size: 23px;
  animation: glow 1s ease-in-out infinite alternate;
    }
     .menu-area li a .fas
    {
      color:white;
      
    }
    .menu-area li a:hover{
      color :orangered;
    }
    .banner-text{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      text-align: center;
    }
    .banner-text h2{
      color :white;
      font-size: 40px;
      margin: 0;
    }
    .banner-text p{
      color :white;
      font-size: 18px;
      margin: 0;
      font-weight: bold;
    }
    .btn{
      display: inline-block;
      width:60%;
      margin-top: 5%;
      background: transparent;
      border: 0;
      font-size: 20px;
      text-transform: uppercase;
      border:3px solid white;
      padding: 10px 25px;
      color:white;
      border-radius: 25px;
  animation: glow 1s ease-in-out infinite alternate;
    }
    .btn:hover
    {
      transform: 0.3s;
      background-color: black;
      font-size: 24px;
      color:orangered;
      border-color:orangered;
  animation: glow 1s ease-in-out infinite alternate;
      
    }
    .nar{
      float: inherit;
    }
    .nar a{
      text-decoration: none;
      color :white;
    }
    
    .glow {
      
      
  margin: 0 50px;
  height: 60px;
  color:white;
  font-size: 35px;
  text-transform: capitalize;
  font-weight: bold;
  letter-spacing: 2px;
  float: left;
  padding: 13px 0;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px orangered, 0 0 20px orangered, 0 0 30px orangered, 0 0 40px orangered ;
  }
  
  to {
    text-shadow: 0 0 20px orange, 0 0 30px orange, 0 0 40px orange, 0 0 50px orange;
  }
}

    
  </style>
  <script>
    function servicesec()
    {
      alert("Service section is under development");
    }
  </script>
</head>
 <body>
   <header>
      <video src="PixelFiles/Videos/planefloat2.mp4"  class="vid-bg" autoplay loop muted></video>
      <div class="nav-area">
        <div class="glow">Life Host</div>
        
        <ul class="menu-area">
          <li><a href="aboutus.html" title="Aboutus"><i class="fas fa-info-circle"></i></a></li>
          <li><a href="mailto:yalsmnvs@gmail.com" title="Click To Contact"><i class="fas fa-envelope"></i></a></li>
        </ul>
      </div>
      <div class="banner-text">
        <h2 class="glow">The World Need your help</h2>
        <div class="nar">
        <a href="Master.php" class="btn">Make Admin</a>
        </div>
   </div>
     </header>
  </body>
</html>';

}
else
{
  echo   '
<!DOCTYPE html>
<html>
<head >  
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Life Host</title>
  <style>
  *
  {
    font-family : "Algerian";
  }

    body{
      margin: 0;
      padding: 0;
      font-family: poppins;
      cursor: default;
    }
    header{
      overflow: hidden;
      height: inherit;
    }
    .vid-bg{
      position: absolute;
      right: 0;
      bottom: 0;
      min-height: 100%;
      min-width: 100%;
    }
    .nav-area{
      background: rgba(0,0,0,0.6);
      height: 60px;
      position: absolute;
      width: 100%;
    }
    .menu-area{
      float: right;
      list-style: none;
      margin: 20px;
    }
    .menu-area li{
      display: inline-block;
      margin: 0 5px;
    }
    .menu-area li a{
      text-decoration: none;
      color:white;
      padding: 5px 5px;
      letter-spacing: 2px;
    font-size: 23px;
  animation: glow 1s ease-in-out infinite alternate;
    }
     .menu-area li a .fas
    {
      color:white;
      
    }
    .menu-area li a:hover{
      color :deepskyblue;
    }
    .banner-text{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      text-align: center;
    }
    .banner-text h2{
      color :white;
      font-size: 40px;
      margin: 0;
    }
    .banner-text p{
      color :white;
      font-size: 18px;
      margin: 0;
      font-weight: bold;
    }
    .btn{
      display: inline-block;
      width:60%;
      margin-top: 5%;
      background: transparent;
      border: 0;
      font-size: 20px;
      text-transform: uppercase;
      border:3px solid white;
      padding: 10px 25px;
      color:white;
      border-radius: 25px;
  animation: glow 1s ease-in-out infinite alternate;
    }
    .btn:hover
    {
      transform: 0.3s;
      background-color: black;
      font-size: 24px;
      color:deepskyblue;
      border-color:deepskyblue;
  animation: glow 1s ease-in-out infinite alternate;
      
    }
    .nar{
      float: inherit;
    }
    .nar a{
      text-decoration: none;
      color :white;
    }
    
    .glow {
      
      
      margin: 0 50px;
      height: 60px;
      color:white;
      font-size: 35px;
      text-transform: capitalize;
      font-weight: bold;
      letter-spacing: 2px;
      float: left;
      padding: 13px 0;
      animation: glow 1s ease-in-out infinite alternate;
    }

    .glow1 {
      
      
      margin: 0 50px;
      height: 60px;
      color:white;
      font-size: 60px;
      text-transform: capitalize;
      font-weight: bold;
      letter-spacing: 2px;
      float: left;
      padding: 13px 0;
      animation: glow 1s ease-in-out infinite alternate;
    }
        
@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px deepskyblue, 0 0 20px deepskyblue, 0 0 30px deepskyblue, 0 0 40px deepskyblue ;
  }
  
  to {
    text-shadow: 0 0 20px skyblue, 0 0 30px skyblue, 0 0 40px skyblue, 0 0 50px skyblue;
  }
}

    
  </style>
  <script>
    function servicesec()
    {
      alert("Service section is under development");
    }
  </script>
</head>
 <body>
   <header>
      <video src="PixelFiles/Videos/planefloat2.mp4"  class="vid-bg" autoplay loop muted></video>
      <div class="nav-area">
        <div class="glow">Life Host</div>
        
        <ul class="menu-area">
          <li><a href="aboutus.html" title="Aboutus"><i class="fas fa-info-circle"></i></a></li>
          <li><a href="mailto:yalsmnvs@gmail.com" title="Click To Contact"><i class="fas fa-envelope"></i></a></li>
        </ul>
      </div>
      <div class="banner-text">
        <h2 class="glow" style="font-size 3vw;">The World Needs your help</h2>
        <div class="nar">
        <a href="list.php" class="btn">Go</a>
        </div>
   </div>
     </header>
  </body>
</html>';
} ?>