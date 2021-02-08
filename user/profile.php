<?php
session_start();
include_once "../config.php";
include_once "includes/header.php";
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card rounded-0">
                <div class="card-header">
                    <div class="card-title text-center"><b>Edit Profile</b></div>
                </div>
                <div class="card-body">
                    <form action="main/update-profile.php" method="POST">
                        <div class="form-group">
                            <div class="inputGroupContainer">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rounded-0"><i class="fa fa-user-o"></i></span>
                                    </div>
                                    <input type="text" class="form-control rounded-0" placeholder="First Name" name="firstname" value="<?php echo $fname; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="inputGroupContainer">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rounded-0"><i class="fa fa-user-o"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $lname; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="inputGroupContainer">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rounded-0"><i class="fa fa-envelope-o"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <div>
                        <div class="text-center"><button class="btn btn-primary rounded-0" name="update" type="submit">Update</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center"><a href="password.php" class="text-decoration-none">Change Password?</a></div><br>
</div>
<?php
include_once "includes/footer.php";
?>