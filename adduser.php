<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
include('dbconnect.php');
date_default_timezone_set("Asia/Kathmandu");
$date = date ('Y\/m\/d H:i:s A');
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']); 
$sql = "INSERT INTO login (username, password, type, updatetime)
VALUES ('$username', '$password', 'user', '$date')";
if (mysqli_query($con,$sql)) {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
    else{
        echo "<meta http-equiv='refresh' content='0; url=".$_SERVER['HTTP_REFERER']."'><script>alert('Error while adding user');</script>";
    }
}
?>