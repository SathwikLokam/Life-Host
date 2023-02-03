<style>
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
    }
</style>

<?php
  $name = $_POST['name'];
  $age= $_POST['age'];
  $mail= $_POST['mail'];
  $num= $_POST['num'];
  $gender= $_POST['gender'];
  $adhar= $_POST['adhar'];
  $pass= $_POST['pass'];

  if (empty($adhar))
  {
    $adhar="Empty";
  }
$servername="localhost:3306";
$username="root";
$password="";
$database="maindatabase";
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
$sql="insert into maintable values('$name','$age','$mail','$num','$gender','$adhar','$pass');";
if(mysqli_query($conn,$sql))
{
$name = stripslashes($name);
$name = mysqli_real_escape_string($connection,$name);
$age = stripslashes($age);
$age = mysqli_real_escape_string($connection,$age);
$mail = stripslashes($mail);
$mail = mysqli_real_escape_string($connection,$mail);  
$num = stripslashes($num);
$num = mysqli_real_escape_string($connection,$num);
$age = stripslashes($age);
$age = mysqli_real_escape_string($connection,$age);
$adhar = stripslashes($adhar);
$adhar = mysqli_real_escape_string($connection,$adhar);
$pass = stripslashes($pass);
$pass = mysqli_real_escape_string($connection,$pass);

 echo '<center style="font-size:20px;border:3px solid deepskyblue;">Registration is succesfull , Loading Login Page<center>';
 header("Location: Login.html");
}
  else
  {
echo "<h2><center>Multiple Atributes Are Found In Same Mail ,Please Enter New Mail</center></h2>";
  }
mysqli_close($conn);
}
?>












