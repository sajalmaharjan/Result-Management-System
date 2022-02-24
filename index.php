<!DOCTYPE html>
<html>
<head>
	<title>RMS</title>
<?php include('bootstrap.php');?>
</head>
<body class="text-center bg-dark">
<div class="my-5">
<div class="text-center text-light shadow-sm"><h1><b>Result Management System</b></h1></div><br><br>
<div class="container" style="width: 200px;">
<div class="border border-light rounded shadow shadow-lg">
<br>
<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['hour'])){
    echo "<a href='main.php' class='btn btn-outline-light shadow w-75'><b>Home</b></a>";
}else{
  echo "<button type='button' class='btn btn-outline-light shadow w-75' data-toggle='modal' data-target='#login'><b>Login</b></button>";
}
?>
<br><br>
<button type="button" class="btn btn-outline-light shadow w-75" data-toggle="modal" data-target="#search"><b>Search Result</b></button><br><br>
</div></div></div>
  <div class="modal fade" id="login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <div class="modal-header">
          <h4 class="modal-title"><b>Login</b></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="logincheck.php" method="post">
          	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text bg-secondary text-light"><b>UserName</b></span>
				</div>
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required>
		    </div>
		    <div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text bg-secondary text-light"><b>Password</b></span>
				</div>
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
		    </div>
        </div>
        
        <div class="modal-footer">
          <button type="Submit" class="btn btn-dark">Login</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  <div class="modal fade" id="search">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <div class="modal-header">
          <h4 class="modal-title"><b>Search Student Result</b></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="stddata.php" method="get">
          	<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text bg-secondary text-light"><b>Grade</b></span>
				</div>
				<select class="form-control" name="grade">
				<option value="none">Choose Grade</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                </select>
		    </div>
		    <div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text bg-secondary text-light"><b>Search Type</b></span>
				</div>
				<select class="form-control" name="stype">
				<option value="firstname">First Name</option>
				<option value="lastname">Last Name</option>
				<option value="rollno">Roll No</option>               
        </select>
		    </div>
		    <div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text bg-secondary text-light"><b>Keyword</b></span>
				</div>
				<input type="text" name="keyword" class="form-control" placeholder="Enter keyword..." required>
		    </div>
        </div>
        
        <div class="modal-footer">
          <button type="Submit" class="btn btn-dark">Search Result</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>
</body>
</html>