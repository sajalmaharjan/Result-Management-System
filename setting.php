<!DOCTYPE html>
<html>
<head>
	<title>RMS Setting</title>
<?php include('bootstrap.php');?>
<script language="JavaScript" type="text/javascript">
function check(){
    var newpswd = document.getElementById("new").value;
    var repswd = document.getElementById("re").value;
    if (newpswd != repswd) {
            alert("Passwords Didn't Matched");
            return false;
        }
        else{
        return true;
    }
}
</script>
</head>
<body>
<?php include('menubar.php');?>
<br>
<div class="container text-center">
<div class="container text-center" style="width: 500px;">
	<div class="container">
		<h5 class="font-weight-bold ml-5">Change Password</h5><br>
<form action="updatepassword.php" method="post">
	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">New Password</span>
				</div>
				<input type="password" name="newpassword" class="form-control" placeholder="Enter New password" id="new" required>
	</div>
	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text">Confirm Password</span>
				</div>
				<input type="password" name="confirmpassword" class="form-control" placeholder="Re-Enter Password" id="re" required>
	</div>
	<br><input type="submit" class="btn btn-danger" value="Change Password" onclick="return check()"><br><br>
</form><br>
<?php
if ($_SESSION['type']=="admin"){
echo "<a href='usersetting.php' class='btn btn-dark'>Add or View User</a>";
}
?>
	</div>	
</div>
</div>
</body>
</html>