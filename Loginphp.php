<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (empty($_POST['namel']) || empty($_POST['passl'])) {
}
else
{
// Define $username and $password
$mail=$_POST['namel'];
$password=$_POST['passl'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost:3306", "root", "","maindatabase");
// To protect MySQL injection for Security purpose
$username = stripslashes($mail);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$mail);
$password = mysqli_real_escape_string($connection,$password);
// Selecting Database
//$db = mysqli_select_db($connection,"cme");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from maintable where pass='$password' AND mail='$mail'");
$conne = mysqli_connect("localhost:3306", "root", "","maindatabase");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$mail; // Initializing Session
header("location: list.php"); // Redirecting To Other Page
}
elseif($mail=="adminmail@mail.com" and $password=="mastercard")
{
$_SESSION['login_user']=$mail; // Initializing Session
header("location: Master.php");
}
  
  else {
echo "<center><h1>Username or Password is invalid</h1></center>";
  header("location: Loginerror.html");
  echo $rows;
}
mysqli_close($connection); // Closing Connection
}
?>