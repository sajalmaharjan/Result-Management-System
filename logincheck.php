<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['hour'])){
    header('location:main.php');
}
include("dbconnect.php");
date_default_timezone_set("Asia/Kathmandu");
$date = date ('Y\/m\/d H:i:s A');
$hour = date ('H');
if($_SERVER["REQUEST_METHOD"] == "POST") {
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']); 
$query="Select * From login";
$result=mysqli_query($con,$query);
$count=0;
while($row=mysqli_fetch_array($result))
{
if($row["username"]==$username && $row["password"]==$password)
{$count=$count+1;
$_SESSION['type']=$row["type"];
}
}
if($count>=1)
{
$_SESSION['username']=$username;
$_SESSION['password']=$password;
$_SESSION['hour']=$hour;
mysqli_query($con,"UPDATE login SET updatetime='$date', status='online' WHERE username='$username'");
header("location:main.php");
}
else {
  echo "<meta http-equiv='refresh' content='0; url=index.php'><script>alert('Invalid Username or Password');</script>";
}
}
?>