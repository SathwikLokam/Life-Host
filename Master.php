
<html>
  <head>
    <title>Admin Privilages</title>
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
  border: 2px solid orangered;
  background: rgba(0,0,0,0.4);
      }
  .block img{
    margin: 0 45%;
  border-radius: 20%;
  background: transparent;    
    border: 2px solid orangered;
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
      border-bottom:2px solid orangered;
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
        color:deepskyblue;
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
    text-shadow: 0 0 10px orangered, 0 0 20px orangered, 0 0 30px orangered, 0 0 40px orangered, 0 0 50px orangered, 0 0 60px orangered, 0 0 70px orangered;
  }
  
  to {
    text-shadow: 0 0 20px orangered, 0 0 30px orangered, 0 0 40px orangered, 0 0 50px orangered, 0 0 60px orangered, 0 0 70px orangered, 0 0 80px orangered;
  }
}
      .submm
      {
background-color: orangered;
        color:  black;
        padding: 1%;
width:50%;
      }
         .submm:hover
      {
background-color: black;
        color: orangered ;
        padding: 1%;
width:50%;
      }
.tex
      {
color:orangered;
      }
    </style>   
  </head>
  <body style="cursor:default">
    <video src="PixelFiles/Videos/planedot.mp4"  class="vid-bg" autoplay loop muted></video>
     <div class="nav-area">
        <div class="glow">Admin</div>
        <ul class="menu-area">
          <li><a href="aboutus.html"></a></li>
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
  ?>
   <div class="block">
  
        <img src="PixelFiles/profile/<?=$row['profile']?>" title="campaigner" height="100px"/><br/><br/>
           <?php
   if($row['state']=="accepted")
   { ?>
     <center><b style="color:lime">ACCEPTED</b></center>
  <?php }
    if($row['state']=="declined")
    {?>
     <center><b style="color:red">DECLINED</b></center>
     <?php
    }
  ?><br/>
          <p><?=$row['rmessage']?>    <details><summary style="color:orangered;">MORE</summary><h4>
     <img src="PixelFiles/victim/<?=$row['victim']?>" title="victim" height="70px"/><br/>
     <br/><?=$row['vmessage']?><br/>
            Payment : <?=$row['payment']?> Number  <?=$row['paynumber']?>     
            <br/>
            Witness Phone Number: <?=$row['wnumber']?><br/><br/>
           Aadhaar : <?=$row['aadhar']?>  <br/><br/>
            <form action="Master.php" method="post">
              <input type="radio" id="agree" name="on" value="Agree" style="color:lime;"><span style="color:green;">Accept Request</span><br/>          
              <input type="radio" id="agree" name="on" Value="Disagree"><span style="color:red;">Decline Request</span><br/>
              <input type="text" value="<?=$row['mailaddr']?>" name="nobr"  hidden>
              <center><button type="sumbit" value="submit" name="submit" class="submm">Submit</button></center>
            </form>
            </h4></details>
       </p></div>
      <?php
      }
}
    if($_POST){
    $mailt=$_POST['nobr'];
      if($_POST)
      { 
        if ($_POST['on']=="Agree")
        {
          mysqli_query($connection,"update requesttable set state = 'accepted' where mailaddr='$mailt' ; ");
        }
        else
        {
          mysqli_query($connection,"update requesttable set state = 'declined' where mailaddr='$mailt'; ");
        }
      }
    }
    ?>
  </body>
</html>