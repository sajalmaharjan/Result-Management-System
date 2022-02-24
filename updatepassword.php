<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	session_start();
	$username = $_SESSION['username'];
    $password = $_SESSION['password'];
	include("dbconnect.php");
	$newpassword=mysqli_real_escape_string($con,$_POST['newpassword']);
    $confirmpassword=mysqli_real_escape_string($con,$_POST['confirmpassword']);
    if ($newpassword == $confirmpassword) {
     $sql="UPDATE login SET password='$newpassword' WHERE username = '$username' && password='$password'";
     if (mysqli_query($con, $sql)) {
     	header("location:logout.php");
        }
        else{
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
    }
    else{
            header("Location: ".$_SERVER['HTTP_REFERER']);
    }
    
}
else{
            header("Location: ".$_SERVER['HTTP_REFERER']);
    }
?>