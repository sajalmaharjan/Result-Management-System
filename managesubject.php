<!DOCTYPE html>
<html>
<head>
	<title>RMS Manage Subject</title>
<?php include('bootstrap.php');?>
</head>
<body>
<?php include('menubar.php');?>
<br>
<div class="container text-center justify-content-center border border-dark rounded bg-light">
<br>
<?php
if(isset($_GET['grade'])&&$_GET['grade'] != "none") {
$grade="grade".$_GET['grade'];
include ('dbconnect.php');
$sql = "select * from $grade where id=1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
?>
<form action="updatesubject.php" method="post">
	<h4><b><?php echo "Grade ".$_GET['grade']; ?> - Provide Subject Detail With Pass & Full Marks</b></h4><br>
	<input type="text" name="grade" value="<?php echo $grade; ?>" hidden>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 1</span>
				</div>
				<input type="text" name="sub1" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub1']; ?>">
				<input type="number" name="sub1pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub1pass']; ?>">
				<input type="number" name="sub1full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub1full']; ?>">
	</div>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 2</span>
				</div>
				<input type="text" name="sub2" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub2']; ?>">
				<input type="number" name="sub2pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub2pass']; ?>">
				<input type="number" name="sub2full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub2full']; ?>">
	</div>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 3</span>
				</div>
				<input type="text" name="sub3" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub3']; ?>">
				<input type="number" name="sub3pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub3pass']; ?>">
				<input type="number" name="sub3full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub3full']; ?>">
	</div>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 4</span>
				</div>
				<input type="text" name="sub4" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub4']; ?>">
				<input type="number" name="sub4pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub4pass']; ?>">
				<input type="number" name="sub4full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub4full']; ?>">
	</div>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 5</span>
				</div>
				<input type="text" name="sub5" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub5']; ?>">
				<input type="number" name="sub5pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub5pass']; ?>">
				<input type="number" name="sub5full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub5full']; ?>">
	</div>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 6</span>
				</div>
				<input type="text" name="sub6" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub6']; ?>">
				<input type="number" name="sub6pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub6pass']; ?>">
				<input type="number" name="sub6full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub6full']; ?>">
	</div>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 7</span>
				</div>
				<input type="text" name="sub7" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub7']; ?>">
				<input type="number" name="sub7pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub7pass']; ?>">
				<input type="number" name="sub7full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub7full']; ?>">
	</div>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 8</span>
				</div>
				<input type="text" name="sub8" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub8']; ?>">
				<input type="number" name="sub8pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub8pass']; ?>">
				<input type="number" name="sub8full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub8full']; ?>">
	</div>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 9</span>
				</div>
				<input type="text" name="sub9" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub9']; ?>">
				<input type="number" name="sub9pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub9pass']; ?>">
				<input type="number" name="sub9full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub9full']; ?>">
	</div>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 10</span>
				</div>
				<input type="text" name="sub10" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub10']; ?>">
				<input type="number" name="sub10pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub10pass']; ?>">
				<input type="number" name="sub10full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub10full']; ?>">
	</div>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 11</span>
				</div>
				<input type="text" name="sub11" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub11']; ?>">
				<input type="number" name="sub11pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub11pass']; ?>">
				<input type="number" name="sub11full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub11full']; ?>">
	</div>
	<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Subject 12</span>
				</div>
				<input type="text" name="sub12" class="form-control" placeholder="Subject Name" value="<?php echo $row['sub12']; ?>">
				<input type="number" name="sub12pass" min="0" max="100" class="form-control" placeholder="Pass Marks" value="<?php echo $row['sub12pass']; ?>">
				<input type="number" name="sub12full" min="0" max="100" class="form-control" placeholder="Full Marks" value="<?php echo $row['sub12full']; ?>">
	</div>
	<br>
	<button type="submit" class="btn btn-dark" name="upload">Submit</button>
</form>
<?php }}else{echo "<h4><b>You have not selected grade</b></h4>";} ?>
<br>
</div>
<br>
</body>
</html>