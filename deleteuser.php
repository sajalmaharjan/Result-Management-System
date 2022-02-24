<?php
session_start();
if ($_SESSION['type']=="admin"){
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	include('dbconnect.php');
	$sql = "DELETE FROM login WHERE id='$id'";
	if (mysqli_query($con,$sql)) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
    else{
        echo "<meta http-equiv='refresh' content='0; url=".$_SERVER['HTTP_REFERER']."'><script>alert('Error while deleting user');</script>";
    }
}}
else{
    echo "<meta http-equiv='refresh' content='0; url=".$_SERVER['HTTP_REFERER']."'><script>alert('Admin Permission Required');</script>";
}
?>