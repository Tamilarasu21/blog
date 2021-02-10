<?php
session_start();
include_once "includes/header.php";
include_once "../config.php";

if (isset($_GET["id"])); {
    $id = $_GET["id"];
    $sq = "select * from blog where id='" . $id . "'";
    $ru = mysqli_query($con, $sq);
    while ($ro = mysqli_fetch_array($ru)) {
?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2 class="text-left text-info font-weight-bold"><b><?php echo $ro["title"] ?></b></h2>
                    <small class="text-center text-black"><?php echo "<b class='text-secondary'>Created at : </b>" . $ro["created_at"] ?> | <?php echo "<b>Posted by : </b>" . $ro["uploaded_by"] ?></small>
                    <hr class="border border-black"><br>
                    <img src="../blog/images/<?php echo $ro["image"] ?>" alt="img" class="img-responsive" style="height:200px;width:950px">
                    <p>&emsp;&emsp;&emsp;&emsp;<?php echo $ro["content"] ?></p>
                    <div class="text-center"><button type="button" class="btn btn-default border-dark rounded-0" onclick="window.history.back();">Back to Feed</button></div>
                    <hr>
                    <h4>Comments</h4>
                    <form action="main/comment.php" method="post">
                        <input type="hidden" name="postid" value="<?php echo $id ?>">
                        <input type="hidden" name="username" value="<?php echo $ro["uploaded_by"] ?>">
                        <textarea name="comment" id="comment" cols="10" rows="10" class="form-control rounded-0" style="resize:none;height:50px;"></textarea>
                        <input type="submit" value="comment" name="add_comment" class="btn btn-info rounded-0 m-2 p-2" style="float:right;">
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <hr>
                    <?php
                        $s="select * from comments where postid='" . $id . "'";
                        $r=mysqli_query($con, $s);
                        if(mysqli_num_rows($r) != 0){
                            echo '<h4 class="text-center font-weight-bold text-success border border-success">Comments</h4>';
                        }else{
                            echo '<h6 class="text-center text-primary">No Comments here</h6>';
                        }
                    ?>
                    <?php
                    $que = "select * from comments where postid='" . $id . "'";
                    $run = mysqli_query($con, $que);
                    foreach ($run as $ran) {
                    ?>
                        <p><span class="font-weight-bold text-info h6 pull-left"><?php echo $ran["username"] ?></span>
                        <span class="ml-2 text-dark"><?php echo $ran["comment"] ?></span></p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
<?php
    }
}
?>
<?php include_once "includes/footer.php"; ?>