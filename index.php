<?php
if (!file_exists("database.php")) {
  echo "<script>window.location='install/index.html'</script>";
}

include_once "includes/header.php";
?>
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