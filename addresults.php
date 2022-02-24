<?php
if(isset($_GET['msg'])) {
    $msg = $_GET['msg'];    
    echo "<script type='text/javascript'>alert('".$msg."');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>RMS Add Results</title>
<?php include('bootstrap.php');?>
</head>
<body>
<?php include('menubar.php');?>
<br>
<div class="container text-center justify-content-center border border-dark rounded bg-light w-50">
<br>
<?php
if(isset($_GET['grade'])&&$_GET['grade'] != "none") {
$grade="grade".$_GET['grade'];
include ('dbconnect.php');
$sql = "select * from $grade where id=1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
?>	
	<form action="uploadresult.php" method="post">
		<h4><b><?php echo "Grade ".$_GET['grade']; ?> - Add Result</b></h4><br>
		<input type="text" name="grade" value="<?php echo $_GET['grade']; ?>" hidden>	
	<div class="container">
		<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">First Name</span>
				</div>
				<input type="text" name="firstname" class="form-control" placeholder="Enter First Name" required>
		</div>
		<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Last Name</span>
				</div>
				<input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" required>
		</div>
		<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Gender</span>
				</div>
				<select class="form-control" name="gender">
				<option value="none">Choose Gender</option>
                <option>Male</option>
                <option>Female</option>
                </select>
		</div>
		<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Section</span>
				</div>
				<input type="text" name="section" class="form-control" placeholder="Enter Class Section">
		</div>
		<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Roll No</span>
				</div>
				<input type="text" name="rollno" class="form-control" placeholder="Enter Roll No">
		</div>
		<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Exam Term</span>
				</div>
				<select class="form-control" name="term">
				<option value="none">Choose Exam Term</option>
                <option>1st</option>
                <option>2nd</option>
                <option>3rd</option>
                <option>Mid</option>
                <option>Final</option>
                </select>
		</div>
		<br><h4><b>Marks Obtained in Different Subjects</b></h4>
<?php
if ($row['sub1'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub1']."</span>
				</div>
				<input type='number' name='sub1pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
if ($row['sub2'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub2']."</span>
				</div>
				<input type='number' name='sub2pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
if ($row['sub3'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub3']."</span>
				</div>
				<input type='number' name='sub3pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
if ($row['sub4'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub4']."</span>
				</div>
				<input type='number' name='sub4pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
if ($row['sub5'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub5']."</span>
				</div>
				<input type='number' name='sub5pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
if ($row['sub6'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub6']."</span>
				</div>
				<input type='number' name='sub6pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
if ($row['sub7'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub7']."</span>
				</div>
				<input type='number' name='sub7pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
if ($row['sub8'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub8']."</span>
				</div>
				<input type='number' name='sub8pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
if ($row['sub9'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub9']."</span>
				</div>
				<input type='number' name='sub9pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
if ($row['sub10'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub10']."</span>
				</div>
				<input type='number' name='sub10pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
if ($row['sub11'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub11']."</span>
				</div>
				<input type='number' name='sub11pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
if ($row['sub12'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub12']."</span>
				</div>
				<input type='number' name='sub12pass' min='0' max='100' class='form-control' placeholder='Enter Marks Obtained'>
	    </div>";
}
?>
    <br><button type="submit" class="btn btn-dark" name="upload">Submit</button>
	</div>
	</form>		
	<?php }}else{echo "<h4><b>You have not selected grade</b></h4>";} ?>
	<br>
</div>
<br>
</body>
</html>