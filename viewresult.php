<!DOCTYPE html>
<html>
<head>
	<title>RMS View Results</title>
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
	<div class="row">
		<div class="col">
			<h3><b>Showing Results</b></h3>
		</div>	
		<div class="col">
			<input class="form-control" id="myInput" type="text" placeholder="Search....">
		</div>	
	</div>
</div>
<br>
<div class="container">  
  <h5><table class="table table-hover table-responsive-md table-striped">
    <thead class="bg-dark text-light">
      <tr>
      	<th>Year</th>
      	<th>Grade</th>
        <th>Section</th>
      	<th>Roll No</th>
        <th>Name</th>
        <th>Term</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="table-sm" id="myTable">
      <?php
if(isset($_GET['grade'])) {
$grade="grade".$_GET['grade'];
include('dbconnect.php');
  $sql = "select * from ".$grade;
  $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
    	if ($row['firstname'] != "") {
    	echo "<tr>";
    	echo "<td><i>".$row['year']."</i></td>";
    	echo "<td><i>".$row['grade']."</i></td>";
      echo "<td><i>".$row['section']."</i></td>";
    	echo "<td><i>".$row['rollno']."</i></td>";
        echo "<td><i>".$row['firstname']." ".$row['lastname']."</i></td>";
        echo "<td><i>".$row['term']."</i></td>";
        echo "<td><i><a href='view.php?id=".$row['id']."&grade=".$grade."'><i class='fas fa-eye text-info'></i></a> | <a href='edit.php?id=".$row['id']."&grade=".$grade."'><i class='fas fa-edit text-success'></i></a> | <a onclick='return checkDelete()' href='delete.php?id=".$row['id']."&grade=".$grade."'><i class='fas fa-trash-alt text-danger'></i></a></i></td>";
        echo "</tr>";
    }
    }
}
?>
    </tbody>
  </table></h5>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>