<?php
if(isset($_GET['msg'])) {
    $msg = $_GET['msg'];    
    echo "<script type='text/javascript'>alert('".$msg."');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>RMS Edit Results</title>
<?php include('bootstrap.php');?>
<script>
function checkDelete(){
    return confirm('Are you sure you want to delete ?');
}
</script>
</head>
<body>
<?php include('menubar.php');?>
<br>
<div class="container text-center justify-content-center border border-dark rounded bg-light w-50">
<br>
<?php
if(isset($_GET['grade'], $_GET['id'])) {
$grade=$_GET['grade'];
$id=$_GET['id'];
include ('dbconnect.php');
$sql = "select * from $grade where id=1";
$data = "select * from $grade where id='$id'";
$result1=mysqli_query($con,$data);
$std="";
while($stddata=mysqli_fetch_array($result1)){
$std=$stddata;
}
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
?>	
	<form action="updateresult.php" method="post">
		<h4><b>Editing <?php echo $std['firstname']; ?> Result</b></h4><br>
		<input type="text" name="grade" value="<?php echo $_GET['grade']; ?>" hidden>
		<input type="text" name="id" value="<?php echo $_GET['id']; ?>" hidden>	
	<div class="container">
		<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">First Name</span>
				</div>
				<input type="text" name="firstname" class="form-control font-weight-bold font-weight-bold" placeholder="Enter First Name" required value="<?php echo $std['firstname']; ?>">
		</div>
		<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Last Name</span>
				</div>
				<input type="text" name="lastname" class="form-control font-weight-bold" placeholder="Enter Last Name" required value="<?php echo $std['lastname']; ?>">
		</div>
		<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Gender</span>
				</div>
				<select class="form-control font-weight-bold" name="gender">
				<option value="none">Choose Gender</option>
                <option <?php  if ($std['gender']=="Male") {echo "selected";}?>>Male</option>
                <option <?php  if ($std['gender']=="Female") {echo "selected";}?>>Female</option>
                </select>
		</div>
		<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Section</span>
				</div>
				<input type="text" name="section" class="form-control font-weight-bold" placeholder="Enter Class Section" value="<?php echo $std['section']; ?>">
		</div>
		<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Roll No</span>
				</div>
				<input type="text" name="rollno" class="form-control font-weight-bold" placeholder="Enter Roll No" value="<?php echo $std['rollno']; ?>">
		</div>
		<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-dark text-light">Exam Term</span>
				</div>
				<select class="form-control font-weight-bold" name="term">
				<option value="none">Choose Exam Term</option>
                <option <?php  if ($std['term']=="1st") {echo "selected";}?>>1st</option>
                <option <?php  if ($std['term']=="2nd") {echo "selected";}?>>2nd</option>
                <option <?php  if ($std['term']=="3rd") {echo "selected";}?>>3rd</option>
                <option <?php  if ($std['term']=="Mid") {echo "selected";}?>>Mid</option>
                <option <?php  if ($std['term']=="Final") {echo "selected";}?>>Final</option>
                </select>
		</div>
		<br><h4><b>Marks Obtained in Different Subjects</b></h4>
<?php
if ($row['sub1'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub1']."</span>
				</div>
				<input type='number' name='sub1pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub1pass']."'>
	    </div>";
}
if ($row['sub2'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub2']."</span>
				</div>
				<input type='number' name='sub2pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub2pass']."'>
	    </div>";
}
if ($row['sub3'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub3']."</span>
				</div>
				<input type='number' name='sub3pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub3pass']."'>
	    </div>";
}
if ($row['sub4'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub4']."</span>
				</div>
				<input type='number' name='sub4pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub4pass']."'>
	    </div>";
}
if ($row['sub5'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub5']."</span>
				</div>
				<input type='number' name='sub5pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub5pass']."'>
	    </div>";
}
if ($row['sub6'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub6']."</span>
				</div>
				<input type='number' name='sub6pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub6pass']."'>
	    </div>";
}
if ($row['sub7'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub7']."</span>
				</div>
				<input type='number' name='sub7pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub7pass']."'>
	    </div>";
}
if ($row['sub8'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub8']."</span>
				</div>
				<input type='number' name='sub8pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub8pass']."'>
	    </div>";
}
if ($row['sub9'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub9']."</span>
				</div>
				<input type='number' name='sub9pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub9pass']."'>
	    </div>";
}
if ($row['sub10'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub10']."</span>
				</div>
				<input type='number' name='sub10pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub10pass']."'>
	    </div>";
}
if ($row['sub11'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub11']."</span>
				</div>
				<input type='number' name='sub11pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub11pass']."'>
	    </div>";
}
if ($row['sub12'] != "") {
	echo "<div class='input-group mb-1'>
				<div class='input-group-prepend'>
					<span class='input-group-text bg-dark text-light'>".$row['sub12']."</span>
				</div>
				<input type='number' name='sub12pass' min='0' max='100' class='form-control font-weight-bold' placeholder='Enter Marks Obtained' value='".$std['sub12pass']."'>
	    </div>";
}
?>
    <br><button type="submit" class="mr-3 btn btn-dark" name="upload">Update</button> or <a onclick="return checkDelete()" href="delete.php?id=<?php echo $row['id']."&grade=".$grade; ?>"><button class="ml-3 btn btn-danger" name="upload">Delete Data</button></a>
	</div>
	</form>		
	<?php }}else{echo "<h4><b>You have not selected grade</b></h4>";} ?>
	<br>
</div>
<br>
</body>
</html>