<?php
session_start();
if(isset($_SESSION['username'])){
include('dbconnect.php');
$username=$_SESSION['username'];
mysqli_query($con,"UPDATE login SET status='offline' WHERE username='$username'");
session_destroy();
session_unset();
header("location:index.php");
}else{
	header("location:index.php");
}
?>