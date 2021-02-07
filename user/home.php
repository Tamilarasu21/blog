<?php
session_start();
include_once "../config.php";
include_once "includes/header.php";
?>
<div class="container">
  <div class="row justify-content-center">
    <?php
    $Url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($Url, "signin=success") == true) {
      echo '<div class="alert alert-success alert-dismissible text-center col-md-5 col-md-offset-3">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Welcome ' . $uname . '</strong></div>';
    }
    ?>
  </div>
</div>
<div class="container">
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.
  </p>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.
  </p>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.
  </p>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Quaerat aut id delectus nam error voluptatibus dolorum modi, quod quia cumque autem,
    saepe, atque illum rerum cupiditate necessitatibus iste explicabo quisquam.
  </p>
</div>
<?php include_once "includes/footer.php"; ?>