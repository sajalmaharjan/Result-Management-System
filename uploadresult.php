<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
include ('dbconnect.php');
date_default_timezone_set("Asia/Kathmandu");
$date = date ('Y\/m\/d H:i:s A');
$year = date ('Y');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$grade = "grade".$_POST['grade'];
$grades = $_POST['grade'];
$section = $_POST['section'];
$rollno = $_POST['rollno'];
$term = $_POST['term'];
if(isset($_POST['sub1pass'])){
$sub1pass = $_POST['sub1pass'];	
}
else{
$sub1pass = "";	
}
if(isset($_POST['sub1pass'])){
$sub1pass = $_POST['sub1pass'];	
}
else{
$sub1pass = "";	
}
if(isset($_POST['sub2pass'])){
$sub2pass = $_POST['sub2pass'];	
}
else{
$sub2pass = "";	
}
if(isset($_POST['sub3pass'])){
$sub3pass = $_POST['sub3pass'];	
}
else{
$sub3pass = "";	
}
if(isset($_POST['sub4pass'])){
$sub4pass = $_POST['sub4pass'];	
}
else{
$sub4pass = "";	
}
if(isset($_POST['sub5pass'])){
$sub5pass = $_POST['sub5pass'];	
}
else{
$sub5pass = "";	
}
if(isset($_POST['sub6pass'])){
$sub6pass = $_POST['sub6pass'];	
}
else{
$sub6pass = "";	
}
if(isset($_POST['sub7pass'])){
$sub7pass = $_POST['sub7pass'];	
}
else{
$sub7pass = "";	
}
if(isset($_POST['sub8pass'])){
$sub8pass = $_POST['sub8pass'];	
}
else{
$sub8pass = "";	
}
if(isset($_POST['sub9pass'])){
$sub9pass = $_POST['sub9pass'];	
}
else{
$sub9pass = "";	
}
if(isset($_POST['sub10pass'])){
$sub10pass = $_POST['sub10pass'];	
}
else{
$sub10pass = "";	
}
if(isset($_POST['sub11pass'])){
$sub11pass = $_POST['sub11pass'];	
}
else{
$sub11pass = "";	
}
if(isset($_POST['sub12pass'])){
$sub12pass = $_POST['sub12pass'];	
}
else{
$sub12pass = "";	
}
$sql = "INSERT INTO $grade (year, createtime, grade, firstname, lastname, gender, section, rollno, term, sub1pass, sub2pass, sub3pass, sub4pass, sub5pass, sub6pass, sub7pass, sub8pass, sub9pass, sub10pass, sub11pass, sub12pass)
             VALUES ('$year', '$date', '$grades', '$firstname', '$lastname', '$gender', '$section', '$rollno', '$term', '$sub1pass', '$sub2pass', '$sub3pass', '$sub4pass', '$sub5pass', '$sub6pass', '$sub7pass', '$sub8pass', '$sub9pass', '$sub10pass', '$sub11pass', '$sub12pass')";
if (mysqli_query($con, $sql)) {
    header("Location: addresults.php?grade=".$_POST['grade']."&msg=".$firstname." result added successfully");
} else {
    header("Location: addresults.php?grade=".$_POST['grade']."&msg=Error while updating data");
}
}
?>