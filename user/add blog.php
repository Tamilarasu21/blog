<?php
session_start();
include_once "../config.php";
include_once "includes/header.php";
?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-10 py-3">
            <div class="card bg-dark rounded-0">
                <div class="card-heading">
                    <div class="card-title text-light text-center">
                        <h5>Create a Post</h5>
                    </div>
                </div>
                <div class="card-body bg-light addBlog">
                    <form action="main/create blog.php" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
                        <div class="form-group">
                            <div class="col inputGroupContainer">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rounded-0"><i class="fa fa-header"></i></span>
                                    </div>
                                    <input type="text" name="title" id="title" pattern=".{5,}" value="" class="form-control rounded-0" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col inputGroupContainer">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rounded-0"><i class="fa fa-chevron-circle-down"></i></span>
                                    </div>
                                    <select name="category" id="category" class="form-control rounded-0" required>
                                        <option value="" disabled hidden selected>Select a Category</option>
                                        <?php
                                        $sql = "select * from category order by id asc";
                                        $bom = mysqli_query($con, $sql);
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
                                <textarea name="content" id="content" cols="30" rows="10" class="content rounded-0" style="resize:none;min-width:1000px;" required placeholder="Place your content here"></textarea>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col inputGroupContainer">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rounded-0"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input type="text" name="keywords" id="keywords" class="form-control rounded-0" pattern=".{2,}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col inputGroupContainer">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rounded-0"><i class="fa fa-file-picture-o"></i></span>
                                    </div>
                                    <div class="custom-file">
                                        <input class="custom-file-input form-control" name="image" accept=".png, .jpeg, .jpg" id="inputGroupFile" type="file" required>
                                        <label class="custom-file-label rounded-0" for="inputGroupFile">Upload Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col inputGroupContainer">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rounded-0"><i class="fa fa-user-o"></i></span>
                                    </div>
                                    <?php
                                    $email = $_SESSION['email'];
                                    $s = "select * from user where email='" . $email . "'";
                                    $r = mysqli_query($con, $s);
                                    foreach ($r as $w) {
                                        $uname = ucwords($w["firstname"] . " " . $w["lastname"]);
                                    }
                                    ?>
                                    <input type="text" name="uploaded_by" id="uploaded_by" class="form-control rounded-0" value="<?php echo $uname; ?>" readonly></script>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer bg-light">
                    <div class="text-center"><input type="submit" name="post" value="Post" class="btn btn-dark rounded-0" id="addBlog" onclick="tunymce()"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php" ?>