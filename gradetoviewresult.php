<!DOCTYPE html>
<html>
<head>
	<title>RMS View Results</title>
<?php include('bootstrap.php');?>
</head>
<body>
<?php include('menubar.php');?>
<br><br>
<div class="container bg-light rounded justify-content-center text-center border border-dark rounded shadow-lg"  style="width: 350px">
<form action="viewresult.php" method="get">
    <?php include('gradeselection.php'); ?>
  </form>
</div>
</body>
</html>