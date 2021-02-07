<?php
session_start();
include_once "../config.php";
include_once "includes/header.php";
?>
<div class="row justify-content-md-center">
    <div class="col-md-4 py-3">
        <div class="card rounded-0">
            <div class="card-heading bg-dark text-light text-center">
                <h5>Add Category</h5>
            </div>
            <div class="card-body">
                <form action="main/create category.php" method="post">
                    <input type="text" name="category" id="category" class="form-control rounded-0" required>
            </div>
            <div class="card-footer text-center">
                <input type="submit" value="Add" name="add" class="btn btn-dark rounded-0">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
$sno = 1;

$query = "select * from category order by id asc";
$dom = mysqli_query($con, $query);
if (mysqli_num_rows($dom) > 0) {
?>
    <div class="row justify-content-md-center p-5">
        <div class="col-md-6">
            <div class="card card-light rounded-0">
                <div class="card-heading bg-primary text-light">
                    <h4 class="card-title text-center">Categories</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        while ($row = mysqli_fetch_assoc($dom)) {
                            echo '<tr>
                    <td>' . $sno . '</td>
                    <td>' . $row["category"] . '</td>
                    <td><a href="" class="text-primary text-decoration-none" data-toggle="modal" data-target="#edit-category' . $row["id"] . '"  data-id="' . $row["id"] . '"><i class="fa fa-pencil"></i></a>&emsp;
                    <a href="main/delete category.php?id=' . $row["id"] . '" class="text-decoration-none text-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>';
                            echo '<div class="justify-content-md-center">
                        <div class="modal modal-fade mt-2" id="edit-category' . $row["id"] . '" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-sm mt-5 py-2">
                                <div class="modal-content rounded-0">
                                    <div class="modal-heading text-center bg-dark text-light">
                                        <button type="button" data-dismiss="modal" class="close text-white p-1">&times;</button>
                                        <h4>Edit Category</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="main/edit category.php" method="POST">
                                            <input type="hidden" name="id" id="id" value="' . $row["id"] . '">
                                            <input type="text" name="category" id="category" class="form-control rounded-0" value="' . $row["category"] . '" required>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                            <input type="submit" value="Change" name="change" class="btn btn-dark rounded-0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                            $sno++;
                        }
                    }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "includes/footer.php" ?>