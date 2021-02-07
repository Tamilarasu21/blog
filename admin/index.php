<?php
session_start();
if (!isset($_SESSION["admin"])) {
  header("Location:../index.php");
}

include_once "../config.php";
include_once "includes/header.php";
?>
<div class="row p-2">
  <div class="col-md-3 p-2">
    <div class="card bg-success text-light rounded-0">
      <div class="card-body">
        <div class="row p-3">
          <div class="col-lg-10 text-center">
            <h3><a href="add user.php" class="text-decoration-none text-light">Users</a></h3>
          </div>
          <div class="col-lg-2 text-center">
            <i class="fa fa-user-o fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 p-2">
    <div class="card bg-primary text-light rounded-0">
      <div class="card-body">
        <div class="row p-3">
          <div class="col-lg-10 text-center">
            <h3><a href="add admin.php" class="text-decoration-none text-light">Admin</a></h3>
          </div>
          <div class="col-lg-2 text-center">
            <i class="fa fa-bullseye fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 p-2">
    <div class="card bg-warning text-light rounded-0">
      <div class="card-body">
        <div class="row p-3">
          <div class="col-lg-10 text-center">
            <h3><a href="our blogs.php" class="text-decoration-none text-light">Blogs</a></h3>
          </div>
          <div class="col-lg-2 text-center">
            <i class="fa fa-pencil fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3 p-2">
    <div class="card bg-danger text-light rounded-0">
      <div class="card-body">
        <div class="row p-3">
          <div class="col-lg-10 text-center">
            <h3><a href="" class="text-decoration-none text-light">Comments</a></h3>
          </div>
          <div class="col-lg-2 text-center">
            <i class="fa fa-comments-o fa-2x"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam assumenda non possimus laborum illo mollitia distinctio repudiandae omnis enim. Dignissimos, sit, fugiat, facere maiores praesentium rem ex accusantium eos dolores distinctio cupiditate quas quisquam tempora laborum in soluta ducimus. Aliquam nulla asperiores quasi eligendi delectus veniam quia, molestiae minima necessitatibus atque velit ipsum fugiat ducimus adipisci, quisquam a sint nisi tempore consequatur ipsa commodi ipsam totam veritatis! Tempore, fuga! Iste praesentium odit asperiores rerum dignissimos perferendis tempore, laboriosam doloremque distinctio voluptates nesciunt itaque aliquid. Nihil corrupti, suscipit deserunt in eveniet veritatis nisi ut qui dicta asperiores voluptates consequuntur odit architecto.</p>
<?php include_once "includes/footer.php" ?>