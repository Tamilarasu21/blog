<?php
session_start();
include_once "../config.php";
include_once "includes/header.php";
?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 py-2">
        <br>
        <div class="card bg-dark rounded-0">
            <div class="card-heading">
                <div class="card-title text-center text-light"><b>Change Password</b></div>
            </div>
            <div class="card-body bg-light">
                <form action="main/change password.php" method="POST">
                    <div class="form-group">
                        <div class="col inputGroupContainer">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fa fa-unlock-alt"></i></span>
                                </div>
                                <input type="password" class="form-control rounded-0" name="opassword" placeholder="Old Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col inputGroupContainer">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fa fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control rounded-0" name="npassword" placeholder="New Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col inputGroupContainer">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0"><i class="fa fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control rounded-0" name="cnpassword" placeholder="Retype New password">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="card-footer bg-light">
                <div class="text-center"><button class="btn btn-dark rounded-0" type="submit" name="change">Change</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="text-center"><a href="profile.php">Edit Profile?</a></div>
<?php include_once "includes/footer.php"; ?>