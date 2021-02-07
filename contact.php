<?php include_once "includes/header.php"; ?>

<!-- content start -->
<main>
  <div class="container mt-5" style="z-index: 0;">
    <div class="row mt-5 mb-3">
      <div class="col-md-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe height="500" width="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125281.99028147191!2d77.29377167236326!3d11.108742609313296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba907b0424d75b9%3A0x4750551698a91687!2sTiruppur%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1603951663659!5m2!1sen!2sin" class="embed-responsive-item"></iframe>
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="text-center text-success">Contact Us</h2><br>
        <form action="" method="post">
          <div class="form-row contact">
            <div class="form-group col-md-6">
              <input type="text" name="firstname" id="firstname" pattern="[A-Za-z0-9]{1,15}$" class="form-control rounded-0" placeholder="First Name*" required>
            </div>
            <div class="form-group col-md-6">
              <input type="text" name="lastname" id="lastname" pattern="[A-Za-z0-9]{1,15}$" class="form-control rounded-0" placeholder="Last Name*" required>
            </div>
            <div class="form-group col-md-12">
              <input type="email" name="email" id="email" pattern="[a-z0-9]+@[a-z]+\.[a-z]{2,}$" class="form-control rounded-0" placeholder="Email*" required>
            </div>
            <div class="form-group col-md-12">
              <input type="text" name="subject" id="subject" class="form-control rounded-0" placeholder="Subject*" required>
            </div>
            <div class="form-group col-md-12">
              <textarea name="message" id="message" cols="20" rows="3" class="form-control rounded-0" placeholder="Message*" pattern="[A-Za-z0-9]{1,1000}$" required="required" style="resize: none;"></textarea>
            </div>
            <div class="col-md-4 ml-auto"><input type="submit" value="Submit" class="btn btn-primary btn-block rounded-0"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- content ends -->
<?php include_once "includes/footer.php"; ?>
</main>