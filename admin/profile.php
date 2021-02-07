<?php
session_start();
include_once "../config.php";
include_once "includes/header.php";
?>
<div class="row justify-content-center">
    <?php
    $Url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($Url, "update=success") == true) {
        echo '<div class="alert alert-success alert-dismissible text-center col-md-4 col-md-offset-3">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Updated Successfully</strong></div>';
    } else if (strpos($Url, "update=failed") == true) {
        echo '<div class="alert alert-danger alert-dismissible text-center col-md-4 col-md-offset-4">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Failed To Update</strong></div>';
    }
    ?>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4  py-2">
        <br>
        <div class="card bg-dark rounded-0">
            <div class="card-heading">
                <div class="card-title text-center text-light"><b>Edit Profile</b></div>
            </div>
            <div class="card-body bg-light">
                <form action="main/update profile.php" method="POST">
                    <div class="form-group">
                        <div class="col inputGroupContainer">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fa fa-user-o"></i></span>
                                </div>
                                <input type="text" class="form-control rounded-0" placeholder="First Name" name="firstname" value="<?php echo $fname; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col inputGroupContainer">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fa fa-user-o"></i></span>
                                </div>
                                <input type="text" class="form-control rounded-0" placeholder="Last Name" name="lastname" value="<?php echo $lname; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col inputGroupContainer">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fa fa-envelope-o"></i></span>
                                </div>
                                <input type="text" class="form-control rounded-0" placeholder="Email" name="email" value="<?php echo $email; ?>">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="card-footer bg-light">
                <div class="text-center"><button class="btn btn-dark rounded-0" name="update" type="submit">Update</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>
<div class="text-center"><a href="password.php" class="text-decoration-none">Change Password?</a></div>
<?php
include_once "includes/footer.php";
?>