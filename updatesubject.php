<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
	date_default_timezone_set("Asia/Kathmandu");
    $date = date ('Y\/m\/d H:i:s A');
	$grade = $_POST['grade'];
	$sub1 = $_POST['sub1'];
	$sub1pass = $_POST['sub1pass'];
	$sub1full = $_POST['sub1full'];
	$sub2 = $_POST['sub2'];
	$sub2pass = $_POST['sub2pass'];
	$sub2full = $_POST['sub2full'];
	$sub3 = $_POST['sub3'];
	$sub3pass = $_POST['sub3pass'];
	$sub3full = $_POST['sub3full'];
	$sub4 = $_POST['sub4'];
	$sub4pass = $_POST['sub4pass'];
	$sub4full = $_POST['sub4full'];
	$sub5 = $_POST['sub5'];
	$sub5pass = $_POST['sub5pass'];
	$sub5full = $_POST['sub5full'];
	$sub6 = $_POST['sub6'];
	$sub6pass = $_POST['sub6pass'];
	$sub6full = $_POST['sub6full'];
	$sub7 = $_POST['sub7'];
	$sub7pass = $_POST['sub7pass'];
	$sub7full = $_POST['sub7full'];
	$sub8 = $_POST['sub8'];
	$sub8pass = $_POST['sub8pass'];
	$sub8full = $_POST['sub8full'];
	$sub9 = $_POST['sub9'];
	$sub9pass = $_POST['sub9pass'];
	$sub9full = $_POST['sub9full'];
	$sub10 = $_POST['sub10'];
	$sub10pass = $_POST['sub10pass'];
	$sub10full = $_POST['sub10full'];
	$sub11 = $_POST['sub11'];
	$sub11pass = $_POST['sub11pass'];
	$sub11full = $_POST['sub11full'];
	$sub12 = $_POST['sub12'];
	$sub12pass = $_POST['sub12pass'];
	$sub12full = $_POST['sub12full'];
include ('dbconnect.php');
$sql = "UPDATE $grade SET updatetime='$date', sub1='$sub1', sub1pass='$sub1pass', sub1full='$sub1full', sub2='$sub2', sub2pass='$sub2pass', sub2full='$sub2full', sub3='$sub3', sub3pass='$sub3pass', sub3full='$sub3full', sub4='$sub4', sub4pass='$sub4pass', sub4full='$sub4full', sub5='$sub5', sub5pass='$sub5pass', sub5full='$sub5full', sub6='$sub6', sub6pass='$sub6pass', sub6full='$sub6full', sub7='$sub7', sub7pass='$sub7pass', sub7full='$sub7full', sub8='$sub8', sub8pass='$sub8pass', sub8full='$sub8full', sub9='$sub9', sub9pass='$sub9pass', sub9full='$sub9full', sub10='$sub10', sub10pass='$sub10pass', sub10full='$sub10full', sub11='$sub11', sub11pass='$sub11pass', sub11full='$sub11full', sub12='$sub12', sub12pass='$sub12pass', sub12full='$sub12full' WHERE id=1";
if (mysqli_query($con, $sql)) {
    header("Location: ".$_SERVER['HTTP_REFERER']);
} else {
    echo "<meta http-equiv='refresh' content='0; url=".$_SERVER['HTTP_REFERER']."'><script>alert('Error while updating subject');</script>";
}}
?>