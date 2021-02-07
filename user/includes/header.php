<?php
include_once "../config.php";
$sql="select * from user where role='0' and email='".$_SESSION['email']."'";
$run=mysqli_query($con, $sql);
while($row=mysqli_fetch_assoc($run))
{
  $fname=$row["firstname"];
  $lname=$row["lastname"];
  $email=$row["email"];
  $uname=$row["firstname"]." ".$row["lastname"];
  $pass=md5($row["password"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo ucwords(basename($_SERVER['SCRIPT_FILENAME'], ".php")); ?></title>
  <meta name="author" content="Tamilarasu Arunachalam">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>

<body>
  <header style="z-index:999 !important;">
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark primary-nav">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="../assets/logo.png" alt="" id="brand-logo" class="img-fluid" width="50px" height="50px"></a>
        <button class="navbar-toggler border-0 outline-0 hamburger collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon hamburger-icon"></span>
          <span class="close-icon py-1">✖</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'home.php') {
                                  echo 'active';
                                } ?>">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'blog feed.php') {
                                  echo 'active';
                                } ?>">
              <a class="nav-link" href="blog feed.php">Feed</a>
            </li>
            <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'my blogs.php' || basename($_SERVER['SCRIPT_FILENAME']) == 'details.php' || basename($_SERVER['SCRIPT_FILENAME']) == 'add blog.php') {
                                  echo 'active';
                                } ?>">
              <a class="nav-link" href="my blogs.php">My Blogs</a>
            </li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a type="button" class="nav-link dropdown-toggle" style="background:none;color:white;" data-toggle="dropdown" href="#">
                <i class="fa fa-user"></i>&nbsp;<?php echo ucwords($uname) ?>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu rounded-0" role="menu" style="background:white;padding:4px;">
                <li class="dropdown-item"><a href="profile.php" class="text-decoration-none text-dark">Profile</a></li>
                <li class="dropdown-item"><a href="password.php" class="text-decoration-none text-dark">Password</a></li>
                <li class="dropdown-item"><a href="signout.php" class="text-decoration-none text-dark">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="mt-5 pt-5">