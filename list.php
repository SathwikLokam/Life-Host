
<html>
  <head>
    <title>Donate it</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
      *{
      font-family: "Algerian";
        color:white;
      }

.block{
  margin-bottom: 0.5%;
  height:inherit;
  width:auto; 
  padding: 4%;
  border: 1px solid deepskyblue;
  background: rgba(0,0,0,0.4);
      }
  .block img{
    margin: 0 40%;
  border-radius: 20%;
  background: transparent;    
    border: 3px solid black;
      }
.block p {
  margin: auto;
  margin-right: 12%;
  color :white;
  font-size:100%;
      }
    .vid-bg{
      z-index: -1;
     position:fixed;
      right: 0;
      bottom: 0;
      min-height: 100%;
      min-width: 100%;
    }
       .nav-area{
      background: rgba(0,0,0,0.7);
      height: 60px;
      width: 100%;
      margin-bottom: 1.5%;
      border-bottom:2px solid skyblue;
    }
    .menu-area{
      float: right;
      list-style: none;
    }
    .menu-area li{
      display: inline-block;
      margin: 0 5px;
    }
    .menu-area li a{
      text-decoration: none;
      color:white;
      padding: 5px 10px;
      letter-spacing: 2px;
      font-size: 23px;
  animation: glow 1s ease-in-out infinite alternate;
    }
      .menu-area li a:hover{
  animation: glow 1s ease-in-out infinite alternate;
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
    text-shadow: 0 0 10px deepskyblue, 0 0 20px deepskyblue, 0 0 30px deepskyblue, 0 0 40px deepskyblue, 0 0 50px deepskyblue, 0 0 60px deepskyblue, 0 0 70px deepskyblue;
  }
  
  to {
    text-shadow: 0 0 20px skyblue, 0 0 30px skyblue, 0 0 40px skyblue, 0 0 50px skyblue, 0 0 60px skyblue, 0 0 70px skyblue, 0 0 80px skyblue;
  }
}

    </style>   
  </head>
  <body style="cursor:default">
    <video src="PixelFiles/Videos/planedot.mp4"  class="vid-bg" autoplay loop muted></video>
     <div class="nav-area">
        <div class="glow">Life Host</div>
        <ul class="menu-area">
          <li onclick="alert('Are You Want To Run Campaign')"><a href="RunCamp.php"><i class="far fa-registered" title="Run Campaign"></i></a></li>
          <li><a href="Logout.php" title="Log Out"><i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
      </div>
    
<?php
  $connection = mysqli_connect("localhost:3306", "root","","maindatabase");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$res=mysqli_query($connection,"select * from requesttable");
    
if(isset($user_check))
{
for($i=1;$i<=mysqli_num_rows($res);$i++)
{
  $row=mysqli_fetch_array($res);
  if($row['state']=="accepted"){
  ?>
   <div class="block">
        <img src="PixelFiles/profile/<?=$row['profile']?>" title="campaigner profile" height="100px"/>
       <div title="Try to use payment number to pay through UPI">
          <p><?=$row['rmessage']?><details><summary style="color:deepskyblue;">MORE</summary><h4><?=$row['vmessage']?><br/>
            Payment : <?=$row['payment']?> Number  <?=$row['paynumber']?>     
            <br/>
            Witness Phone Number: <?=$row['wnumber']?>
            </h4></details>
           </p></div></div>
    <?php
}
}
} ?>
  </body>
</html>