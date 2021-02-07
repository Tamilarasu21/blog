<?php
if (!file_exists("database.php")) {
  echo "<script>window.location='install/index.html'</script>";
}

include_once "includes/header.php";
?>
<main>
  <div class="container">
    <?php
    $Url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($Url, "signup=success") == true) {
      echo '<div class="alert alert-success alert-dismissible text-center col-md-5 col-md-offset-3">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>You are successfully regisered</strong></div>';
    } elseif (strpos($Url, "signup=failure") == true) {
      echo '<div class="alert alert-danger alert-dismissible text-center col-md-5 col-md-offset-3">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Please fill all the fields!</strong></div>';
    } elseif (strpos($Url, "signin=failure") == true) {
      echo '<div class="alert alert-danger alert-dismissible text-center col-md-5 col-md-offset-3">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Please check your fields!</strong></div>';
    }
    ?>
  </div>
  <!-- content start -->
  <div class="container" style="position:relative;z-index:-1;margin-top:-15px;">
    <h3 class="text-center text-info"><strong>Our Services</strong></h3><br>
    <div class="row">
      <div class="col-md-4 text-center">
        <img src="assets/programming.png" alt="" class="img-fluid" width="120" height="120">
        <h4 class="text-primary"><strong>Web Development</strong></h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptatum maiores, necessitatibus sunt temporibus cum!</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="assets/shapes.png" alt="" class="img-fluid" width="120" height="120">
        <h4 class="text-primary"><strong>Web Designing</strong></h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptatum maiores, necessitatibus sunt temporibus cum!</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="assets/cloud.png" alt="" class="img-fluid" width="120" height="120">
        <h4 class="text-primary"><strong>Cloud Database</strong></h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptatum maiores, necessitatibus sunt temporibus cum!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 text-center">
        <img src="assets/cloud-storage.png" alt="" class="img-fluid" width="120" height="120">
        <h4 class="text-primary"><strong>Cloud Deployment</strong></h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptatum maiores, necessitatibus sunt temporibus cum!</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="assets/checklist.png" alt="" class="img-fluid" width="120" height="120">
        <h4 class="text-primary"><strong>Content Writing</strong></h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptatum maiores, necessitatibus sunt temporibus cum!</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="assets/banner.png" alt="" class="img-fluid" width="120" height="120">
        <h4 class="text-primary"><strong>Digital Marketing</strong></h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptatum maiores, necessitatibus sunt temporibus cum!</p>
      </div>
    </div>
  </div>
<?php include_once "includes/footer.php"; ?>
</main>
<!-- content end -->