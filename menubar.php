<?php include('session.php'); ?>
<div class="bg-dark text-center text-light">
  <div><h1 class="font-weight-bold text-light">Result Management System</h1></div>
<nav class="navbar navbar-expand-md text-center">
  <a class="navbar-brand bg-light rounded text-dark" href="main.php"><b>&nbsp;RMS&nbsp;</b></a>
  <button class="navbar-toggler bg-light rounded" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="fas fa-bars"></span> <b><i>Menu</i></b>
  </button>
  <div class="collapse navbar-collapse justify-content-center w-100" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link btn btn-outline-light mr-3" href="main.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-light mr-3" href="gradetomanagesubject.php">Manage Subjects</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-light mr-3" href="gradetoaddresults.php">Add Results</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mr-3 btn btn-outline-light" href="gradetoviewresult.php">View Results</a>
    </li>
    <li class="nav-item">
      <a class="nav-link mr-3 btn btn-outline-light" href="setting.php">Setting</a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-outline-light" href="logout.php">Logout</a>
    </li>
  </ul>
</div>
</nav>
</div>
