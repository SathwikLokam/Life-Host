<html>
    <head>
        <title>Run Your Camp</title>
      <style>
    *{
      font-family: "Algerian";
    }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
        label{
            font-size: 40px;
            color:BLACK;
        }
        form{
            width: 70%;
            border: 3px solid deepskyblue;
            padding:5%;
            border-radius: 25px;
            background-color: rgba(255, 255, 255, 0.5);
        }
        .vid-bg{
            position:fixed;
             right: 0;
             bottom: 0;
             min-height: 100%;
             min-width: 100%;
             z-index: -1;
        }
      input[type="submit"]
        {
            border: 3px solid lime;
          margin-top: 6%;
          padding: 2%;
          background-color: black;
          border-radius: 25px;
          color: white;
        }
        input[type="text"]
        {
            border: 3px solid deepskyblue;
         padding: 1%;
          width: 100%;
        border-radius: 25px;
        }
        select
        {
            border: 3px solid deepskyblue;
         padding: 1%;
          width: 100%;
        border-radius: 25px;
        }
         input[type="file"]
        {
            border: 3px solid deepskyblue;
          background-color: white;
          border-radius: 25px;
         padding: 3%;
          
        }
       </style>
        <script>
            function showw()
            {
                alert("Witness is a person so that we can contact him for checking");
            }
            function showv()
            {
                alert("Enter the detaills of person who you are running camp for");
            }

</script>

</html>

    </head>
    <body>
        <video src="PixelFiles/Videos/planedot.mp4"  class="vid-bg" autoplay loop muted></video>
        <form onsubmit="return valid()" action="RunCamp.php" method="POST" enctype="multipart/form-data">
            <label>Your Details </label><br/><br/>
          <center><input type="file" name="profile" id="profile" onclick="alert('Select your profile photo');" required><br/><br/></center>
            <input type="text" name="rmessage" id="rmessage" placeholder="Anything to say about you" required ><br/><br/>
            <select name="payment" id="payment" required>
              <option value="Google pay">Google pay</option>
              <option value="Phone pay">Phone pay</option>
              <option value="Paytm">Paytm</option>
              <option value="none" SELECTED>Select Payment Way</option>
          </select><br/><br/>
          <input type="text" name="PayNum" id="PayNum" placeholder="Enter Payment Number"  required>
            <br/><br/><label>Victim Details</label><br/><br/>
          <center><input type="file" name="victim" id="victim"  required></center><br/><br/>
            <input type="text" name="adhar" id="adhar" placeholder="Adhar"  required><br/><br/>
            <input type="text" name="vnumber" id="vnumber" onclick="showv()" placeholder="Phone Number" required ><br/><br/>
            <input type="text" name="vmessage" id="vmessage" row=3 placeholder="Anything to say about victim"  required>
            <br/><br/><label>Witness Details </label><br/><br/>
            <input type="text" name="wnumber" id="wnumber" onclick="showw()" placeholder="Phone Number"  required><br/><br/>
          <center><input type="submit" value="Submit My Request" name="submit"></center>
            
        </form>
    </body>
</html> 
<?php
if(isset($_POST['submit'])){
  $rmessage = $_POST['rmessage'];
   $payment= $_POST['payment'];
   $paynum= $_POST['PayNum'];
   $aadhar= $_POST['adhar'];
   $vnumber= $_POST['vnumber'];
   $vmessage= $_POST['vmessage'];
   $wnumber= $_POST['wnumber'];
  
  echo "$rmessage  $payment $paynum $aadhar $vnumber $vmessage $wnumber ";
  
  
print_r($_FILES['profile']) ;
$target="PixelFiles/profile/".basename($_FILES['profile']['name']);
$tmp_name=$_FILES['profile']['tmp_name'];
$db=mysqli_connect("localhost","root","","maindatabase");
  
$profile=$_FILES['profile']['name'];
move_uploaded_file($tmp_name,$target);
  
$target1="PixelFiles/victim/".basename($_FILES['victim']['name']);
  
$tmp_name1=$_FILES['victim']['tmp_name'];
$victim=$_FILES['victim']['name'];
move_uploaded_file($tmp_name1,$target1);
  session_start();
  $mal=$_SESSION['login_user'];
  
  
$mal = stripslashes($mal);
$mal = mysqli_real_escape_string($db,$mal);
$profile = stripslashes($profile);
$profile = mysqli_real_escape_string($db,$profile);
$rmessage = stripslashes($rmessage);
$rmessage = mysqli_real_escape_string($db,$rmessage);
$payment = stripslashes($payment);
$payment = mysqli_real_escape_string($db,$payment);
$victim = stripslashes($victim);
$victim = mysqli_real_escape_string($db,$victim);
$aadhar = stripslashes($aadhar);
$aadhar = mysqli_real_escape_string($db,$aadhar);
$vnumber = stripslashes($vnumber);
$vnumber = mysqli_real_escape_string($db,$vnumber);
$vmessage = stripslashes($vmessage);
$vmessage = mysqli_real_escape_string($db,$vmessage);
$wnumber = stripslashes($wnumber);
$wnumber = mysqli_real_escape_string($db,$wnumber);
$paynum = stripslashes($paynum);
$paynum = mysqli_real_escape_string($db ,$paynum);
  
$sql="insert into requesttable(mailaddr,profile,rmessage,payment,paynumber,victim,aadhar,vnumber,vmessage,wnumber) values ('$mal','$profile','$rmessage','$payment','$paynum','$victim','$aadhar','$vnumber','$vmessage','$wnumber')";
if(mysqli_query($db,$sql))
  header("Location: reqse.html");
else
header("Location: haveaccount.html");
}
?>









