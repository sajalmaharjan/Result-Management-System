<?php
if (isset($_GET['id'], $_GET['grade'])) {
	$id = $_GET['id'];
	$grade = $_GET['grade'];
	include('dbconnect.php');
	$sql = "DELETE FROM $grade WHERE id='$id'";
	if (mysqli_query($con,$sql)) {
            if (strpos($_SERVER['HTTP_REFERER'], 'edit.php') !== false) {
                header("Location: main.php");
            }
            else{
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }
    }
    else{
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}
?>
