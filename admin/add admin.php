<?php
session_start();
include_once "../config.php";
include_once "includes/header.php";
?>
<div class="row justify-content-md-center mt-3">
    <div class="col-md-8">
        <div class="card rounded-0">
            <div class="card-heading bg-dark text-light">
                <div class="card-title text-center">
                    <h4 class-"text-center">Admins</h4>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <tr>
                        <th colspan="5" style="text-align:right;" class="border border-dark"><a href="" data-toggle="modal" data-target="#addAdmin" class="text-decoration-none text-dark"><i class="fa fa-plus"></i>&nbsp;Add Admin</a></th>
                    </tr>
                    <?php
                    $sno = 1;
                    $sql = "select * from user where role=1 and email!='" . $_SESSION["admin"] . "'";
                    $run = mysqli_query($con, $sql);
                    if (mysqli_num_rows($run)) {
                    ?>
                        <tr>
                            <th>S.No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($run)) { ?>
                            <tr>
                                <td><?php echo $sno ?></td>
                                <td><?php echo $row["firstname"] ?></td>
                                <td><?php echo $row["lastname"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td><a href="" data-target="edit-admin"></a><a href="create admin.php?id=<?= $row['id'] ?>" class="text-danger text-decoration-none"><i class="fa fa-trash"></i></a></td>
                            </tr>
                    <?php
                            $sno++;
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-fade mt-3" id="addAdmin">
    <div class="modal-dialog modal-sm mt-5">
        <div class="modal-content rounded-0">
            <div class="modal-heading bg-dark text-light text-center">
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Admin</h4>
            </div>
            <div class="modal-body">
                <form action="main/create admin.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="firstname" id="firstname" placeholder="First Name" class="form-control rounded-0" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" id="lastname" placeholder="Last Name" class="form-control rounded-0" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control rounded-0" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control rounded-0" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" class="form-control rounded-0" required>
                    </div>
            </div>
            <div class="modal-footer justify-content-center" style="align-self:middle">
                <input type="submit" value="Add" class="btn btn-dark rounded-0" name="add">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once "includes/footer.php";
?>