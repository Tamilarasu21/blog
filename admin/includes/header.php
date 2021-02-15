<?php
if (!isset($_SESSION["admin"])) {
  header("Location:../index.php");
}
$sql = "select * from user where role='1' and email='" . $_SESSION['admin'] . "'";
$run = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($run)) {
  $fname = $row["firstname"];
  $lname = $row["lastname"];
  $email = $row["email"];
  $uname = $row["firstname"] . " " . $row["lastname"];
  $pass = md5($row["password"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="admin-panel" />
  <meta name="author" content="Tamilarasu A" />
  <title><?php echo ucwords(basename($_SERVER['SCRIPT_FILENAME'], ".php")); ?></title>
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background:snow;">
  <div class="d-flex" id="wrapper">
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-primary"><b>QueryPup</b></div>
      <div class="list-group list-unstyled list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-dark text-light">Dashboard</a>
        <li class="nav-item py-1">
          <a class="nav-link collapsed text-light" href="#submenu0" data-toggle="collapse" data-target="#submenu0"><i class="fa fa-angle-right mx-1"></i>Blog</a>
          <div class="collapse" id="submenu0" aria-expanded="false">
            <ul class="flex-column pl-4 nav">
              <li class="nav-item"><a class="nav-link text-light" href="add blog.php">Add Blog</a></li>
              <li class="nav-item"><a class="nav-link text-light" href="our blogs.php">Our Blogs</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item py-1">
          <a class="nav-link collapsed text-light" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-angle-right mx-1"></i>Categories</a>
          <div class="collapse" id="submenu1" aria-expanded="false">
            <ul class="flex-column pl-4 nav">
              <li class="nav-item"><a class="nav-link text-light" href="add category.php">Add Category</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item py-1">
          <a class="nav-link collapsed text-light" href="#submenu2" data-toggle="collapse" data-target="#submenu2"><i class="fa fa-angle-right mx-1"></i>Users</a>
          <div class="collapse" id="submenu2" aria-expanded="false">
            <ul class="flex-column pl-4 nav">
              <li class="nav-item"><a class="nav-link text-light" href="add user.php">Users</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item py-1">
          <a class="nav-link collapsed text-light" href="#submenu3" data-toggle="collapse" data-target="#submenu3"><i class="fa fa-angle-right mx-1"></i>Admin</a>
          <div class="collapse" id="submenu3" aria-expanded="false">
            <ul class="flex-column pl-4 nav">
              <li class="nav-item"><a class="nav-link text-light" href="add admin.php">Admins</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item py-1">
          <a class="nav-link collapsed text-light" href="#submenu4" data-toggle="collapse" data-target="#submenu4"><i class="fa fa-angle-right mx-1"></i>Comments</a>
          <div class="collapse" id="submenu4" aria-expanded="false">
            <ul class="flex-column pl-4 nav">
              <li class="nav-item"><a class="nav-link text-light" href="#">Enable Comment</a></li>
              <li class="nav-item"><a class="nav-link text-light" href="#">Disable Comment</a></li>
              <li class="nav-item"><a class="nav-link text-light" href="#">Delete Comment</a></li>
            </ul>
          </div>
        </li>
      </div>
    </div>

    <div id="page-content-wrapper">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
          <a href="#" type="button" id="menu-toggle">
            <i class="fa fa-navicon text-light"></i>
          </a>
          <a href="#" class="navbar-toggler navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent" style="color:white;">
            <img src="../assets/man_one.png" class="img-circle" alt="" width="30" height="30">
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown text-right">
                <a class="nav-link bg-dark text-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo ucwords($uname); ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right bg-dark text-right rounded-0" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item bg-dark text-light" href="profile.php">Profile</a>
                  <a class="dropdown-item bg-dark text-light" href="password.php">Change Password</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item bg-dark text-light" href="main/signout.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="container">
      <br>
        <div class="row justify-content-center text-center">
          <div class="col-md-5">
            <?php
            $Url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if (strpos($Url, "deleted") == true) {
              echo '<div class="alert alert-success alert-dismissible text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fa fa-times-circle-o"></i></a>
                <strong>Post Deleted Successfully <i class="fa fa-check"></i></strong></div>';
            }
            if (strpos($Url, "edited") == true) {
              echo '<div class="alert alert-success alert-dismissible text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="fa fa-times-circle-o"></i></a>
                <strong>Updated Successfully <i class="fa fa-check"></i></strong></div>';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="container-fluid">