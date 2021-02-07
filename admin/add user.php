<?php
session_start();
include_once "../config.php";
include_once "includes/header.php";

$sql="select * from user where role='0'";
$run=mysqli_query($con, $sql);
foreach($run as $row){
?>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card rounded-0">
          <div class="card-header bg-dark text-light">
            <div class="card-title">
              <h4 class="text-center">Users</h4>
            </div>
          </div>
          <div class="card-body table-responsive">
            <table class="table">
            <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            </tr>
            <?php
                echo "<tr>
                <td>".$row['firstname']."</td>
                <td>".$row['lastname']."</td>
                <td>".$row['email']."</td>
              </tr>"
            ?>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
<?php
}
include_once "includes/footer.php";
?>
