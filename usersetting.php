<!DOCTYPE html>
<html>
<head>
	<title>RMS User</title>
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
<div class="container">
  <h3 class="text-center"><b>All User Detail</b></h3>
	<table class="table table-hover table-responsive-md table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Create Time</th>
        <th>Update Time</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	include('dbconnect.php');
    	$sql = "select * from login where type='user'";
    	$result=mysqli_query($con,$sql);
    	while($row=mysqli_fetch_array($result)){
    	if ($row['username'] != "") {
      echo "<tr>
        <td>".$row['username']."</td>
        <td>".$row['password']."</td>
        <td>".$row['createtime']."</td>
        <td>".$row['updatetime']."</td>
        <td>".$row['status']."</td>
        <td><a onclick='return checkDelete()' href='deleteuser.php?id=".$row['id']."'><i class='fas fa-trash-alt text-danger'></i></a></td>
      </tr> ";    	
    }
    }
    ?>
           
    </tbody>
    <form action="adduser.php" method="post">
    <tfoot>
      <tr>
      	<td colspan="2">Add New User</td>
        <td colspan="2"><input type="text" class="form-control" name="username" placeholder="Enter Username" required></td>
        <td colspan="2"><input type="text" class="form-control" name="password" placeholder="Enter Password" required></td>
      </tr>
      <tr align="center">
        <td colspan="6"><button type="submit" class="btn btn-dark">Add User</button></td>
      </tr>   
    </tfoot>
    </form>
  </table>
</div>
</body>
</html>