<?php
include('dbconnect.php');
session_start();
if(!isset($_SESSION['username'])){
header("location:index.php");
}
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$query = mysqli_query($con,"select username from login where username = '$username' && password='$password'");
$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
if(!is_array($row)) {
header("location:index.php");
} 
?>