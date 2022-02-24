<!DOCTYPE html>
<html>
<head>
	<title>RMS Exam Result</title>
<?php include('bootstrap.php');?>
</head>
<body>
  <br>
<div class="container-fluid text-center"><a href="index.php" class="text-dark"><h2><b>Result Management System</b></h2></a></div>
<br>
<div class="container border bg-light" id="printable">
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
$sn=0;
$totalfull=0;
$totalpass=0;
$totalfail=0;
$totalmarks=0;
while($row=mysqli_fetch_array($result)){
?>
  <br>
  <div class="container">
  <h5><b>Student Name :</b> <?php echo $std['firstname']." ".$std['lastname']; ?></h5>
  <h5><b>Grade :</b> <?php echo $std['grade']; if ($std['section'] != "") {echo " (".$std['section'].")";} ?></h5>
  <h5><b>Roll No :</b> <?php if ($std['rollno'] != 0) {echo $std['rollno'];} ?></h5>
  <h5><b>Exam Term :</b> <?php if ($std['term'] != "none") {echo $std['term']." Term";} ?></h5><br>
  <table class="table table-hover table-responsive-md table-bordered table-sm">
    <thead>
      <tr>
        <th>S.N.</th>
        <th class="w-50">Subjects</th>
        <th>Full<br>Marks</th>
        <th>Pass<br>Marks</th>
        <th>Obtained<br>Marks</th>
        <th>Remarks</th>
      </tr>
    </thead>
<tbody>
<?php
if ($row['sub1'] != "") {
    if ($std['sub1pass'] < $row['sub1pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub1full'];
    $totalpass=$totalpass+$row['sub1pass'];
    $totalmarks=$totalmarks+$std['sub1pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub1']."</td>
          <td>".$row['sub1full']."</td>
          <td>".$row['sub1pass']."</td>
          <td>".$std['sub1pass']."</td>
          <td>".$rk."</td>
          </tr>";}
if ($row['sub2'] != "") {
    if ($std['sub2pass'] < $row['sub2pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub2full'];
    $totalpass=$totalpass+$row['sub2pass'];
    $totalmarks=$totalmarks+$std['sub2pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub2']."</td>
          <td>".$row['sub2full']."</td>
          <td>".$row['sub2pass']."</td>
          <td>".$std['sub2pass']."</td>
          <td>".$rk."</td>
          </tr>";}
if ($row['sub3'] != "") {
    if ($std['sub3pass'] < $row['sub3pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub3full'];
    $totalpass=$totalpass+$row['sub3pass'];
    $totalmarks=$totalmarks+$std['sub3pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub3']."</td>
          <td>".$row['sub3full']."</td>
          <td>".$row['sub3pass']."</td>
          <td>".$std['sub3pass']."</td>
          <td>".$rk."</td>
          </tr>";}                   
if ($row['sub4'] != "") {
    if ($std['sub4pass'] < $row['sub4pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub4full'];
    $totalpass=$totalpass+$row['sub4pass'];
    $totalmarks=$totalmarks+$std['sub4pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub4']."</td>
          <td>".$row['sub4full']."</td>
          <td>".$row['sub4pass']."</td>
          <td>".$std['sub4pass']."</td>
          <td>".$rk."</td>
          </tr>";}
if ($row['sub5'] != "") {
    if ($std['sub5pass'] < $row['sub5pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub5full'];
    $totalpass=$totalpass+$row['sub5pass'];
    $totalmarks=$totalmarks+$std['sub5pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub5']."</td>
          <td>".$row['sub5full']."</td>
          <td>".$row['sub5pass']."</td>
          <td>".$std['sub5pass']."</td>
          <td>".$rk."</td>
          </tr>";}
if ($row['sub6'] != "") {
    if ($std['sub6pass'] < $row['sub6pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub6full'];
    $totalpass=$totalpass+$row['sub6pass'];
    $totalmarks=$totalmarks+$std['sub6pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub6']."</td>
          <td>".$row['sub6full']."</td>
          <td>".$row['sub6pass']."</td>
          <td>".$std['sub6pass']."</td>
          <td>".$rk."</td>
          </tr>";}
if ($row['sub7'] != "") {
    if ($std['sub7pass'] < $row['sub7pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub7full'];
    $totalpass=$totalpass+$row['sub7pass'];
    $totalmarks=$totalmarks+$std['sub7pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub7']."</td>
          <td>".$row['sub7full']."</td>
          <td>".$row['sub7pass']."</td>
          <td>".$std['sub7pass']."</td>
          <td>".$rk."</td>
          </tr>";}
if ($row['sub8'] != "") {
    if ($std['sub8pass'] < $row['sub8pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub8full'];
    $totalpass=$totalpass+$row['sub8pass'];
    $totalmarks=$totalmarks+$std['sub8pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub8']."</td>
          <td>".$row['sub8full']."</td>
          <td>".$row['sub8pass']."</td>
          <td>".$std['sub8pass']."</td>
          <td>".$rk."</td>
          </tr>";}
if ($row['sub9'] != "") {
    if ($std['sub9pass'] < $row['sub9pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub9full'];
    $totalpass=$totalpass+$row['sub9pass'];
    $totalmarks=$totalmarks+$std['sub9pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub9']."</td>
          <td>".$row['sub9full']."</td>
          <td>".$row['sub9pass']."</td>
          <td>".$std['sub9pass']."</td>
          <td>".$rk."</td>
          </tr>";}
if ($row['sub10'] != "") {
    if ($std['sub10pass'] < $row['sub10pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub10full'];
    $totalpass=$totalpass+$row['sub10pass'];
    $totalmarks=$totalmarks+$std['sub10pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub10']."</td>
          <td>".$row['sub10full']."</td>
          <td>".$row['sub10pass']."</td>
          <td>".$std['sub10pass']."</td>
          <td>".$rk."</td>
          </tr>";}
if ($row['sub11'] != "") {
    if ($std['sub11pass'] < $row['sub11pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub11full'];
    $totalpass=$totalpass+$row['sub11pass'];
    $totalmarks=$totalmarks+$std['sub11pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub11']."</td>
          <td>".$row['sub11full']."</td>
          <td>".$row['sub11pass']."</td>
          <td>".$std['sub11pass']."</td>
          <td>".$rk."</td>
          </tr>";}
if ($row['sub12'] != "") {
    if ($std['sub12pass'] < $row['sub12pass']) {
  $rk = "* (Fail)";
  ++$totalfail;
    }
    else{
  $rk = "";
    }
    $totalfull=$totalfull+$row['sub12full'];
    $totalpass=$totalpass+$row['sub12pass'];
    $totalmarks=$totalmarks+$std['sub12pass'];
    echo "<tr>
          <td>".++$sn."</td>
          <td>".$row['sub12']."</td>
          <td>".$row['sub12full']."</td>
          <td>".$row['sub12pass']."</td>
          <td>".$std['sub12pass']."</td>
          <td>".$rk."</td>
          </tr>";}  
          ?>
<?php
$per= round(($totalmarks/$totalfull)*100, 2);
if ($per >= 90) {
  $grd="A+";
  $grddes="Outstanding";
  $div="Distinction";
  $grdpnt="4.0";
    } 
    elseif ($per < 90 && $per >= 80) {
    $grd="A";
  $grddes="Excellent";
  $div="Distinction";
  $grdpnt="3.6";
    } 
    elseif ($per < 80 && $per >= 70) {
    $grd="B+";
  $grddes="Very Good";
  $div="First Division";
  $grdpnt="3.2";
    } 
    elseif ($per < 70 && $per >= 60) {
    $grd="B";
  $grddes="Good";
  $div="First Division";
  $grdpnt="2.8";
    }
    elseif ($per < 60 && $per >= 50) {
    $grd="C+";
  $grddes="Above Average";
  $div="Second Division";
  $grdpnt="2.4";
    }  
    elseif ($per < 50 && $per >= 40) {
    $grd="C";
  $grddes="Average";
  $div="Third Division";
  $grdpnt="2.0";
    }
    elseif ($per < 40 && $per >= 30) {
    $grd="D";
  $grddes="Below Average";
  $div="Third Division";
  $grdpnt="1.6";
    }
    elseif ($per < 30 && $per >= 20) {
    $grd="D";
  $grddes="Below Average";
  $div="Fail";
  $grdpnt="1.6";
    }
  elseif ($per < 20 && $per >= 1) {
    $grd="E";
  $grddes="Insufficient";
  $div="Fail";
  $grdpnt="0.8";
    }  
    else{
    $grd="N";
  $grddes="Not Graded";
  $div="Fail";
  $grdpnt="0";
    }          
?>
<tr>
  <td colspan="2"><b>Total Marks</b></td>
  <td><b><?php echo $totalfull;?></b></td>
  <td><b><?php echo $totalpass;?></b></td>
  <td><b><?php echo $totalmarks;?></b></td>
  <td><b><?php if ($totalmarks != 0) {echo "Failed in ".$totalfail." Subject";} ?></b></td>
</tr>
<tr>
  <td colspan="2"><b>Percentage(%) Obtained</b></td>
  <td colspan="4"><b><?php echo $per;?> %</b></td>
</tr>
<tr>
  <td colspan="2"><b>Division</b></td>
  <td colspan="4"><b><?php echo $div;?></b></td>
</tr>
<tr>
  <td colspan="2"><b>Grade</b></td>
  <td colspan="4"><b><?php echo $grd;?></b></td>
</tr>
<tr>
  <td colspan="2"><b>Grade Point</b></td>
  <td colspan="4"><b><?php echo $grdpnt;?></b></td>
</tr>
<tr>
  <td colspan="2"><b>Grade Description</b></td>
  <td colspan="4"><b><?php echo $grddes;?></b></td>
</tr>
<?php }}?>
</tbody>
    </table>
  </div>
  <br>
</div>
<center><button class="btn btn-dark" onclick="printDiv('printable')">Download Result</button></center>
<br><br>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>
</html>