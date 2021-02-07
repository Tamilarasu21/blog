<?php
session_start();
include_once "../config.php";
include_once "includes/header.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from blog where id='" . $id . "'";
    $run = mysqli_query($con, $sql);
    while ($rw = mysqli_fetch_assoc($run)) {

?>
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card rounded-0">
                    <div class="card-heading bg-dark">
                        <div class="card-title text-light text-center"><h5>Change Image</h5></div>
                    </div>
                    <div class="card-body text-center">
                        <img src="../blog/images/<?php echo $rw['image']; ?>" alt="<?php echo $rw["title"] ?>" class="img-fluid rounded-0" width="200" height="100"><br><br>
                        <form action="main/update-blog-image.php?id=<?php echo $rw["id"] ?>" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="id" value="<?php echo $rw["id"] ?>">
                            <input type="hidden" name="oldimage" value="<?php echo $rw["image"] ?>">
                            <input type="file" name="newimage" accept=".png, .jpg, .jpeg" class="form-control">
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" value="Change" name="update" class="btn btn-dark rounded-0">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 py-3">
                <div class="card bg-dark rounded-0">
                    <div class="card-heading p-1">
                        <div class="card-title text-light text-center">
                            <h5>Edit Post</h5>
                        </div>
                    </div>
                    <div class="card-body bg-light">
                        <form action="main/update blog.php?id=<?php echo $rw["id"] ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col inputGroupContainer">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text rounded-0"><i class="fa fa-header"></i></span>
                                        </div>
                                        <input type="text" name="title" id="title" value="<?php echo $rw["title"] ?>" class="form-control rounded-0">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col inputGroupContainer">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text rounded-0"><i class="fa fa-th"></i></span>
                                        </div>
                                        <select name="category" id="category" class="form-control rounded-0">
                                            <option value="<?php echo $rw["category"] ?>" hidden selected><?php echo $rw["category"] ?></option>
                                            <?php
                                            $sq = "select * from category where category!='" . $rw["category"] . "' order by id asc";
                                            $bom = mysqli_query($con, $sq);
                                            while ($row = mysqli_fetch_assoc($bom)) {
                                                echo '<option value="' . $row["category"] . '">' . $row["category"] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col inputGroupContainer">
                                    <!-- <div class="input-group">-->
                                    <!-- <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div> -->
                                    <textarea name="content" id="content" cols="30" rows="10" class="content" style="resize:none;min-width:1000px;" required placeholder="Place your content here"><?php echo $rw["content"] ?></textarea>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col inputGroupContainer">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text rounded-0"><i class="fa fa-key"></i></span>
                                        </div>
                                        <input type="text" name="keywords" id="keywords" class="form-control rounded-0" pattern=".{2,}" value="<?php echo $rw["keywords"] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col inputGroupContainer">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text rounded-0"><i class="fa fa-image"></i></span>
                                        </div>
                                        <input type="text" name="uploaded_by" id="uploaded_by" class="form-control rounded-0" value="<?php echo $rw["uploaded_by"]; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="text-center"><button type="submit" name="update" class="btn btn-dark rounded-0">Update</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
include_once "includes/footer.php" ?>
