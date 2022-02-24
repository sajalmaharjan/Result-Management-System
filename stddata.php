<!DOCTYPE html>
<html>
<head>
	<title>RMS View Results</title>
<?php include('bootstrap.php');?>
</head>
<body>
<br>
<div class="container-fluid text-center"><a href="index.php" class="text-dark"><h2><b>Result Management System</b></h2></a></div>
<div class="container">
<br>
<h4><b>Showing All Result</b></h4>
<br>
<div class="row">
<?php
if(isset($_GET['grade'], $_GET['keyword'])) {
$grade="grade".$_GET['grade'];
$stype=$_GET['stype'];
$keyword=$_GET['keyword'];
include('dbconnect.php');
$sql = "select * from $grade where $stype LIKE '%$keyword%' ORDER BY firstname";
  $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
    	if ($row['firstname'] != "") {
    	echo "<div class='col-4'>
              <a href='stdresult.php?id=".$row['id']."&grade=".$grade."' class='card-link text-dark'>
              <div class='card bg-light'>
              <div class='card-body'>
              <h4><b>".$row['firstname']." ".$row['lastname']."</b></h4>
              <p>Grade : ".$row['grade']." (".$row['section'].")<br>Roll No : ".$row['rollno']."<br>Year : ".$row['year']."<br>Exam Term : ".$row['term']." Term</p>
              </div>
              </div>
              </a> 
              </div>";
    }
    }
}
?>
</div>
</div>
</body>
</html>